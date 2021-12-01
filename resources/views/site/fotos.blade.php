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
        <h2>fotos</h2>
        @if($photos == '[]')
            <h2 style="margin: 39.5px 0;font-size:20px;text-decoration:none;">nenhuma foto foi adicionada</h2>
        @else
            @foreach($photos as $photo)
            <div class="listQuartos">
                <img src="img/Photos/{{$photo->image}}" alt="Essa imagem contem algum erro">
                <div class="informacoesQuartos">
                    <h3>{{$photo->title}}</h3>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</section>
@endsection