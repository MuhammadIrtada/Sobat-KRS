<x-app-layout theme="User">
    <x-slot:routeCreate>{{ route('user.create') }}</x-slot:routeCreate>
    
    <table class="table table-primary table-striped align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Username</th>
                <th>NIM</th>
                <th>Fakultas</th>
                <th>Program Studi</th>
                <th>Activated</th>
                <th>Role</th>
                <th>Email</th>
                <th class="text-center">Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
            <?php 
                $i = 1
            ?>
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->nim }}</td>
                @isset($item->fakultas)
                <td>{{ $item->fakultas->nama }}</td>
                @else
                <td></td>
                @endisset
                @isset($item->prodi)
                <td>{{ $item->prodi->nama }}</td>
                @else
                <td></td>
                @endisset
                
                <td>
                    <div class="form-check form-switch">
                        @if ($item->is_active == true)
                        <input class="form-check-input" type="checkbox" role="switch" checked>
                        @else
                        <input class="form-check-input" type="checkbox" role="switch">
                        @endif
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                    </div>
                </td>
                
                <td>{{ $item->role }}</td>
                <td>{{ $item->email }}</td>
                <td class="text-center">
                    <a class="btn btn-primary" href="{{ route('fakultas.show', $item->nameToStripe($item->nama)) }}"
                        role="button">
                        <i class="bi bi-eye"></i>
                    </a>
                </td>
            </tr>
            <?php 
                $i++
            ?>
            @endforeach
        </tbody>
    </table>
</x-app-layout>