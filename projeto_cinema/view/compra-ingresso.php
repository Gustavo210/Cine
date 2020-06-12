<?php
require_once "cabecalho.php";
require_once("../control/config.php");
require_once("../control/config.php");
if(!isset($_GET["id"])) { echo "<script>location.href='index.php';</script>"; } else {
    $sql = "SELECT filme.link_trailer,
    filme.Nome fnome,
    filme.Descricao fdesc,
    filme.Cover,
    cat.Nome fcnome,
    filme.ingresso_meia meia,
    filme.ingresso_inteira inteira,
    filme.faixa_etaria
     FROM filme INNER JOIN filme_categoria cat ON (filme.idCategoria = cat.idCategoria) where filme.IdFilme = :id";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam( ':id',$_GET["id"]);
    $result = $stmt->execute();
    if($stmt->rowCount() == 0){
        echo "<script>location.href='index.php';</script>";
    } else {
        $rows = $stmt->fetchAll();
    }
    
    
}
switch ($_GET['dia']) {
    case 1: $dia = "Segunda";break;
    case 2: $dia = "Terça";break;
    case 3: $dia = "Quarta";break;
    case 4: $dia = "Quinta";break;
    case 5: $dia = "Sexta";break;
    case 6: $dia = "Sabado";break;
    case 7: $dia = "Domingo";break;
}
if(isset($_GET['horario'])){
$horario = $_GET['horario'];
}else{
$horario = "00:00";
}

?>

<link rel="stylesheet" href="../model/css/compraIngresso.css">

<div class="container-fluid p-0 m-0 row">
    <!-- div de informações do filme -->
    <div class="col-sm-3 info-film">

    <!-- conteudo -->
        <div class="row">
            <div class="col-sm-auto">
                <img src="<?=$rows[0]["Cover"]?>" class="poster" alt="">
            </div>

            <div class="col-sm-6 info">
                <span><?=$rows[0]["fnome"]?></span>
                <p>
                    Serracine<br>
                    <?=$dia?> <?=$horario?> <br>
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

        <div class="row div-button">
            <a class="btn button" href="javascript:history.back()">Voltar</a>
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
                <?php $value=1;for ($i=0; $i < 13; $i++) { ?>
        
                    <div class="row pl-4 pr-4 ">

                        <div  class="col-sm">
                    
                            <div class="row">
                                <?php $cont = 1;
                                for ($w=1; $w < 12; $w++) { 
                                    if($cont<12){?>
                                    
                                    <div class="cadeira"><?=$value?></div>

                                <?php $cont++;$value++;}}?>

                            </div>
                        </div>

                            <div class="box"></div>

                            <div  class="col-sm">
                        
                                <div class="row">

                                <?php for ($q=1; $q < 12; $q++) { 
                                    if($cont<=22){?>

                                    <div class=" cadeira"><?=$value?></div>

                                <?php $cont++;$value++;}}?>

                                </div>
                        
                            </div>

                    </div>
                <?php }?>
        
        
            </div>

            <div class="col-sm ">
                <div class="titulo">Ingressos</div>
                <div class="tipos-ingresso">
                    <div class="titulo-ingressos">
                        <div class="row">
                            <div class="col-sm-6">Entrada Inteira</div>
                            <div class="col-sm-6">Disponiveis: <span class="total-inteira"><?=$rows[0]['inteira']?></span></div>
                        </div>
                    </div>
                    <div class="seleciona-ingresso">
                        <div class="row p-0 m-0">
                            <div class="col-sm-6">valor: R$15,00
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
                            <div class="col-sm-6">Meia Entrada</div>
                            <div class="col-sm-6">Disponiveis: <span class="total-meia"><?=$rows[0]['meia']?></span></div>
                        </div>
                    </div>
                    <div class="seleciona-ingresso">
                        <div class="row p-0 m-0">
                            <div class="col-sm-6">valor: R$10,00
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
                <br><br>
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
                        <img src="../model/img/Combo/balde.jpg" alt="balde">
                        <input class="quant" type="hidden">
                        <input class="preco" value="25" type="hidden">
                    </div>
                    <button class="float-x">X</button>
                </div>
                <div class="item-combo col-4">
                    <div class="combo">
                        <img src="../model/img/Combo/duplo.jpg" alt="duplo">
                        <input class="quant" type="hidden">
                        <input class="preco" value="23" type="hidden">
                    </div>
                    <button class="float-x">X</button>
                </div>
                <div class="item-combo col-4">
                    <div class="combo">
                        <img src="../model/img/Combo/grande.jpg" alt="grande">
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
                        <img src="../model/img/Combo/kids.jpg" alt="kids">
                        <input class="quant" type="hidden">
                        <input class="preco" value="10" type="hidden">
                    </div>
                    <button class="float-x">X</button>
                </div>
                <div class="item-combo col-4">
                    <div class="combo">
                        <img src="../model/img/Combo/medio.jpg" alt="medio">
                        <input class="quant" type="hidden">
                        <input class="preco" value="15" type="hidden">
                    </div>
                    <button class="float-x">X</button>
                </div>
                <div class="item-combo col-4">
                    <div class="combo">
                        <img src="../model/img/Combo/super.jpg" alt="super">
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
            <input id="idCliente" type="hidden" value="<?=$_SESSION['userId']?>">
            <div class="metodos-pagamento">Opções de pagamento <div class="pt-5"><img src="../model/img/pagamento.svg" alt=""></div></div>
            <div class="corpo-pagamento row">
                <div class="col-sm-6">
                    <div class="cartao-info">Dados Pessoais
                    <input type="checkbox" id="pagamento-cartao">
                    </div>
                    <div>
                        <input class="input-texto" placeholder="Titular" value="<?=isset($_SESSION['userName'])?$_SESSION["userName"]:""?>"  type="text" id="nome">
                    </div>
                    <div>
                        <input class="input-texto" placeholder="telefone" value="<?=isset($_SESSION['telefone'])?$_SESSION["telefone"]:""?>" type="text" id="telefone">
                    </div>
                    <div>
                        <input class="input-texto" placeholder="CPF" value="<?=isset($_SESSION['cpf'])?$_SESSION["cpf"]:""?>"  type="text" id="cpf">
                    </div>
                    <div class="cartao-info">Cartao</div>
                    <div>
                        <input class="input-texto" placeholder="Nº Cartão"  value="<?=isset($_SESSION['cartao'])?$_SESSION["cartao"]:""?>" type="text" id="cartao">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input class="input-texto" placeholder="Cod segurança" id="seguranca"   type="text">
                            <input id="boleto"   type="hidden">
                        </div>
                        <div class="col-sm-6">
                            <input class="input-texto" placeholder="Validade" value="<?=isset($_SESSION['validade'])?$_SESSION["validade"]:""?>" id="validade"  type="text">
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <span class="boleto">Boleto 
                    <input type="checkbox" id="pagamento-boleto">
                    <input type="hidden" id="horario"value="<?=$horario?>">
                    <input type="hidden" id="dia"value="<?=$dia?>">
                    <input type="hidden" id="filme"value="<?=$_GET["id"]?>">
                    </span>
                        <img class="boleto-exemple" src="../model/img/zoom.jpg" alt="">
                </div>
                <button class="btn p-3 button" id="finalizarCompra">Finalizar</button>
            </div>
        </div>

    </div>

</div>

<script src="../model/js/compra-ingresso.js"></script>
<?php
require_once "footer.php";
?>