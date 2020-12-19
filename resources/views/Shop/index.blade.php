@extends('home')
@section('content')
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            @foreach($voyages as $voyages)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{asset('products/'.$voyages->photo_principale) }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{{$voyages->nom}} <br> {{$voyages->description}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">{{number_format($voyages->prix_ht) }} €</span>
                            <a href="{{route('voir_voyage',['id'=>$voyages->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
