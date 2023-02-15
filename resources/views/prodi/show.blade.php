<x-app-layout theme="Program Studi">
    <x-slot:namaItem>{{ $prodi->nama }}</x-slot:namaItem>
    <x-slot:routeEdit>{{ route('prodi.edit', $prodi->nameToStripe($prodi->nama)) }}</x-slot:routeEdit>
    <x-slot:routeDestroy>{{ route('prodi.destroy', $prodi->nameToStripe($prodi->nama)) }}
    </x-slot:routeDestroy>

    <table class="table table-primary table-striped align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Mahasiswa</th>
                <th class="text-center">Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $item->name }}</td>
                <td class="text-center">
                    <a class="btn btn-primary" href="" role="button">
                        <i class="bi bi-eye"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>