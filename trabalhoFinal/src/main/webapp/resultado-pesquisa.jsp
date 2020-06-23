<%-- 
    Document   : resultado-pesquisa
    Created on : 21 de jun de 2020, 23:45:24
    Author     : gusta
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<%@include file="cabecalho.jsp" %>

<link rel="stylesheet" href="css/pesquisa.css">
<div style="min-height:100vh" class="p-5">
<a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a>
<br>
<br>
<div class="row">
    <div class="col-sm">
        <p class="resultado-pesquisa">
            Sua pesquisa <span class="span-destaque"></span><hr>
        </p>
    </div>
    <div class="col-sm-3">
        <label for="pesquisa">Pesquisar</label>
        <input type="text" class="form-control pesquisa" placeholder="Gênero, Ator, Ano, Faixa etária">
    </div>
</div>
<div class="space"></div>
 
    <div class=" box-filme">
        <div class="row justify-content-between">
        <div class="col-sm-4 titulo-filme">Sonic</div>
        <div class="col-sm-2"> 
            <a class="btn btn-block btn-primary" href="descricao-filme.jsp">Detalhes</a></div>
        </div>
        <div class="row">
            <div class="col-sm-2 "><img src="img/sonic.jpg" width="200px" alt=""></div>
            <div class="col-sm ml-4">
                <div class="row">
                    <div class=" genero-filme"><span>Gênero: Ação</span> </div>
                    <span class="faixa-etaria-filme" style="background-color: green;">Livre</span>
                    </div>
                    <div class="col"><span class="em-exibicao">Em Exibição: Serracine</span></div>
                    <p class=" col-sm-7 desc-filme">
                    Sonic, o porco-espinho azul mais famoso do mundo, se junta com os seus amigos para derrotar o terrível 
                    Doutor Eggman, um cientista louco que planeja dominar o mundo, e o Doutor Robotnik, responsável por aprisionar animais inocentes em robôs.
                    </p>

            </div>
        </div>
    </div>
    <div class=" box-filme">
        <div class="row justify-content-between">
        <div class="col-sm-4 titulo-filme">Por Lugares Incríveis</div>
        <div class="col-sm-2"> 
            <a class="btn btn-block btn-primary" href="descricao-filme.jsp">Detalhes</a></div>
        </div>
        <div class="row">
            <div class="col-sm-2 "><img src="img/brightplaces.jpg" width="200px" alt=""></div>
            <div class="col-sm ml-4">
                <div class="row">
                    <div class=" genero-filme"><span>Gênero: Ação</span> </div>
                    <span class="faixa-etaria-filme" style="background-color: green;">Livre</span>
                    </div>
                    <div class="col"><span class="em-exibicao">Em Exibição: Serracine</span></div>
                    <p class=" col-sm-7 desc-filme">
O enredo de Por Lugares Incríveis acompanha Violet Markey (Elle Fanning) e Theodore Finch (Justice Smith), que têm suas vidas transformadas para sempre quando se conhecem.
Juntos, eles se apoiam para curar os estigmas emocionais e físicos que adquiriram no passado.
                    </p>

            </div>
        </div>
    </div>
    <div class=" box-filme">
        <div class="row justify-content-between">
        <div class="col-sm-4 titulo-filme">STAR WARS: A ASCENSÃO SKYWALKER</div>
        <div class="col-sm-2"> 
            <a class="btn btn-block btn-primary" href="descricao-filme.jsp">Detalhes</a></div>
        </div>
        <div class="row">
            <div class="col-sm-2 "><img src="img/sw9.jpg" width="200px" alt=""></div>
            <div class="col-sm ml-4">
                <div class="row">
                    <div class=" genero-filme"><span>Gênero: Ação</span> </div>
                    <span class="faixa-etaria-filme" style="background-color: green;">Livre</span>
                    </div>
                    <div class="col"><span class="em-exibicao">Em Exibição: Serracine</span></div>
                    <p class=" col-sm-7 desc-filme">
Com o retorno do Imperador Palpatine, todos voltam a temer seu poder e, com isso, a Resistência toma a frente da batalha que ditará os rumos da galáxia. Treinando para ser uma completa Jedi, Rey (Daisy Ridley) ainda se encontra em conflito com seu passado e futuro, mas teme pelas respostas que pode conseguir a partir de sua complexa
ligação com Kylo Ren (Adam Driver), que também se encontra em conflito pela Força.
                    </p>

            </div>
        </div>
    </div>
    <div class=" box-filme">
        <div class="row justify-content-between">
        <div class="col-sm-4 titulo-filme">JOHN WICK 3 - PARABELLUM</div>
        <div class="col-sm-2"> 
            <a class="btn btn-block btn-primary" href="descricao-filme.jsp">Detalhes</a></div>
        </div>
        <div class="row">
            <div class="col-sm-2 "><img src="img/john3.jpg" width="200px" alt=""></div>
            <div class="col-sm ml-4">
                <div class="row">
                    <div class=" genero-filme"><span>Gênero: Ação</span> </div>
                    <span class="faixa-etaria-filme" style="background-color: green;">Livre</span>
                    </div>
                    <div class="col"><span class="em-exibicao">Em Exibição: Serracine</span></div>
                    <p class=" col-sm-7 desc-filme">
Após assassinar o chefe da máfia Santino D'Antonio (Riccardo Scamarcio) no Hotel Continental, John Wick (Keanu Reeves) passa a ser perseguido pelos membros da Alta Cúpula sob a recompensa de U$14 milhões. Agora,
ele precisa unir forças com antigos parceiros que o ajudaram no passado enquanto luta por sua sobrevivência.
                    </p>

            </div>
        </div>
    </div>
    <div class=" box-filme">
        <div class="row justify-content-between">
        <div class="col-sm-4 titulo-filme">Toy Story 4</div>
        <div class="col-sm-2"> 
            <a class="btn btn-block btn-primary" href="descricao-filme.jsp">Detalhes</a></div>
        </div>
        <div class="row">
            <div class="col-sm-2 "><img src="img/toy4.jpg" width="200px" alt=""></div>
            <div class="col-sm ml-4">
                <div class="row">
                    <div class=" genero-filme"><span>Gênero: Ação</span> </div>
                    <span class="faixa-etaria-filme" style="background-color: green;">Livre</span>
                    </div>
                    <div class="col"><span class="em-exibicao">Em Exibição: Serracine</span></div>
                    <p class=" col-sm-7 desc-filme">
                    Agora morando na casa da pequena Bonnie, Woody apresenta aos amigos o novo brinquedo construído por ela: Forky, baseado em um garfo de verdade. O novo posto de brinquedo não o agrada nem um pouco, o que faz com que Forky fuja de casa. Decidido a trazer de volta o atual brinquedo favorito de Bonnie,
                    Woody parte em seu encalço e, no caminho, reencontra Bo Peep, que agora vive em um parque de diversões.</p>

            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
  $(".pesquisa").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".box-filme").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<%@include file="rodape.jsp" %>