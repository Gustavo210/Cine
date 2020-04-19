<!doctype html>
<html lang="pt-br">

<head>
    <title>UnaCine</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name='theme-color' content='#43444A' />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../model/css/main.css">
    <script src="https://kit.fontawesome.com/16d67f6777.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar row m-0 pr-4 pl-4   navbar-expand-lg navbar-dark navbar ">
        <a class="row-10 navbar-brand m-1 logo" href="index.php"><img src="../model/img/unacinelogo.png" width="200"
                alt="UnaCine"></a>

        <a class=" navbar-toggler" data-toggle="collapse" data-target="#menu-top">
            <span class="navbar-toggler-icon"></span>
        </a>

        <div class="collapse navbar-collapse row" id="menu-top">

            <div class="col-sm-6 row justify-content-end">
                <div class="col-auto col-sm-auto ">
                    <a class="nav_button" href>Em cartaz</a>
                </div>
                <div class="col-auto col-sm-auto ">
                    <a class="nav_button" href>Categorias</a>
                </div>
                <div class="col-auto col-sm-auto  dropdown ">
                    <a class="nav_button" data-toggle="dropdown" href>Guia de Salas</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Salas premium</a>
                        <a class="dropdown-item" href="#">Mapas dos Cinemas</a>
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-5 input-group" style="padding: 0;">
                <input type="text" class="form-control input-search" placeholder="pesquise por filmes, cinemas" value="<?php 
                if(isset($_GET['search'])){
                    echo $_GET['search'];
                }
                ?>">
                <div class="input-group-append" style="z-index: 999;">
                    <button class="btn botao-pesquisar"><i class="fas fa-search"></i></button>
                </div>
                <div class="search-list d-inline">
                    
                </div>
            </div>
        </div>
    <div class="col-1 col-sm-1 btn-group">
        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle border-warning" src="../model/img/talin.jpg" width="35px" alt="Sua Foto"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <form class="px-4 py-3">
                <div class="form-group">
                    <h4>Login</h4>
                    <label for="exampleDropdownFormEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                        placeholder="email@exemplo.com">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword1"
                        placeholder="Senha">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
                        Lembrar
                    </label>
                </div>
                <button type="submit" class="btn btn-block mt-3 btn-primary">Entrar</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Novo aqui? Cadastre-se</a>
            <a class="dropdown-item" href="#">Esqueci minha senha?</a>
        </div>
    </div>
    </div>
    </nav>