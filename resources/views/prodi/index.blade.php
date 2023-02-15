<x-app-layout theme='Program Studi'>
    <x-slot:routeCreate>{{ route('prodi.create') }}</x-slot:routeCreate>
    <table class="table table-primary table-striped align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Prodi</th>
                <th>Fakultas</th>
                <th class="text-center">Jumlah Siswa</th>
                <th class="text-center">Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prodi as $item)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->fakultas->nama }}</td>
                <td class="text-center">{{ $item->users->count() }}</td>
                <td class="text-center">
                    <a class="btn btn-primary" href="{{ route('prodi.show', $item->nameToStripe($item->nama)) }}"
                        role="button">
                        <i class="bi bi-eye"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>