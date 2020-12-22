@extends('home.index')
@section('home.content')
    <div class="container">
        <div class="row">
            @foreach($voyages as $voyage)
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-3">
                    <div class="card border shadow h-100 p-0">
                        <div class="card-header h-50 p-0">
                            <img class="w-100 h-100 overflow-hidden"
                                 src="{{asset('products/'.$voyage->photo_principale) }}"
                                 alt="Card image cap">
                        </div>
                        <div class="card-body h-25">
                            <h5 class="card-title">{{$voyage->nom}}</h5>
                            <p class="card-text">{{$voyage->description}}</p>
                        </div>
                        <div class="card-footer d-flex flex-row justify-content-end align-items-center">
                            <div class="font-weight-bold text-danger mr-auto"
                                 style="font-size: 200%;">{{number_format($voyage->prix_ht) }} €
                            </div>
                            <div class="text-right">
                                <a href="{{route('voir_voyage',['id'=>$voyage->id]) }}"
                                   class="btn btn btn-outline-secondary">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
