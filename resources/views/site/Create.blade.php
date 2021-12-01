</section>
<section class="sectionQuartosCreate">
    <div><h2>Criação de um novo quarto</h2></div>
    <div>
        <form action="{{route('site.roomsCreate')}}" method="POST" enctype="multipart/form-data">
           @csrf
            <div>
                <input type="file" name="image"><br><br>
                <input type="text" name="title" placeholder="nome">
                <input type="text" name="description" placeholder="descriçao">
                <button type="submit">enviar</button>
            </div>
       </form>
    </div>
    @if(session('msgRoom'))
        <p>{{session('msgRoom')}}</p>
    @endif
    <a href="{{route('site.roons')}}">quartos</a>
    <div><h2>Criação de uma nova foto</h2></div>
    <div>
        <form action="{{route('site.photosCreate')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="file" name="image"><br><br>
                <input type="text" name="title" placeholder="nome">
                <button type="submit">enviar</button>
            </div>
        </form>
    </div>
    @if(session('msgPhoto'))
        <p>{{session('msgPhoto')}}</p>
    @endif
    <a href="{{route('site.imgs')}}">fotos</a>
</section>