<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>STAB</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/smoothproducts.css') }}">
</head>

<body>
    @if (Auth::check())
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">STAB</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                @include('layouts.menu')
            </div>
        </div>
    </nav>
    @endif
    @yield('content')

    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-4 align-self-center"><img src="{{ asset('assets/img/1200px-SEP_Logo_2019.png') }}" width="100%"></div>
                <div class="col-4 align-self-center"><img src="{{ asset('assets/img/idiomas13.jpg') }}" width="100%"></div>
                <div class="col-4 align-self-center"><img src="{{ asset('assets/img/Logo-TecNM-2017.png') }}" width="100%"></div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2020 Copyright Text</p>
        </div>
    </footer>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{ asset('assets/js/smoothproducts.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    </body>

</html>
