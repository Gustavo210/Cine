<?php
require_once "cabecalho.php";
require_once "../control/config.php";
if(!isset($_GET['search'])) {
    header("Location: index.php");
    return;
}
$search = $_GET['search'];
$search = '%' . $search . '%';
$sql = "SELECT filme.idFilme,filme.faixa_etaria,filme.Nome as fnome,filme.Descricao as fdesc,filme.Cover,cat.Nome as fcnome FROM filme INNER JOIN filme_categoria cat ON (filme.idCategoria = cat.idCategoria) where filme.Nome LIKE :search ORDER BY idFilme DESC LIMIT 3 ";
$stmt = $PDO->prepare($sql);
$stmt->bindParam( ':search', $search);
$result = $stmt->execute();
$rows = $stmt->fetchAll();
?>
<link rel="stylesheet" href="../model/css/pesquisa.css">
<div style="min-height:100vh" class="p-5">
<a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a>
<br>
<br>
    <p class="resultado-pesquisa">
        Pesquisa <span class="span-destaque"><?=$_GET["search"]?></span><hr>
    </p>
<div class="space"></div>
    <?php
    
    foreach($rows as $row):
    ?> 
    <div class=" box-filme">
        <div class="row justify-content-between">
        <div class="col-sm-4 titulo-filme"><?=$row["fnome"]?></div>
        <div class="col-sm-2"> <a class="btn btn-block btn-success" href="compra-ingresso.php?id=<?=$row["idFilme"]?>&dia=<?=date("N")?>">Comprar ingresso</a> <a class="btn btn-block btn-primary" href="descricao-filme.php?id=<?=$row["idFilme"]?>">Detalhes</a></div>
        </div>
        <div class="row">
            <div class="col-sm-2 "><img src="<?=$row["Cover"]?>" width="200px" alt=""></div>
            <div class="col-sm ml-4">
                <div class="row">
                    <div class=" genero-filme"><span>Gênero: <?=$row["fcnome"]?></span> </div>
                    <span class="faixa-etaria-filme" style="<?php
                        if($row["faixa_etaria"] <= 0) echo "background-color: green;"
                    
                    ?>"><?php if($row["faixa_etaria"] >= 1) {
                        echo $row["faixa_etaria"];

                    } else {
                        echo "Livre";
                    }?></span>
                    </div>
                    <div class="col"><span class="em-exibicao">Em Exibição: Serracine</span></div>
                    <p class=" col-sm-7 desc-filme">
                    <?=$row["fdesc"]?>
                    </p>

            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>
<?php
require_once "footer.php";
?>