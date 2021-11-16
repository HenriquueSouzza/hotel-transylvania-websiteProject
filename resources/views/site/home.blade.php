@extends('site.master.layout')
@section('content')
<section class="sectionfoto" >
    <div class="meiosectionfoto">
        <h1>ferias arrepiantes só no hotel transylvania</h1>
        <img src="{{asset('img/linha-removebg-preview.png')}}" alt="">
        <form class="formmeio" action="{{route('site.search')}}" method="post">
            <div class="wrapperdata">
                <div class="data">
                    <label>entrada</label>                        
                    <div class="calendario">
                        <span><i class="far fa-calendar-alt"></i></span>
                        <input type="text" id="from" name="from" required placeholder="Check-in" maxlength="10">
                    </div>
                </div>
                <div class="data">
                    <label>saida</label>
                    <div class="calendario">
                        <span><i class="far fa-calendar-alt"></i></span>
                        <input type="text" id="to" name="to" required placeholder="Check-out" maxlength="10">
                    </div>
                </div>
            </div>
            <div class="wrapperpessoas">
                <div class="pessoas">
                    <label>monstros</label>
                    <input type="number" title='Adultos' name="monstros" required id="monstros" min="1" max="4" value="1">
                    <!--<select name="adultos" id="adultos" form="adultos">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>-->
                </div>
                <div class="pessoas">
                    <label>monstrinhos (1-7 anos)</label>
                    <input type="number" title='Crianças' name="monstrinhos" required id="monstrinhos" min="0" max="3" value="0">
                    <!--<select name="criancas" id="criancas" form="criancas">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>-->
                </div>
            </div>
            <div class="reserva">
                <button type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>buscar</button>
            </div>
        </form>
    </div>
    </section>
    <section class="quartos">
    <div class="meioquartos">
        <div class="tituloquartos">
            <h2>perfeito para todos os monstros</h2>
            <em>"bla blablah"</em>
            <p>- drácula -</p>
        </div>
        <div class="imgquartos">
            <a href="#">
                <div class="quarto1">
                    <div class="categoryWrapper">
                        <h1>Standart</h1>
                        <button>
                            <span>preço / diaria<p>$180</p></span>
                        </button>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="quarto2">
                    <div class="categoryWrapper">
                        <h1>Duplo</h1>
                        <button>
                            <span>preço / diaria<p>$390</p></span>
                        </button>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="quarto3">
                    <div class="categoryWrapper">
                        <h1>luxo</h1>
                        <button>
                            <span>preço / diaria<p>$420</p></span>
                        </button>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="dracula">
        <img src="{{asset('img/dracula3.png')}}" alt="">
    </div>
    <div class="mavis">
        <img src="{{asset('img/mavismorcego-removebg-preview.png')}}" alt="">
    </div>
    </section>
    <section class="sectionatividades">
    <div class="meioatividades">
        <div class="tituloatividades">
            <h2>conheça algumas de nossas atividades</h2>
        </div>
        <div class="slideshow-container">
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
    </section>
    <section class="sectionsemhumanos">
    <div class="semhumanos">
        <img src="{{asset('img/semhumanos.jpg')}}" alt="">
        <div class="semhumanostexto">
            <h2>Livre de humanos</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eligendi, corporis eveniet assumenda dolores modi ullam nisi fugit in. Sed accusamus ducimus facere, totam repudiandae repellat, fugiat quia dignissimos deleniti, vitae recusandae eveniet aliquam. Perspiciatis eveniet eum rerum ea. Repellat dolorem natus corporis enim sapiente velit itaque accusantium, similique maxime!</p>
        </div>
    </div>
    <div class="draculasemhumanos">
        <img src="{{asset('img/dracula2.png')}}" alt="">
    </div>
</section>
@endsection