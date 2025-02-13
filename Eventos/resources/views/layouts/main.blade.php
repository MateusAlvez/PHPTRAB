<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("title")</title>

     <!-- Fonte do google -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
     
    <!--CSS Boostrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- css da aplicação --> 
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

    </head>
    <body">
        <header> 
          <nav class= "navbar navbar-expand-lg navbar-light"> 
            <div class="collapse navbar-collapse" id="navbar" >
             <a href="/" class = "navbar-brand">
             <img src="/img/icon1.png" alt="XINGLING Eventos">
             </a>
                <ul class = "navbar-nav">
                    <li class= "nav-item">
                        <a href="/" class="nav-link">Eventos </a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar eventos  </a>
                    </li>
                    <li class= "nav-item">
                        <a href="/" class="nav-link">Entrar </a>
                    </li></li>
                    <li class= "nav-item">
                        <a href="/" class="nav-link">Cadastrar  </a>
                    </li>
                    <li class= "nav-item">
                        <a href="/events/contact" class="nav-link">Contatos  </a>
                    </li>
                    </ul>
                    </div>     
          </nav>

        </header>

      @yield('content')
    <footer>
        <p>XINGLING Eventos &copy; 2024</p>
    </footer>
    </body>
</html>
