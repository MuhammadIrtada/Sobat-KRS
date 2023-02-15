<x-app-layout theme="Program Studi">
    <form action="{{ route('prodi.store') }}" method="post">
        @csrf
        <div class="card text-bg-primary" style="max-width: 48rem;">
            <div class="card-body">
                <div class="container text-stat mb-3 border-bottom border-dark">
                    <div class="row mb-1">
                        <div class="col-3">
                            <label class="col-form-label">Program Studi</label>
                        </div>
                        <div class="col-1 align-self-center">
                            :
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control @error('program_studi') is-invalid @enderror"
                                name="program studi">
                        </div>
                    </div>
                    <div class="row mb-3 text-danger">
                        <div class="col-md-8 offset-md-4 ps-3">
                            @error('program_studi')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-3">
                            <label class="col-form-label">Fakultas</label>
                        </div>
                        <div class="col-1 align-self-center">
                            :
                        </div>
                        <div class="col-8">
                            <select class="form-select" aria-label="Default select example" name="fakultas">
                                <option selected>Pilih Fakultas</option>
                                @foreach ($fakultas as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 text-danger">
                        <div class="col-md-8 offset-md-4 ps-3">
                            @error('fakultas')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="container text-end">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>