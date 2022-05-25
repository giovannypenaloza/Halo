@EXTENDS('layouts.principal')

@section('contenido')
<div class="conteiner">
<div class="row">
<h1 class="pink-text text-darken-3"> Catalogo De Productos </h1>
</div>

 

 <div class="row">
 @foreach($productos as $producto)
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image ">
          <img  width="720px" height="280px"src="{{ asset('img/'.$producto->imagen)}}">
        </div>
        <div class="card-content">
            <ul>
            <li>{{ $producto->nombre}}</li>                
                <li>Precio: {{ $producto->precio}}</li>
                <li>Descripcion: {{ $producto->desc}}</li>
                

            
            </ul>
          </div>
          <div class="card-action">
          <a href="#">VER DETALLES</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
 

 
@endsection