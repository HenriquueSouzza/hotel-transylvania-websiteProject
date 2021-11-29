@extends('site.master.layout')
@section('content')
<section class="sectionfotosemform">
    <div class="meiosectionfotosemform">
        <h1>ferias arrepiantes só no hotel transylvania</h1>
        <img src="{{asset('img/linha-removebg-preview.png')}}" alt="">
    </div>
</section>
<section class="sectioncontato">
    <img id="teia" src="{{asset('img/teiagrande.png')}}" alt="">
    <div class="containercontato">
        <div class="mapaCont"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.7601878831056!2d25.364975015768042!3d45.51490593807919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b347e5a415de31%3A0xcf922792d921ab7f!2sCastelo%20de%20Bran!5e0!3m2!1spt-BR!2sbr!4v1637770877601!5m2!1spt-BR!2sbr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
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
                <span id="divisor"></span>
                <div class="divFormCont1">
                    <div class="inputP">
                        <i class="fas fa-question"></i>
                        <select name="assunto" placeholder="Digite sua menssagem...">
                            <option value="" disabled selected hidden>Escolha o assunto...</option>
                            <option value="1">Perda de código</option>
                            <option value="2">Dúvidas</option>
                            <option value="3">Reservas</option>
                            <option value="4">Financeiro</option>
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
    </div>
</section>
@endsection