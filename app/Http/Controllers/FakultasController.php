<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fakultas = Fakultas::orderBy('nama')->get();
        return view('fakultas.index', compact('fakultas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fakultas = new Fakultas;
        $validated = $request->validate([
            'nama' => 'required'
        ]);
        $fakultas->nama = $validated['nama'];
        $fakultas->save();
        return redirect(route('fakultas.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fakultas  $fakultas
     * @return \Illuminate\Http\Response
    */
    public function show($nameStripe)
    {
        $fakultas = Fakultas::where('nama', str_replace('-', ' ', $nameStripe))->first();
        $prodis = Fakultas::find($fakultas->id)->prodis()->get();
        return view('fakultas.show', [
            'fakultas' => $fakultas,
            'prodis' => $prodis,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function edit($nameStripe)
    {
        $fakultas = Fakultas::where('nama', str_replace('-', ' ', $nameStripe))->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fakultas $fakultas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function destroy($nameStripe)
    {
        Fakultas::where('nama', str_replace('-', ' ', $nameStripe))->first()->delete();
        return redirect(route('fakultas.index'));
    }
}
