<x-app-layout theme="Fakultas">
    <form action="{{ route('fakultas.update', $fakultas->nameToStripe($fakultas->nama)) }}" method="post">
        @csrf   
        @method('patch')
        <div class="card text-bg-primary" style="max-width: 48rem;">
            <div class="card-body">
                <div class="container text-stat mb-3 border-bottom border-dark">
                    <div class="row mb-1">
                        <div class="col-3">
                            <label class="col-form-label">Fakultas</label>
                        </div>
                        <div class="col-1 align-self-center">
                            :
                        </div>
                        <div class="col-8">
                            <input type="text" name="nama" value="{{ $fakultas->nama }}" class="form-control @error('nama') is-invalid @enderror">
                        </div>
                    </div>
                    <div class="row mb-3 text-danger">
                        <div class="col-md-8 offset-md-4 ps-3">
                            @error('nama')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="container text-end">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>