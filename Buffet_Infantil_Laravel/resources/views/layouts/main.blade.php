<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>

    <!-- FOnte do Google -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,900;1,700&display=swap" rel="stylesheet">

    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="CSS/estilo.css">

</head>
<body class="home">
    <div id="container">
        <header id="topo"> <!--INICIO TOPO-->
            <a href="login" class="cta">Área logada</a>
            <h1 class="logo">Pé de Moleque</h1>
            <div></div>
            <ul id="navegacao">
                <li class="primeiro">
                    <a id="home" href="welcome">Home</a>
                </li>
                <li>
                    <a id="buffet" href="buffet">Buffet</a>
                </li>
                <li>
                    <a id="cadastro" href="/events/create">Reserva</a>
                </li>
                <li>
                    <a id="contato" href="contato">Contato</a>
                </li>
            </ul>
        </header>
        </div> <!--FIM TOPO-->

        @yield('content')
    </div>


    <footer>
        <div id="container-rodape" style="clear: both;">
            <div id="rodape">
                &copy; Copyrighy 2023-2023 Pé de Moleque
            </div>
        </div>
    </footer>
</body>
</html>