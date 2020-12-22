@extends('shop.index')

@section('shop.content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('')}}">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$voyage->nom}}</li>
        </ol>
    </nav>
    <main role="main">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-6">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('products/'.$voyage->photo_principale)}}"
                             alt="Card image cap">
                    </div>
                </div>
                <div class="col-6">
                    <h1 class="jumbotron-heading">{{$voyage->nom}}</h1>
                    <p class="lead text-muted">{{$voyage->description}} </p>
                    <div class="font-weight-bold text-danger text-right"
                         style="font-size: 170%;">{{number_format($voyage->prix_ht) }} €
                    </div>
                    <hr>
                    <div>
                        <a href="" class="btn btn-cart my-2 btn-block">
                            <i class="fas fa-shopping-cart"></i> Ajouter au Panier
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3>Vous aimerez aussi :</h3>
            <div class="row">
                <?php $count = 0; ?>
                @foreach($voyages as $_voyage)
                    <?php if ($count == 3) break; ?>
                    @if($_voyage != $voyage)
                        @include('components.voyage-card', $_voyage)
                    @else
                        <?php $count--; ?>
                    @endif
                    <?php $count++; ?>
                @endforeach
            </div>
        </div>
    </main>
@endsection

