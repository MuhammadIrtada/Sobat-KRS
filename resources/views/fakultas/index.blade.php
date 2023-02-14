<x-app-layout theme="Fakultas">
    <x-slot:routeCreate>{{ route('fakultas.create') }}</x-slot:routeCreate>
    
    <table class="table table-primary table-striped align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Fakultas</th>
                <th class="text-center">Jumlah Program Studi</th>
                <th class="text-center">Jumlah Siswa</th>
                <th class="text-center">Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fakultas as $item)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $item->nama }}</td>
                <td class="text-center">{{ $item->prodis->count() }}</td>
                <td class="text-center">{{ $item->users->count() }}</td>
                <td class="text-center">
                    <a class="btn btn-primary" href="{{ route('fakultas.show', $item->nameToStripe($item->nama)) }}"
                        role="button">
                        <i class="bi bi-eye"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>