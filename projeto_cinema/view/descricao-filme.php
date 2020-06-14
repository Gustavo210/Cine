<?php
require_once "cabecalho.php";
require_once("../control/config.php");
if(!isset($_GET["id"])) { echo "<script>location.href='index.php';</script>"; } else {
    $sql = "SELECT 
            filme.idFilme,
            filme.link_trailer,
            filme.Nome fnome,
            filme.Descricao fdesc,
            filme.Cover,
            cat.Nome fcnome,
            filme.faixa_etaria,
            filme.dias_disponiveis
        FROM filme 
        INNER JOIN filme_categoria cat ON (filme.idCategoria = cat.idCategoria)
        where filme.IdFilme = :id";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam( ':id',$_GET["id"]);
    $result = $stmt->execute();
    if($stmt->rowCount() == 0){
        echo "<script>location.href='index.php';</script>";
    } else {
        $rows = $stmt->fetch();
    }
}
$dias_disponiveis = explode('/',$rows['dias_disponiveis'])
?>
<link rel="stylesheet" href="../model/css/descricao-filme.css">
<div class="tela container-fluid p-5">
    <a href="javascript:history.back()">
        <i class="fas fa-arrow-left"></i>
    </a>
    <div class="row mt-5">


        <div class="col-sm-auto">
            <div class="row p-0 m-0">

                <div class="col-sm-3 mr-3">
                    <img src="<?=$rows["Cover"]?>" width="200px" alt="">
                </div>
                
                <div class="col-sm-8">
                    <h2><?=$rows["fnome"]?></h2>
                    <span class=" genero-filme"><span>Gênero: <?=$rows["fcnome"]?></span> </span>
                    <span class="faixa-etaria-filme" style="<?php
                        if($rows["faixa_etaria"] <= 0) echo "background-color: green;"
                    
                    ?>"><?php if($rows["faixa_etaria"] >= 1) {
                        echo $rows["faixa_etaria"];

                    } else {
                        echo "Livre";
                    }?></span>
                    <p style="max-width: 500px;">
                        <?=$rows["fdesc"]?>
                    </p>
                </div>


            </div>
        </div>


        <div class="col-sm-auto">
            <div class="row d-flex justify-content-center">
<div class="col-sm-6 mt-3">

    <iframe width="800px" height="400px" src="<?=$rows["link_trailer"]?>"
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
                <?php foreach ($dias_disponiveis as $dias) {
                    $dias = explode(':',$dias);
                    switch ($dias[0]) {
                        case '1':$nomeDia = "Segunda";break;
                        case '2':$nomeDia = "Terça";break;
                        case '3':$nomeDia = "Quarta";break;
                        case '4':$nomeDia = "Quinta";break;
                        case '5':$nomeDia = "Sexta";break;
                        case '6':$nomeDia = "Sabado";break;
                        case '7':$nomeDia = "Domingo";break;
                    }
                ?>
                <div class="col-auto p-0 m-1">
                    <a dia="<?=$nomeDia?>" id_filme="<?=$rows["idFilme"]?>" class="btn <?=$dias[1]==0?"disabled ":""?>btn-block <?=isset($_SESSION['isLogged'])?"horarios ":"bloqueioLogin "?>btn-dark" 
                    href="compra-ingresso.php?id=<?=$rows["idFilme"]?>&dia=<?=$dias[0]?>"><?=$nomeDia?></a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<script src="../model/js/descricao-filme.js"></script>
<?php
require_once "footer.php";
