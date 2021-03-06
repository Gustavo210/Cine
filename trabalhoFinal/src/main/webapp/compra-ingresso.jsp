<%-- 
    Document   : compra-ingresso
    Created on : 22 de jun de 2020, 19:52:25
    Author     : gusta
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<%@include file="cabecalho.jsp" %>

<link rel="stylesheet" href="css/compraIngresso.css">

<div class="container-fluid p-0 m-0 row">
    <!-- div de informações do filme -->
    <div class="col-sm-3 info-film">

    <!-- conteudo -->
        <div class="row">
            <div class="col-sm-6">
                <img src="img/sonic.jpg" class="poster" alt="">
            </div>

            <div class="col-sm-6 info">
                <span>Sonic</span>
                <p>
                    Serracine<br>
                    segunda 20hs <br>
                    Dublado 3D
                </p>
            </div>
        </div>
    <!-- carrinho, ele sera atualizado dinamicamente -->
        <div class="carrinho">
            <div class="titulo">Carrinho</div>
            <div class="info">
                <div class="Meus-ingressos">
                    Meus ingressos R$: <div class="valor-total-ingressos">0</div>,00
                </div>
                <div class="Meus-combos">
                    Meus combos R$: <div class="valor-total-combos">0</div>,00
                </div>
            </div>
            <div class="total">Total: R$ <div class="total-compra">0</div>,00</div>
        </div>

        <div class="row div-button ">
            <div class="col-sm-6 ">
                <a class="btn button" href="javascript:history.back()">Voltar</a>
            </div>
            <div class="col-sm-6 div-pagamentos">
            <button class="btn button-finalizar" id="finalizarCompra">Finalizar</button>
            </div>
        </div>

    </div>



    <div class="col-sm-9 p-0 m-0">

        <div class="row p-0 m-0 config">
            <div class="col-sm acento">Acentos</div>
            <div class="col-sm combo">Combos</div>
            <div class="col-sm pagamento">Pagamento </div>
        </div>

        <div class="row div-acentos p-0 m-0">
            <div class="col-sm-auto p-3">
            <h2 class="alugue-texto">Alugue nossos acentos</h2>
            <%
            
                int value=1;for (int i=0; i < 10; i++) {
            %>
        
                    <div class="row pl-4 pr-4 ">

                        <div  class="col-sm">
                    
                            <div class="row">
                                <% int cont = 1;
                                for (int w=1; w < 10; w++) { 
                                    if(cont<12){ %>
                                    
                                    <div class="cadeira"><%=value %></div>

                                    <% cont++; value++;}}%>

                            </div>
                        </div>

                            <div class="box"></div>

                            <div  class="col-sm">
                        
                                <div class="row">

                                <% for (int q=1; q < 10; q++) { 
                                    if(cont<=22){%>

                                    <div class=" cadeira"><%=value%></div>

                                <%cont++;value++;}}%>

                                </div>
                        
                            </div>

                    </div>
                <% }%>
        
        
            </div>

            <div class="col-sm ">
                <div class="titulo">Ingressos</div>
                <div class="tipos-ingresso">
                    <div class="titulo-ingressos">
                        <div class="row">
                            <div class="col-sm-6 title-ingress">Entrada Inteira</div>
                            <div class="col-sm-6 title-ingress">Disponiveis: <span class="total-inteira">100</span></div>
                        </div>
                    </div>
                    <div class="seleciona-ingresso">
                        <div class="row p-0 m-0">
                            <div class="col-sm-6 title-ingress">valor: R$15,00
                            <input type="hidden" class="valor-inteira" value="15"></div>
                            <div class="col-sm-2 botoes-ingresso menos-inteira">-</div>
                            <div class="col-sm-2 text-center quant-inteira">0</div>
                            <input type="hidden" class="valor-total-inteira">
                            <input type="hidden"class="conta-cadeira-inteira">
                            <div class="col-sm-2 botoes-ingresso mais-inteira">+</div>
                        </div>
                    </div>
                    
                    <div class="titulo-ingressos">
                        <div class="row">
                            <div class="col-sm-6 title-ingress">Meia Entrada</div>
                            <div class="col-sm-6 title-ingress">Disponiveis: <span class="total-meia">100</span></div>
                        </div>
                    </div>
                    <div class="seleciona-ingresso">
                        <div class="row p-0 m-0">
                            <div class="col-sm-6 title-ingress">valor: R$10,00
                                <input type="hidden" class="valor-meia" value="10"></div>
                                <div class="col-sm-2 botoes-ingresso menos-meia">-</div>
                                <div class="col-sm-2 text-center quant-meia">0</div>
                                <input type="hidden" class="valor-total-inteira">
                                <input type="hidden"class="conta-cadeira-meia">
                                <div class="col-sm-2 botoes-ingresso mais-meia">+</div>
                            </div>
                    </div>
                    <div class="total-ingresso">Total: <span class="meu-total-ingresso">0</span></div>
                </div>
                <div class="titulo">Meus acentos</div>
                <div class="lugares"></div>
                <div class="row ">
                    <div class="col-sm-12 quadro">
                        <button class="btn btn-block combo-bt button"> Proximo</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="div-combos row p-0 m-0">
            <div class="titulo">Escolha nossos combos</div>
        <div class="seleciona-combo">
            <div class="row">
                <div class="item-combo col-4">
                    <div class="combo">
                        <img src="img/Combo/balde.jpg" alt="balde">
                        <input class="quant" type="hidden">
                        <input class="preco" value="25" type="hidden">
                    </div>
                    <button class="float-x">X</button>
                </div>
                <div class="item-combo col-4">
                    <div class="combo">
                        <img src="img/Combo/duplo.jpg" alt="duplo">
                        <input class="quant" type="hidden">
                        <input class="preco" value="23" type="hidden">
                    </div>
                    <button class="float-x">X</button>
                </div>
                <div class="item-combo col-4">
                    <div class="combo">
                        <img src="img/Combo/grande.jpg" alt="grande">
                        <input class="quant" type="hidden">
                        <input  class="quant" type="hidden">
                        <input class="preco" value="19" type="hidden">
                    </div>
                    <button class="float-x">X</button>
                </div>
            </div>
            <div class="row">
                <div class="item-combo col-4">
                    <div class="combo">
                        <img src="img/Combo/kids.jpg" alt="kids">
                        <input class="quant" type="hidden">
                        <input class="preco" value="10" type="hidden">
                    </div>
                    <button class="float-x">X</button>
                </div>
                <div class="item-combo col-4">
                    <div class="combo">
                        <img src="img/Combo/medio.jpg" alt="medio">
                        <input class="quant" type="hidden">
                        <input class="preco" value="15" type="hidden">
                    </div>
                    <button class="float-x">X</button>
                </div>
                <div class="item-combo col-4">
                    <div class="combo">
                        <img src="img/Combo/super.jpg" alt="super">
                        <input class="quant" type="hidden">
                        <input class="preco" value="21" type="hidden">
                    </div>
                    <button class="float-x">X</button>
                </div>
            </div>
            </div>
            <div class="row botoes ">
                <div class="col-sm-1"></div>
                <div class="col-sm-2 text-center"><a class="btn btn-block p-2 text-white btn-danger acento-bt" >Voltar</a></div>
                <div class="col-sm-5"></div>
                <div class="col-sm-2"><a class="btn btn-block p-2  text-white btn-primary pagamento-bt" >Avançar</a></div>
                <div class="col-sm-2"></a></div>
            </div>
        </div>
        <div class="div-pagamentos">
            <input id="idCliente" type="hidden" value="">
            <div class="metodos-pagamento">Opções de pagamento <div class="pt-3"></div></div>
            <div class="corpo-pagamento row">
                <div class="col-sm-6">
                    <div class="cartao-info">Dados Pessoais
                    <input type="checkbox" id="pagamento-cartao">
                    </div>
                    <div>
                        <input class="input-texto" placeholder="Titular" value=""  type="text" id="nome">
                    </div>
                    <div>
                        <input class="input-texto" placeholder="telefone" value="" type="text" id="telefone">
                    </div>
                    <div>
                        <input class="input-texto" placeholder="CPF" value=""  type="text" id="cpf">
                    </div>
                    <div class="cartao-info">Cartao</div>
                    <div>
                        <input class="input-texto" placeholder="Nº Cartão"  value="" type="text" id="cartao">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input class="input-texto" placeholder="Cod segurança" id="seguranca"   type="text">
                            <input id="boleto"   type="hidden">
                        </div>
                        <div class="col-sm-6">
                            <input class="input-texto" placeholder="Validade" value="" id="validade"  type="text">
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <span class="boleto">Boleto 
                    <input type="checkbox" id="pagamento-boleto">
                    <input type="hidden" id="horario"value="<?=$horario?>">
                    <input type="hidden" id="dia"value="<?=$dia?>">
                    <input type="hidden" id="filme"value="">
                    </span>
                        <img class="boleto-exemple" src="img/zoom.jpg" alt="">
                </div>
            </div>
        </div>

    </div>

</div>

<script src="js/compra-ingresso.js"></script>

<%@include file="rodape.jsp" %>