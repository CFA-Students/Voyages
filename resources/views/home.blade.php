<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('img/images.png')}}">

    <title>Fnac Voyages</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/voyage.css')}}" rel="stylesheet">
</head>
<body>
@include('layout.header')

<main>
    <section class="py-5 text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Booker votre<br><span class="badge badge-light">nouveau</span> <br>Voyage
                <span class="badge badge-primary ">avec nous !</span>!</h1>
            <p class="lead text-muted">Dénichez THE Voyage a moindre prix !.</p>

        </div>
    </section>

    @yield('content')

</main>

<footer class="text-muted py-5">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Mon Voyage</p>
    </div>
</footer>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
