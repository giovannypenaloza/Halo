@extends('layauts.principal')

@section('contenido')
<div class="row">
    <h1>Run Run de compras</h1>
</div>
<div class="row">
    <div class="col s12">
        <table>
            <thead>
                <tr>
                    <th>Productos</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
        
<tbody>
@foreach(session('cart') as $index => $prod)
<tr>
    <td>{{  var_dump($prod)  }}</td>

</tr>
@endforeach
</tbody>
</table>

    </div>

</div>
<div class="row">
    <form action="route('cart.destroy', 1)" method="POST">
        @method('DELETE')
@csfr
<BUTTOn type="submit">
    Vaciar Run Run
</BUTTOn>
    </form>
</div>


@endsection