<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
    <title>Halo</title>
</head>
<body>
    <nav class="pink darken-4">
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo center">Halo</a>
        <ul class="left hide-on-med-and-down">
            <li><a href="{{ url('productos/create') }}">Productos</a></li>
            <li class="active"><a href="{{ url('productos/#') }}">Catalogo</a></li>
        </ul>
        </div>
    </nav>

    <div class="container">
        @yield('contenido')
    </div>

<script src="{{ asset('materialize/js/materialize.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    let tabs = document.querySelector(".tabs")
    var instance = M.Tabs.init(tabs);
    
    var instances = M.FormSelect.init(elems, []);
    });
</script>
</body>
<footer>

<div class="text-center " style="background-color: black;">
    
    <a class="text-dark" href="https://mdbootstrap.com/"> © 2020 Copyright:    NnGy</a>
  </div>
  <!-- Copyright -->
</footer>

</html>