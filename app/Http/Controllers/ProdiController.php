<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodi = Prodi::join('fakultas', 'prodis.fakultas_id', '=', 'fakultas.id')
                ->select('prodis.*')
                ->orderBy('fakultas.nama', 'desc')
                ->get();
        return view('prodi.index', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view('prodi.create', compact('fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prodi = new Prodi;
        $validated = $request->validate([
            'program_studi' => 'required',
            'fakultas' => 'required',
        ]);
        $prodi->nama = $validated['program_studi'];
        $prodi->fakultas_id = $validated['fakultas'];
        $prodi->save();

        return redirect(route('prodi.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function show($nameStripe)
    {
        $prodi = Prodi::where('nama', str_replace('-', ' ', $nameStripe))->first();
        $users = Prodi::find($prodi->id)->users()->get();
            return view('prodi.show', [
            'prodi' => $prodi,
            'users' => $users,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit($nameStripe)
    {
        $fakultas = Fakultas::all();
        $prodi = Prodi::where('nama', str_replace('-', ' ', $nameStripe))->first();
        return view('prodi.edit', [
            'fakultas' => $fakultas,
            'prodi' => $prodi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nameStripe)
    {
        $prodi = Prodi::where('nama', str_replace('-', ' ', $nameStripe))->first();
        $validated = $request->validate([
            'program_studi' => 'required',
            'fakultas' => 'required',
        ]);
        $prodi->nama = $validated['program_studi'];
        $prodi->fakultas_id = $validated['fakultas'];
        $prodi->save();
        return redirect(route('prodi.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy($nameStripe)
    {
        Prodi::where('nama', str_replace('-', ' ', $nameStripe))->first()->delete();
        return redirect(route('prodi.index'));
    }
}
