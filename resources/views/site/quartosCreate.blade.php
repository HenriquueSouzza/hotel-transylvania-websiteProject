</section>
<section class="sectionQuartosCreate">
    <div><h2>Criação de um novo quarto</h2></div>
    <div>
        <form action="{{route('site.Create')}}" method="POST" enctype="multipart/form-data">
           @csrf
            <div>
                <input type="file" name="image"><br><br>
                <input type="text" name="title" placeholder="nome">
                <input type="text" name="description" placeholder="descriçao">
                <button type="submit">enviar</button>
            </div>
       </form>
    </div>
    @if(session('msg'))
        <p>{{session('msg')}}</p>
    @endif
    <a href="{{route('site.roons')}}">quartos</a>
</section>