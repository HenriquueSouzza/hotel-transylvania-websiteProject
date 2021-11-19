@extends('site.master.layout')
@section('content')
<section class="sectionfotosemform">
    <div class="meiosectionfotosemform">
        <h1>ferias arrepiantes só no hotel transylvania</h1>
        <img src="{{asset('img/linha-removebg-preview.png')}}" alt="">
    </div>
</section>
<section class="sectioncontato">
    <div class="divContForms">
        <h2>área de contato:</h2>
        <form action="" class="formCont" method="get">
            <div class="divFormCont1">
                <div class="inputP">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nome" autocomplete="off" required placeholder="Digite seu Nome..." maxlength="40">
                </div>
                <div class="inputP">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" autocomplete="off" required placeholder="Digite seu Email..." maxlength="40">
                </div>
                <div class="inputP">
                    <i class="fas fa-phone-alt"></i>
                    <input type="text" id="telefone" name="telefone" autocomplete="off" required placeholder="Digite seu Celular.." maxlength="15">
                </div>
            </div>
            <div class="divFormCont1">
                <div class="inputP">
                    <i class="fas fa-question"></i>
                    <select name="assunto" placeholder="Digite sua menssagem...">
                        <option value="" disabled selected hidden>Escolha o assunto...</option>
                        <option value="1">Duvidas</option>
                        <option value="2">Reservas</option>
                        <option value="3">Financeiro</option>
                    </select>
                </div>
                <div class="inputT">
                    <i class="fas fa-edit"></i>
                    <textarea id="texto" name="texto" type="text" required placeholder="Digite sua menssagem..." maxlength="650"></textarea>
                </div>
                <button id="buttonCont" type="submit"><i class="fas fa-paper-plane"></i>Enviar</button>
            </div>
        </form>
    </div>
</section>
@endsection