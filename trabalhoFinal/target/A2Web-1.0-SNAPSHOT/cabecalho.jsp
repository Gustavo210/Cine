<%-- 
    Document   : cabecalho
    Created on : 22 de jun de 2020, 01:45:17
    Author     : gusta
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>UnaCine</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name='theme-color' content='#43444A'/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

    <link rel="sortcut icon" href="img/logonavegador.png" type="image/png" />
</head>

<body>

    <nav class="navbar row m-0 pr-4 pl-4 sticky-top   navbar-expand-lg navbar-dark navbar ">
        <a class="row-10 navbar-brand m-1 logo" href="index.jsp">
            <img src="img/unacinelogo.svg" width="200" alt="UnaCine"></a>

        <a class=" navbar-toggler" data-toggle="collapse" data-target="#menu-top">
            <span class="navbar-toggler-icon"></span>
        </a>

        <div class="collapse navbar-collapse row" id="menu-top">

            <div class="col-sm-6 row justify-content-end">
                <div class="col-auto col-sm-auto ">
                    <a class="nav_button" href="index.jsp"><i class="fas fa-home"></i> Home</a>
                </div>
                <div class="col-auto col-sm-auto ">
                    <a class="nav_button" href="sobrenos.jsp"><i class="fas fa-users"></i> Sobre Nós</a>
                </div>
                <div class="col-auto col-sm-auto mr-3 ">
                    <a class="nav_button" href="resultado-pesquisa.jsp"><i class="fas fa-film"></i> Todos os Filmes</a>
                </div>

            </div>
            <div class="col-10 col-sm-5 input-group" style="padding: 0;">
                <input type="text" class="form-control input-search" placeholder="pesquise por filmes, cinemas" value="">
                <div class="input-group-append" style="z-index: 999;">
                    <button class="btn botao-pesquisar"><i class="fas fa-search"></i></button>
                </div>
                <div class="search-list d-inline">
                    
                </div>
            </div>
        </div>
    <div class="col-1 col-sm-1 btn-group">
        <button botao type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class='fas fa-user'></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right" id="menuLogin">
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

                <button type="submit" class="btn btn-block mt-3 btn-primary">Entrar</button>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item cadastrarButton" href="#">Novo aqui? Cadastre-se</a>
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
                <a class="dropdown-item loginButton" href=>Já possui cadastro? Fazer login</a>
            </form>
            <div id="afterLoginMenu" style="display: none;width: auto;">
                <h6 class="welcomeMessage text-center">Olá , Bem vindo!</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="meusIngressos.jsp">Ingressos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item clickSair" href>Sair</a>
            </div>
        </div>
    </div>
    </div>
    </nav>