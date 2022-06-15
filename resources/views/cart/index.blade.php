@extends('layouts\principal')
@section('contenido')
<div class="row">
    <h1>Run Run de compras</h1>
</div>
@if(!session('cart'))
<div class="row">
<p>No Hay Items en el carrito</p>
</div>
@else()

<div class="row">
    <div class="col s12">
        <table>
            <thead>
                <tr>
                    <th>Productos</th>
                    <th>Cantidad</th>
                    <th>precio</th>
                    
                </tr>
            </thead>
        
<tbody>
@foreach(session('cart') as $index => $prod)
<tr>
    <td>{{  $prod[0]['nombre_prod']  }}</td>
    <td>{{  $prod[0]['Cantidad']  }}</td>
    <td>{{  $prod[0]['precio']  }}</td>

    

</tr>
@endforeach
</tbody>
</table>

    </div>

</div>
<div class="row">
    <form action="{{ route('cart.destroy' , 1) }}" method="POST">
        @method('DELETE')
        @csrf
        <div class="col s8">
          <button class="btn waves-effect waves- pink darken-4" type="submit" name="action">Vaciar Run Run</button>
        </div>
    </form>
</div>
@endif
@endsection