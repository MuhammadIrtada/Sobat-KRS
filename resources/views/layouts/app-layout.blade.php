<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar bg-primary">
        <div class="container-fluid row">
            <div class="col align-self-start">
                <a class="navbar-brand" href="/">Sobat KRS</a>
            </div>
            <div class="col-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        @auth
                        {{ Auth::user()->name }}     
                        @else
                        Login/Register                       
                        @endauth
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        @auth
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <li><button class="dropdown-item">Logout</button></li>
                        </form> 
                        @else
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                        <li><a class="dropdown-item" href="#">Register</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <x-navbar>
                <x-slot:isActive>{{ $theme }}</x-slot:isActive>
            </x-navbar>
            <div class="container col-10 border border-dark bg-info px-5 py-4">
                <x-headers>
                    <x-slot:theme>{{ $theme }}</x-slot:theme>
                    @isset($namaItem)
                    <x-slot:namaItem>{{ $namaItem }}</x-slot:namaItem>
                    <x-slot:routeEdit>{{ $routeEdit }}</x-slot:routeEdit>
                    <x-slot:routeDestroy>{{ $routeDestroy }}</x-slot:routeDestroy>
                    @endisset
                    @isset($routeCreate)
                    <x-slot:routeCreate>{{ $routeCreate }}</x-slot:routeCreate>
                    @endisset
                </x-headers>

                {{ $slot }}
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>