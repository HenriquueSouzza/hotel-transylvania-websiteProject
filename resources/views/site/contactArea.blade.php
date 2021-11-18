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
        <form action="" class="formCont" method="get">
            <div>
                <div>
                    <label for="">Nome:</label><br>
                    <input type="text" name="nome" required placeholder="Digite seu Nome..." maxlength="40">
                </div>
                <div>
                    <label for="">Email:</label><br>
                    <input type="text" name="email" required placeholder="Digite seu Email..." maxlength="40">
                </div>
                <div>
                    <label for="">Telefone:</label><br>
                    <input type="text" name="telefone" required placeholder="Digite seu Telefone..." maxlength="40" >
                </div>
            </div>
            <div>
                <div>
                    <label for="">Assunto:</label><br>
                    <input name="assunto" type="text" required placeholder="Digite o assunto..." maxlength="40">
                </div>
                <div>
                    <label for="">Texto:</label><br>
                    <input name="texto" type="text" required placeholder="Digite a menssagem...">
                </div>
                <div>
                    <button type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection