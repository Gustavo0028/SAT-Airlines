<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="CSS/estilo.css" rel="stylesheet">
    <link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.min.css">
</head>

<body>
    <div class="barra">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand" href="index.php">SAT Airlines</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active text-white">
                        <a class="nav-link " href="index.php">Home <span class="sr-only">(atual)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="true">
                            Login/Cadastro
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="login.php">Login</a>
                            <a class="dropdown-item" href="cadastro.php">Cadastro</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="suporte.php">Suporte</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.trivago.com.br/pt-BR">Hotéis</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-expanded="false">
                        Conta
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Alterar Email e/ou Senha</a>
                        <a class="dropdown-item" href="favoritos.php">Meus Favoritos</a>
                        <a class="dropdown-item" href="#">Sair </a>
                    </div>
                </div>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Onde vamos?" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Procurar</button>
                </form>
            </div>
        </nav>
    </div>
