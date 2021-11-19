<!--Esse site foi desenvolvido para fins academicos-->
<!--Desenvolvido por Henrique Souza-->
<!--Contato: email: henrique.liga@gmail.com; instagram: @henriquuesouzza-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url(mix('site/css/styles.css')) }}">
    <title>Hotel Transylvania</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="meioheader">
                <nav id="nav">
                    <button id="btnmenu">menu</button>
                    <ul>
                        <li><a href="{{ route('site.home') }}">home</a></li>
                        <li><a href="{{ route('site.hotel') }}">hotel</a></li>
                        <li><a href="{{ route('site.bedrooms') }}">quartos</a></li>
                        <li><a href="{{ route('site.imgs') }}">fotos</a></li>
                        <li><a href="{{ route('site.activities') }}">atividades</a></li>
                        <li><a href="{{ route('site.booking') }}">reserva</a></li>
                        <li><a href="{{ route('site.contact') }}">contato</a></li>
                    </ul>
                </nav>
                <div class="logo">
                    <a href="/"><img src="{{asset('img/logo.png')}}" alt="Logo" title="Produzida por: 'deviantart.com/ariellelyon'"></a>
                </div>
            </div>
        </header>
        @yield('content')
        <footer>
            <div class="bloco1">
                <div class="bandeiraseredes">
                    <div class="bandeiras">
                        <h2>bandeiras que aceitamos</h2>
                        <ul>
                            <li><img src="{{asset('img/american-express.png')}}" alt=""></li>
                            <li><img src="{{asset('img/diners-club.png')}} " alt=""></li>
                            <li><img src="{{asset('img/elo.png')}}"></li>
                            <li><img src="{{asset('img/hipercard.png')}}" alt=""></li>
                            <li><img src="{{asset('img/mastercard.png')}}" alt=""></li>
                            <li><img src="{{asset('img/visa.png')}}" alt=""></li>
                        </ul>
                    </div>
                    <div class="redes">
                        <h2>siga-nos</h2>
                        <div>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-instagram-square"></i></a>
                        </div>
                    </div>
                </div>
                <span class="divisoria"></span>
                <div class="contato">
                    <h2>contato</h2>
                    <div class="infocontato">
                        <i class="fas fa-phone-square-alt"></i>
                        <h3>telefone:</h3>
                        <p>+40 0-92-123-456 </p>
                    </div>
                    <div class="infocontato">
                        <i class="fas fa-envelope-square"></i>
                        <h3>email:</h3>
                        <p>contato@hoteltransylvania.com</p>
                    </div>
                    <div class="infocontato">
                        <i class="fas fa-drafting-compass"></i>
                        <h3>local:</h3>
                        <p>Transilvânia, Romênia</p>
                    </div>
                    <div class="infocontato">
                        <i class="fas fa-concierge-bell"></i>
                        <h3>hotel transylvania international Ltda</h3>
                    </div>
                </div>
            </div>
            <div class="bloco2">
                <a href="https://www.sonypictures.com/movies/hoteltransylvaniatransformania" target="_blank"><h2>© 2021 Sony Pictures Digital Productions Inc. All rights reserved</h2></a>
            </div>
        </footer>
    </div>
    <button class="scrollToTopBtn" title="Ir para o Topo"><i class="fas fa-arrow-up"></i></button>
    <script src="{{ url(mix('site/js/script.js')) }}"></script>
    <script src="https://kit.fontawesome.com/1ba664ef57.js" crossorigin="anonymous"></script>
</body>
</html>


