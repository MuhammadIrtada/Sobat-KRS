<x-app-layout theme="Fakultas">
    <x-slot:namaItem>{{ $fakultas->nama }}</x-slot:namaItem>
    <x-slot:routeEdit>{{ route('fakultas.edit', $fakultas->nameToStripe($fakultas->nama)) }}</x-slot:routeEdit>
    <x-slot:routeDestroy>{{ route('fakultas.destroy', $fakultas->nameToStripe($fakultas->nama)) }}
    </x-slot:routeDestroy>

    <table class="table table-primary table-striped align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Program Studi</th>
                <th class="text-center">Jumlah Siswa</th>
                <th class="text-center">Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prodis as $item)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $item->nama }}</td>
                <td class="text-center">{{ $item->users->count() }}</td>
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