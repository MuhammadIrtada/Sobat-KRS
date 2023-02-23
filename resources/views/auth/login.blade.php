<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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
        </div>
    </nav>
    <div class="bg-info p-5">
        <div class="card p-3 bg-primary" style="max-width: 48rem;">
            <div class="card-header">
                @if (session()->has('loginError'))
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <i class="bi bi-exclamation-triangle pe-2"></i>
                    <div>
                      {{ session('loginError') }}
                    </div>
                  </div>
                @endif
                <h1>Login</h1>
            </div>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-floating mb-1">
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="name@example.com" name="email" value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="mb-3 text-danger">
                        <div class="ps-3">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-floating mb-1">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="mb-3 text-danger">
                        <div class="ps-3">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="container text-end">
                    <button type="submit" class="btn btn-info w-25">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>