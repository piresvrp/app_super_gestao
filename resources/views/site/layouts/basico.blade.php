<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Super gestão - @yield("titulo")</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/estilo_basico.css')}}">
    </head>

    <body>
        <div class="topo">
            <div class="logo">
                <img src="{{asset('img/logo.png')}}">
            </div>
            @include('site.layouts._partials.topo')
        </div>
        @yield('conteudo')
    </body>
</html>
