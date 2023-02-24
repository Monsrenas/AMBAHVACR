@if($lng=="es")
    <a href="{{ url('lang', ['en']) }}">
        <img src="assets/imgs/en.png" alt="Idioma" style="width: 18px;">  
    </a>
@else
    <a href="{{ url('lang', ['es']) }}">
        <img src="assets/imgs/es.png" alt="Idioma" width="18px">  
    </a>
@endif