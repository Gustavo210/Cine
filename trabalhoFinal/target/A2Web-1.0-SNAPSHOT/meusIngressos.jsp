<%-- 
    Document   : meusIngressos
    Created on : 22 de jun de 2020, 20:48:04
    Author     : gusta
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<%@include file="cabecalho.jsp" %>

<div style="height: 100vh;" class="container-fluid">
    <h1 class="mt-4 mb-2">Meus Ingressos</h1>
    <div class="content">
        <div class="row mt-3 mb-2">
            <div class="col-sm"><span>#Lista de compras</span></div>
            <div class="col-sm-4">
        <input type="text" class="form-control pesquisa" placeholder="Filme, Assentos, datas, etc...">
        </div>
        </div>
        <hr>
        <div class="row p-0 m-0">
            <div class="col-sm-1">ID</div>
            <div class="col-sm">Filme</div>
            <div class="col-sm">Assentos</div>
            <div class="col-sm-1 text-center">Compra</div>
            <div class="col-sm-1 text-center">Ingressos</div>
            <div class="col-sm-1 text-center">Combos</div>
            <div class="col-sm-1 text-center">Total</div>
            <div class="col-sm-1 text-center">Pagamento</div>
            <div class="col-sm-1 p-0 m-0 text-center">Ticket</div>
            </div>
        <div class="compra-body mt-3">
            
            
            
                <div class="card p-3">

                    <div class="row ">
                        <div class="col-sm-1"><span>#2132</span></div>
                        <div class="col-sm"><span>Sonic O filme | 20hs</span></div>
                        <div class="col-sm"><span>122,753,131,44,42</span></div>
                        <div class="col-sm-auto"><span>03/05/2018</span></div>
                        <div class="col-sm-1 text-center"><span>R$ 39,00 </span></div>
                        <div class="col-sm-1 text-center"><span>R$ 41,00</span></div>
                        <div class="col-sm-1 text-center"><span>R$ 80,00</span></div>
                        <div class="col-sm-1 text-center"><i class='fas fa-money-bill-wave'></i></div>
                        <div class="col-sm-1 m-0 p-0 text-center">
                            <button class="btn btn-light ticket">Baixar</button>
                            <input type="hidden"class="nome" value="1">
                            <input type="hidden"class="video" value="https://www.youtube.com/embed/zQEjE_M2Esw">
                    </div>
                    </div>
                </div>

            
            
            
        </div>

    </div>
</div>
<script>
$(document).ready(function(){
  $(".pesquisa").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".card").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

$('.ticket').on('click',function(){
    var nome = $(this).parent().find('.nome').val()
    var video = $(this).parent().find('.video').val()
    $.confirm({
                title: `${nome}`,
                content: `<div class="container-fluid">
                    <div class='row d-flex justify-content-center'>
                        <div class="col-6">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://www.youtube.com/embed/zQEjE_M2Esw">
                        </div>
                    </div>
                </div>
                `,
                buttons: {
                    Fechar: function () {
                        //close
                    },
                }
            });

})

</script>

<%@include file="rodape.jsp" %>
