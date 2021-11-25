@extends('site.master.layout')
@section('content')
<section class="sectionfotosemform">
    <div class="meiosectionfotosemform">
        <h1>ferias arrepiantes só no hotel transylvania</h1>
        <img src="{{asset('img/linha-removebg-preview.png')}}" alt="">
    </div>
</section>
<section class="sectionReserva">
    <img class="teia" src="{{asset('img/teiagrande.png')}}" alt="">
    <h2 class="titulo">reserva</h2>
    <div class="divReserva">
        <div>
            <form class="formReserva" action="" method="GET">
                <div class="divFormReserva"><h3>aqui você consegue acompanhar sua reserva!</h3></div>
                <div class="divFormReserva">
                    <div class="inputP" style="margin: 0 0 5px 0;">
                        <i class="fas fa-question"></i>
                        <input type="text" name="codigoReserva" maxlength="15" required placeholder="Digite o codigo de sua reserva...">
                    </div>
                    <a href="{{route('site.contact')}}">Esqueci meu código...</a>
                </div>
                <div class="divFormReserva"><button id="buttonCont" style="margin: 0;" type="submit"><i class="fas fa-paper-plane"></i>buscar</button></div>
            </form>
        </div>
        <img src="{{asset('img/zumbi.png')}}" alt="">
    </div>
</section>
@endsection