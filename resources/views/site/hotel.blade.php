@extends('site.master.layout')
@section('content')
<section class="sectionfotosemform">
    <div class="meiosectionfotosemform">
        <h1>ferias arrepiantes só no hotel transylvania</h1>
        <img src="{{asset('img/linha-removebg-preview.png')}}" alt="">
    </div>
</section>
<section class="sectionHotel">
    <img class="teia" src="{{asset('img/teiagrande.png')}}" alt="">
    <div class="containerMeioHotel">
        <div class="meioHotel">
            <h2 class="titulo">o hotel</h2>
            <p>O Hotel Transilvânia é um resort cinco estrelas que serve de refúgio para que os monstros possam descansar do árduo trabalho de perseguir e assustar os humanos, lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia unde modi temporibus sunt similique eligendi voluptate molestiae necessitatibus ipsa voluptatum. Suscipit fugit ullam quam magni, ab ut vel, sapiente hic molestiae saepe modi tenetur inventore aliquid voluptates laborum perferendis mollitia corrupti placeat. Consequuntur qui soluta quo, vero quibusdam officia tempora voluptatibus maiores voluptates aliquid? Temporibus sed voluptatum iure ipsum provident quos reiciendis perferendis inventore. Adipisci, sapiente similique? Nemo magni quae laborum atque voluptates sint maiores, consequatur, molestias temporibus distinctio explicabo aliquid repellat. Ullam, reprehenderit repellendus aut ducimus maiores accusamus non vero alias quas illum voluptatibus neque id eius reiciendis nemo nobis a nihil quibusdam, blanditiis, consequuntur quos cumque. Voluptatem et saepe, animi necessitatibus reprehenderit ipsa. Quae modi at minus possimus.</p>
        </div>
        <div class="mapaHotel">
            <h3 class="tituloMapaHotel">mapa</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.7601878831056!2d25.364975015768042!3d45.51490593807919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b347e5a415de31%3A0xcf922792d921ab7f!2sCastelo%20de%20Bran!5e0!3m2!1spt-BR!2sbr!4v1637770877601!5m2!1spt-BR!2sbr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        <div class="meioatividades" style="height: 30%;">
            <div class="tituloatividades">
                <h2 style="border:none;font-size:28px;">conheça algumas de nossas atividades</h2>
            </div>
            <div class="slideshow-container" style="height:85%;background-color:rgb(78 0 53 / 36%);">
                <div class="mySlides fade">
                    <div class="tipoatividades">
                        <div class="textoatividades">
                            <h2>piscinas com serviço de bar</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, beatae doloribus ullam adipisci maxime aliquid consequatur dolores exercitationem cum totam provident repellat, ex eius, qui quasi possimus ipsam minus voluptatum error. Fuga eaque, laudantium placeat dolore perferendis ex molestiae? Fuga dolorum laborum eum quo, atque deleniti quibusdam cupiditate sint fugiat..</p>
                        </div>
                        <img src="{{asset('img/piscinafundo.jpg')}}" alt="">
                    </div>
                </div>
                <div class="mySlides fade">
                    <div class="tipoatividades">
                        <div class="textoatividades">
                            <h2>sauna</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, beatae doloribus ullam adipisci maxime aliquid consequatur dolores exercitationem cum totam provident repellat, ex eius, qui quasi possimus ipsam minus voluptatum error. Fuga eaque, laudantium placeat dolore perferendis ex molestiae? Fuga dolorum laborum eum quo, atque deleniti quibusdam cupiditate sint fugiat..</p>
                        </div>
                        <img src="{{asset('img/sauna.jpg')}}" alt="">
                    </div>
                </div>
                <div class="mySlides fade">
                    <div class="tipoatividades">
                        <div class="textoatividades">
                            <h2>bingo</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, beatae doloribus ullam adipisci maxime aliquid consequatur dolores exercitationem cum totam provident repellat, ex eius, qui quasi possimus ipsam minus voluptatum error. Fuga eaque, laudantium placeat dolore perferendis ex molestiae? Fuga dolorum laborum eum quo, atque deleniti quibusdam cupiditate sint fugiat..</p>
                        </div>
                        <img src="{{asset('img/bingo.jpg')}}" alt="">
                    </div>
                </div>
                <div class="mySlides fade">
                    <div class="tipoatividades">
                        <div class="textoatividades">
                            <h2>quadra de tênis</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, beatae doloribus ullam adipisci maxime aliquid consequatur dolores exercitationem cum totam provident repellat, ex eius, qui quasi possimus ipsam minus voluptatum error. Fuga eaque, laudantium placeat dolore perferendis ex molestiae? Fuga dolorum laborum eum quo, atque deleniti quibusdam cupiditate sint fugiat..</p>
                        </div>
                        <img src="{{asset('img/tenis.jpg')}}" alt="">
                    </div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
    </div>
</section>
@endsection