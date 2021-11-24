@extends('site.master.layout')
@section('content')
<section class="sectionfotosemform">
    <div class="meiosectionfotosemform">
        <h1>ferias arrepiantes só no hotel transylvania</h1>
        <img src="{{asset('img/linha-removebg-preview.png')}}" alt="">
    </div>
</section>
<section class="sectionQuartosCreate">
    <div><h2>Criação de um novo quarto</h2></div>
    <div>
        <form action="{{route('site.Create')}}" method="POST">
           @csrf
            <div>
                <input type="text" name="title" placeholder="nome">
                <input type="text" name="description" placeholder="descriçao">
                <button type="submit">enviar</button>
            </div>
       </form>
    </div>
</section>
@endsection