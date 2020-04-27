<?php 
session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>UnaCine</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name='theme-color' content='#43444A' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../model/css/main.css">
    <script src="https://kit.fontawesome.com/16d67f6777.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar row m-0 pr-4 pl-4   navbar-expand-lg navbar-dark navbar ">
        <a class="row-10 navbar-brand m-1 logo" href="index.php"><img src="../model/img/unacinelogo.svg" width="200"
                alt="UnaCine"></a>

        <a class=" navbar-toggler" data-toggle="collapse" data-target="#menu-top">
            <span class="navbar-toggler-icon"></span>
        </a>

        <div class="collapse navbar-collapse row" id="menu-top">

            <div class="col-sm-6 row justify-content-end">
                <div class="col-auto col-sm-auto ">
                    <a class="nav_button" href="index.php"><i class="fas fa-home"></i> Home</a>
                </div>
                <div class="col-auto col-sm-auto mr-3 ">
                    <a class="nav_button" href="sobre-nos.php"><i class="fas fa-users"></i> Sobre Nós</a>
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
        <button botao type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-user-circle"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right" id="menuLogin">
            <?php if(isset($_SESSION["isLogged"])): ?>
            <div id="afterLoginMenu">
                <a class="dropdown-item" href="#"><h6 class="welcomeMessage">Olá <?=$_SESSION["userName"]?>, Bem vindo!</h6></a>
                <a class="dropdown-item" href="#">Ingressos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item clickSair" href="#">Sair</a>
            </div>
            <form class="px-4 py-3" id="loginForm" style="width: 30vh;display: none;">
                <div class="form-group">
                    <h4>Login</h4>
                    <label for="exampleDropdownFormEmail1">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="email@exemplo.com">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Senha:</label>
                    <input type="password" class="form-control" name="senha" placeholder="Sua senha">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
                        Lembrar
                    </label>
                </div>
                <button type="submit" class="btn btn-block mt-3 btn-primary">Entrar</button>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item cadastrarButton" href="#">Novo aqui? Cadastre-se</a>
                <a class="dropdown-item" href="#">Esqueci minha senha?</a>
            </form>
            <form class="px-4 py-3" id="signupForm" style="width: 30vh;display: none;">
                <div class="form-group">
                    <h4>Cadastro</h4>
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Seu nome">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="email@exemplo.com">
                </div>
                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" class="form-control" name="senha" placeholder="Sua senha">
                </div>
                <button type="submit" class="btn btn-block mt-3 btn-primary">Cadastrar</button>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item loginButton" href="#">Já possui cadastro? Fazer login</a>
            </form>
            <?php else:?>
            <form class="px-4 py-3" id="loginForm" style="width: 30vh;">
                <div class="form-group">
                    <h4>Login</h4>
                    <label for="exampleDropdownFormEmail1">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="email@exemplo.com">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Senha:</label>
                    <input type="password" class="form-control" name="senha" placeholder="Sua senha">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
                        Lembrar
                    </label>
                </div>
                <button type="submit" class="btn btn-block mt-3 btn-primary">Entrar</button>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item cadastrarButton" href="#">Novo aqui? Cadastre-se</a>
                <a class="dropdown-item" href="#">Esqueci minha senha?</a>
            </form>
            <form class="px-4 py-3" id="signupForm" style="width: 30vh;display: none;">
                <div class="form-group">
                    <h4>Cadastro</h4>
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Seu nome">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="email@exemplo.com">
                </div>
                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" class="form-control" name="senha" placeholder="Sua senha">
                </div>
                <button type="submit" class="btn btn-block mt-3 btn-primary">Cadastrar</button>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item loginButton" href="#">Já possui cadastro? Fazer login</a>
            </form>
            <div id="afterLoginMenu" style="display: none;width: auto;">
                <h6 class="welcomeMessage text-center">Olá , Bem vindo!</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Ingressos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item clickSair" href="#">Sair</a>
            </div>
            <?php endif;?>
        </div>
    </div>
    </div>
    </nav>