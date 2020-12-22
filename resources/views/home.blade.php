@include('layout.base.top')

<main>
    <section class="py-5 text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Booker votre<br><span class="badge badge-primary">nouveau</span> <br>Voyage
                <span class="badge badge-danger ">avec nous !</span>!</h1>
            <p class="lead text-muted">Dénichez THE Voyage a moindre prix !.</p>

        </div>
    </section>

    @yield('content')
</main>

@include('layout.base.bottom')
