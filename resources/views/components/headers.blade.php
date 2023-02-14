<div class="border-bottom border-dark mb-3 row justify-content-between">
    <h1 class="col align-self-start p-0">{{ "$theme $namaItem" }}</h1>
    @isset($namaItem)
    <div class="col-auto align-self-end my-2">
        <a class="btn btn-primary" href="{{ $routeEdit }}" role="button">
            <i class="bi bi-pencil-square"></i> Edit
        </a>
    </div>
    <div class="col-auto align-self-end my-2">
        <form action="{{ $routeDestroy }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">
                <i class="bi bi-trash"></i> Delete
            </button>
        </form>
    </div>
    @endisset
    @isset($routeCreate)
    <a class="btn btn-primary col-auto my-2" href="{{ $routeCreate }}" role="button">
        <i class="bi bi-box-arrow-in-down"></i> Create
    </a>
    @endisset
</div>