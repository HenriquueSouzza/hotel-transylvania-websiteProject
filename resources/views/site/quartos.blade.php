@extends('site.master.layout')
@section('content')
<section class="sectionfotosemform">
    <div class="meiosectionfotosemform">
        <h1>ferias arrepiantes só no hotel transylvania</h1>
        <img src="{{asset('img/linha-removebg-preview.png')}}" alt="">
    </div>
</section>
<section class="sectionQuartos">
    <div class="meioQuartos">
        <h2>quartos</h2>
        @foreach($quartos as $quarto)
        <div class="listQuartos">
            <img src="img/rooms/{{$quarto->image}}" alt="imagem teste">
            <div class="informacoesQuartos">
                <h3>{{$quarto->title}}</h3>
                <p>{{$quarto->description}}</p>
                <button id="buttonQuartos">veja mais</button>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection