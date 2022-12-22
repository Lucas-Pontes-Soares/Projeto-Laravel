<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }} | @yield('titulo')</title>
    <!-- yield -> seta um valor para a página filha, que herda deste template-->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>

    <div class="logo">
     <img src="{{ asset('img/exterminador.png') }}" class="logo" alt="Digital">
    </div> 

    <div class="container">
        @yield('conteudo') 
    </div>

    <footer>
        <p>Digital - 2022</p>
    </footer>
</body>
</html>