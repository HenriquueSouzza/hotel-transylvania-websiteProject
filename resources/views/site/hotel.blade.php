@extends('site.master.layout')
@section('content')
<section class="sectionfotosemform">
    <div class="meiosectionfotosemform">
        <h1>ferias arrepiantes só no hotel transylvania</h1>
        <img src="{{asset('img/linha-removebg-preview.png')}}" alt="">
    </div>
</section>
<section class="sectionHotel">
    <div class="meioHotel">
        <h2>o hotel</h2>
        <p>O Hotel Transilvânia é um resort cinco estrelas que serve de refúgio para que os monstros possam descansar do árduo trabalho de perseguir e assustar os humanos, lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia unde modi temporibus sunt similique eligendi voluptate molestiae necessitatibus ipsa voluptatum. Suscipit fugit ullam quam magni, ab ut vel, sapiente hic molestiae saepe modi tenetur inventore aliquid voluptates laborum perferendis mollitia corrupti placeat. Consequuntur qui soluta quo, vero quibusdam officia tempora voluptatibus maiores voluptates aliquid? Temporibus sed voluptatum iure ipsum provident quos reiciendis perferendis inventore. Adipisci, sapiente similique? Nemo magni quae laborum atque voluptates sint maiores, consequatur, molestias temporibus distinctio explicabo aliquid repellat. Ullam, reprehenderit repellendus aut ducimus maiores accusamus non vero alias quas illum voluptatibus neque id eius reiciendis nemo nobis a nihil quibusdam, blanditiis, consequuntur quos cumque. Voluptatem et saepe, animi necessitatibus reprehenderit ipsa. Quae modi at minus possimus.</p>
    </div>
    <div id="slideshow">
        <ul>
            <li>
                <img src="{{asset('img/piscinafundo.jpg')}}" title="Lorem ipsum dolor sit amet" />
            </li>
            <li>
                <img src="{{asset('img/piscinafundo.jpg')}}" title="Lorem ipsum dolor sit amet" />
            </li>
            <li>           
                <img src="{{asset('img/piscinafundo.jpg')}}" title="Lorem ipsum dolor sit amet" />
            </li>	                         
        </ul>
    </div>
    <script>
        $("#slideshow").craftyslide();
    </script> 
</section>
@endsection