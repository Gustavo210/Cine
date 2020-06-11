<?php
require_once "cabecalho.php";
require_once("../control/config.php");
if(!isset($_GET["id"])) { echo "<script>location.href='index.php';</script>"; } else {
    $sql = "SELECT filme.idFilme,filme.link_trailer,filme.Nome as fnome,filme.Descricao as fdesc,filme.Cover,cat.Nome as fcnome,filme.faixa_etaria FROM filme INNER JOIN filme_categoria cat ON (filme.idCategoria = cat.idCategoria) where filme.IdFilme = :id";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam( ':id',$_GET["id"]);
    $result = $stmt->execute();
    if($stmt->rowCount() == 0){
        echo "<script>location.href='index.php';</script>";
    } else {
        $rows = $stmt->fetchAll();
    }
    
    
}
?>

<link rel="stylesheet" href="../model/css/descricao-filme.css">
<div class="container-fluid p-5">
    <a href="index.php">
        <i class="fas fa-arrow-left"></i>
    </a>
    <div class="row mt-5">
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?=$rows[0]["Cover"]?>" width="200px" alt="">
                </div>
                <div class="col-sm-8">
                    <h2><?=$rows[0]["fnome"]?></h2>
                    <span class=" genero-filme"><span>Gênero: <?=$rows[0]["fcnome"]?></span> </span>
                    <span class="faixa-etaria-filme" style="<?php
                        if($rows[0]["faixa_etaria"] <= 0) echo "background-color: green;"
                    
                    ?>"><?php if($rows[0]["faixa_etaria"] >= 1) {
                        echo $rows[0]["faixa_etaria"];

                    } else {
                        echo "Livre";
                    }?></span>
                    <p>
                        <?=$rows[0]["fdesc"]?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <iframe width="800px" height="400px" src="<?=$rows[0]["link_trailer"]?>"
                allowfullscreen></iframe>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="row d-flex justify-content-center">


            <div class="col">
                <a class="btn btn-block btn-success" href="compra-ingresso.php?id=<?=$rows[0]["idFilme"]?>">Segunda <br> 16hs</a>
            </div>
            <div class="col">
                <a class="btn btn-block btn-success" href="compra-ingresso.php?id=<?=$rows[0]["idFilme"]?>">Terça <br> 16hs</a>
            </div>
            <div class="col">
                <a class="btn btn-block btn-success" href="compra-ingresso.php?id=<?=$rows[0]["idFilme"]?>">Quarta <br> 16hs</a>
            </div>
            <div class="col">
                <a class="btn btn-block btn-success" href="compra-ingresso.php?id=<?=$rows[0]["idFilme"]?>">Quinta <br> 16hs</a>
            </div>
            <div class="col">
                <a class="btn btn-block btn-success" href="compra-ingresso.php?id=<?=$rows[0]["idFilme"]?>">Sexta <br> 16hs</a>
            </div>
            <div class="col">
                <a class="btn btn-block btn-success" href="compra-ingresso.php?id=<?=$rows[0]["idFilme"]?>">Sabado <br> 16hs</a>
            </div>
            <div class="col">
                <a class="btn btn-block btn-success" href="compra-ingresso.php?id=<?=$rows[0]["idFilme"]?>">Domingo <br> 16hs</a>
            </div>

            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<?php
require_once "footer.php";
?>