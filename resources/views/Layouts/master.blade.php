<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist\css\mystyle.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist\css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
{{-- Navebar --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <i class="active">
                <a class="nav-link" href="{{ route('post') }}">Post</a>
            </i>
        <i class="active">
            <a class="nav-link" href="{{ route('Admin.index') }}">Admin</a>
        </i>

        </div>
    </div>
    </div>
</nav>




    @yield('content')




    <script src="asset('bootstrap-5.3.3-dist\js\bootstrap.min.js')"></script>
</body>
</html>
