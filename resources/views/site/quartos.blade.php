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
                    <button id="id{{$quarto->id}}" class="buttonQuartos">veja mais</button>
                    <div id="{{str_replace(' ','_',$quarto->title)}}" class="modalContainer">
                        <div class="modal">
                            <button class="btnFechar" title="Fechar">X</button>
                            <h3>{{$quarto->title}}</h3>
                            <button class="buttonQuartos">reservar</button>
                        </div>
                    </div>
                    <script>
                        function iniciaModal(modalID) {
                        const modal = modalID;
                        const bodyhidden = document.querySelector('body')
                        if(modal){
                            modal.classList.add('show');
                            bodyhidden.classList.add('hidden');
                            modal.addEventListener('click', (e) => {
                            if(e.target.className == 'modalContainer show' || e.target.className == 'btnFechar') {
                                modal.classList.remove('show');
                                bodyhidden.classList.remove('hidden');
                            }
                            });
                        }
                        }
                        const id{{$quarto->id}} = document.getElementById("id{{$quarto->id}}");
                        const {{str_replace(' ','_',$quarto->title)}} = document.getElementById("{{str_replace(' ','_',$quarto->title)}}");
                        if({{str_replace(' ','_',$quarto->title)}} != null){
                            id{{$quarto->id}}.addEventListener('click', () => iniciaModal({{str_replace(' ','_',$quarto->title)}}));
                        }
                    </script>
                </div>
            </div>
            @endforeach
            @endif
        </div>
</section>
@endsection