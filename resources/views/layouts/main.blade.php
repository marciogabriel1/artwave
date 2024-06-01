<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Fonte -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <!-- Estilos -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <div class="primario">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbar">
                        <a href="/" class="navbar-brand">
                        <img src="/img/" alt="ArtWave">
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Serviços</a>
                            </li>
                            <li class="nav-item">
                            <a href="/" class="nav-link">Designs</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>
        <div class="section secundario">
            <div class="cabecalho1">
                <h1>Inspiração em cada pixel</h1>
            </div>
            <div class="paragrafo1">
                <p>criando logotipos, capas, anúncios, cartões de visita, panfletos e muitos mais com ArtWave Design. Com uma equipe repleta de profissionais qualificados para a criação do melhor desingn para você.</p>
            </div>
        </div>
        <div class="section terciario">
            <div class="cabecalho2">
                <h1>Comece criando com ArtWave Desing</h1>
            </div>
            <div class="paragrafo2">
                <p>Comece sua empresa com estilo, com a criação de logotiopos, sites, design de embalagens e muito mais com nossa comunidade de designs pronta para ajudar em tudo o que é preciso para a criação da sua marca.</p> 
            </div>
        </div>
        <div class="section quartenario">
            <div class="cabecalho3">
                <h1>Trabalhando com profissionais no qual se pode confiar</h1>
            </div>
            <div class="paragrafo3">
                <p>Conte com uma equipe de especialistas em designs que você pode confiar e dê uma olhada em seus portifolios repletos de projetos de alta qualidade.</p>
            </div>
        </div>
        <div class="section quinario">

        </div>
        <div class="senario">

        </div>
        <div class="setenario">

        </div>
        @yield('content')
    </body>
</html>