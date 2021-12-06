@extends('site.master.layout')
@section('content')
<section class="sectionfotosemform">
    <div class="meiosectionfotosemform">
        <h1>ferias arrepiantes só no hotel transylvania</h1>
        <img src="{{asset('img/linha-removebg-preview.png')}}" alt="err">
    </div>
</section>
<section class="sectionQuartos">
    <div class="meioQuartos">
        <h2>quartos</h2>
        @if($quartos == '[]')
            <h2 style="margin: 39.5px 0;font-size:20px;text-decoration:none;">nenhum quarto foi adicionado</h2>
        @else
            @foreach($quartos as $quarto)
            <div class="listQuartos">
                <img src="img/rooms/{{$quarto->image}}" alt="Essa imagem contem algum erro">
                <div class="informacoesQuartos">
                    <h3>{{$quarto->title}}</h3>
                    <p>{{$quarto->description}}</p>
                    <button class="buttonQuartos">veja mais</button>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    <div class="modalContainer">
        <div class="modal">
            <button class="btnFechar" title="Fechar">X</button>
            <h3>aa</h3>
            <button class="buttonQuartos">reservar</button>
        </div>
    </div>
</section>
@endsection