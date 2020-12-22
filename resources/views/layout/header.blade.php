<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href=""><i class="fas fa-plane-departure"></i>&nbsp;FNAC VOYAGES</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            {{--            <ul class="navbar-nav mr-auto">--}}
            {{--                <li class="nav-item active">--}}
            {{--                    <a class="nav-link" href="">Features--}}
            {{--                        <span class="sr-only">(current)</span>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--                <li class="nav-item dropdown">--}}
            {{--                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button"--}}
            {{--                       aria-haspopup="true" aria-expanded="false">Autres Pages</a>--}}
            {{--                    <div class="dropdown-menu">--}}
            {{--                        <a class="dropdown-item" href="">Action</a>--}}
            {{--                        <a class="dropdown-item" href="">Another action</a>--}}
            {{--                        <a class="dropdown-item" href="">Something else here</a>--}}
            {{--                        <div class="dropdown-divider"></div>--}}
            {{--                        <a class="dropdown-item" href="">Separated link</a>--}}
            {{--                    </div>--}}
            {{--                </li>--}}
            {{--            </ul>--}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0">
                        <input id="search" class="form-control mr-sm-2" type="text"
                               placeholder="Le voyage de vos rêves !">
                        <label for="search">
                            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rechercher</button>
                        </label>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fa fa-shopping-cart"></i> Panier</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-red">
        <a class="navbar-brand"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="">{{$category->nom}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>
