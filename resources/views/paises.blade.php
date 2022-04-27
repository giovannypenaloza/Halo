<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
</head>
<body>
    <h1>Paises</h1>



<table class="table table-striped">

<thead>
    <tr>
        <td >        Pais        </th> 
        <th>        Capital     </th>
        <th>        Moneda      </th>
        <th>        Poblacion   </th>
        <th>        Ciudad      </th>
    </tr>

</thead>
<tbody> 
    @foreach($paises as $pais => $infopais)
    
<tr>
    <td class="text-danger" rowspan='{{count($infopais["ciudades"])}}'> >        {{ $pais}}    </td>    
    <td class="text-primary" rowspan='{{count($infopais["ciudades"])}}'> >        {{ $infopais["cap"]}}    </td>
    <td class="text-success" rowspan='{{count($infopais["ciudades"])}}'> >        {{ $infopais["mon"]}}    </td>
    <td class="text-warning" rowspan='{{count($infopais["ciudades"])}}'> >        {{ $infopais["pob"]}}  Millones de Habitantes  </td>
    @foreach ($infopais["ciudades"] as $ciudad)
    <td class="text-info">{{  $ciudad  }}</td> 
</tr>
    @endforeach 
    @endforeach
</tbody>
<tfoot></tfoot>


</table>



</body>
</html>