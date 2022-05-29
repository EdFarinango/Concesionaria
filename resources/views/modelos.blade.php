@extends('layout.main')

@section('title','Modelos')

@section('content')


<h1>Nuestros modelos 2022</h1>
<hr>
<div class="row bg-image hover-zoom">
    @foreach($autos as $auto)
    <div class="col-md-4">
        <div class="card" >
            <img class="card-img-top img-fluid "  src="{{$auto['Imagen']}} " alt="Card image cap" >
            <div class="card-body ">
                <h5 class="card-title ">{{$auto['Marca']}}</h5>
                <p class="card-text">{{$auto['Estado']}}</p>
                <a class=" link-secondary py-3 d-block text-decoration-none text-center" href="{{$auto['Web']}}">Página Oficial</a>

            </div>
        </div>
        <hr >
    </div>
    @endforeach














@endsection()
