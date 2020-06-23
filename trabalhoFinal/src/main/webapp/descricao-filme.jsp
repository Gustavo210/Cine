<%-- 
    Document   : descricao-filme
    Created on : 22 de jun de 2020, 19:53:33
    Author     : gusta
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<%@include file="cabecalho.jsp" %>

<link rel="stylesheet" href="css/descricao-filme.css">
<div class="tela container-fluid p-5">
    <a href="javascript:history.back()">
        <i class="fas fa-arrow-left"></i>
    </a>
    <div class="row mt-5">


        <div class="col-sm-auto">
            <div class="row p-0 m-0">

                <div class="col-sm-3 mr-3">
                    <img src="img/sonic.jpg" width="200px" alt="">
                </div>
                
                <div class="col-sm-8">
                    <h2>Sonic O FIlme</h2>
                    <span class=" genero-filme"><span>Gênero: Ação</span> </span>
                    <span class="faixa-etaria-filme" style="">Livre</span>
                    <p style="max-width: 500px;">
                        Sonic, o porco-espinho azul mais famoso do mundo, se junta com os seus amigos para derrotar o terrível Doutor Eggman, um cientista louco que planeja dominar o mundo, e o Doutor Robotnik, responsável por aprisionar animais inocentes em robôs.
                    </p>
                </div>


            </div>
        </div>


        <div class="col-sm-auto">
            <div class="row d-flex justify-content-center">
<div class="col-sm-6 mt-3">

    <iframe width="800px" height="400px" src="https://www.youtube.com/embed/zQEjE_M2Esw"
        allowfullscreen></iframe>
    </div>
                </div>
        </div>
        

    </div>

    <div class="row d-flex justify-content-center mb-3 mt-5">
        <div class="col-sm-6">
        <h1 class="mt-3 mb-3"> <i class="fas fa-ticket-alt"></i> Sessões Disponíveis</h1>
        <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-auto p-0 m-1">
                    <a dia="segunda" id_filme="5" class="btn btn-dark" 
                        href="compra-ingresso.jsp">Segunda</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/descricao-filme.js"></script>

<%@include file="rodape.jsp" %>
