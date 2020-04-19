<?php
require_once "cabecalho.php";
?>

<link rel="stylesheet" href="../model/css/compraIngresso.css">

<div class="container-fluid acentos p-0 m-0 row">
    <!-- div de informações do filme -->
    <div class="col-sm-3 info-film">

    <!-- conteudo -->
        <div class="row">
            <div class="col-sm-auto poster">
                <img src="../model/img/sonic.jpg" width="200px" alt="">
            </div>

            <div class="col-sm-6 info">
            <span>Vingadores: Ultimato</span>
            <p>
                Serracine<br>
                Segunda 06/05 16:00 <br>
                Dublado 3D
            </p>
        </div>
        </div>
    <!-- carrinho, ele sera atualizado dinamicamente -->
        <div class="carrinho">
            <div class="titulo">Carrinho</div>
            <div class="info">info</div>
            <div class="total">totla</div>
        </div>

        <div class="row button">
            <button class="btn btn-primary">Voltar</button>
        </div>

    </div>



    <div class="col-sm-9 acentos">
        <div class="row">
            <div style="border: solid black" class="col-sm config">acentos</div>
            <div style="border: solid black" class="col-sm config">ingresso</div>
            <div style="border: solid black" class="col-sm config ">pagamento </div>
        </div>
        <div class="row">
            <div style="border: solid black" class="col-sm-8 p-3">

            <?php $value=1;
            for ($i=0; $i < 13; $i++) { ?>
        
                    <div class="row pl-4 pr-4 pt-1 selecao-cadeiras">

                        <div  class="col-sm cadeiras">
                    
                        <div class="row">
                            <?php 
                            $cont = 1;
                            for ($w=1; $w < 12; $w++) { 
                                
                                if($cont<12){
                                ?>
                                
                                <div class="col-sm-1 cadeira"><?=$value?></div>
                                <div><input type="hidden" name="<?=$value?>" value="0"></div>
                                <?php $cont++;
                                $value++;
                            }
                            }
                            ?>

                        </div>
                    </div>
                    <div class="box"></div>
                        <div  class="col-sm cadeiras">
                    
                        <div class="row">

                        <?php 
                        for ($q=1; $q < 12; $q++) { 

                            
                            if($cont<=22){
                                ?><div class="col-sm-1 cadeira"><?=$value?></div>
                                <?php $cont++;
                                $value++;
                            }
                        }
                        ?>
                        </div>
                    
                    </div>

                    </div>
                    <?php }?>
        
        
        </div>
            <div style="border: solid black" class="col-sm">legenda</div>
        </div>
    </div>
</div>


