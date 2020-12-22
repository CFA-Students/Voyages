@extends('home.index')
@section('home.content')
    <div class="container">
        <div class="row">
            @foreach($voyages as $voyage)
                @include('components.voyage-card')
            @endforeach
        </div>
    </div>
@endsection
