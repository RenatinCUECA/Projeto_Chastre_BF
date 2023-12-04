<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pé de Moleque</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    body {
      margin: 0;
      padding: 0;
    }

    header {
      height: 200px;
      background-image: url("../Imagens/logo.jpeg") no-repeat center top;
      padding-top: 30px;
    }

    .navbar {
      background-color: rgb(39, 0, 114);
    }

    .navbar-brand {
      font-family: Georgia, serif;
      text-indent: -9000px;
    }

    .navbar-nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar-nav li {
      margin-right: 3em;
      text-transform: uppercase;
    }

    .navbar-nav a {
      color: rgb(39, 0, 114);
      font-size: 1.2em;
      padding: 0.5em 2em;
      line-height: 2.1em;
      text-decoration: none;
    }

    .navbar-nav a:hover {
      color: rgb(132, 64, 196);
      background-color: #ffa357;
    }

    .cta {
      background-color: rgb(132, 64, 196);
      color: rgb(39, 0, 114);
      padding: 0.5em 1em;
      text-decoration: none;
      font-size: 1.2em;
      font-style: oblique;
      border-radius: 1px;
      margin-right: 20px;
    }

    .nav-link.active {
      color: rgb(39, 0, 114);
      background-color: #ffb171;
    }
  </style>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Pé de Moleque</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Buffet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Reserva</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
            </li>
        </ul>
        <a class="cta" href="#">Área logada</a>
    </header>
</body>
</html>
