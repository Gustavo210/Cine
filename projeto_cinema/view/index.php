<?php
require_once "cabecalho.php";
require_once("../control/config.php");
$sql = "SELECT * FROM filme ORDER BY idFilme DESC LIMIT 6";
$stmt = $PDO->prepare($sql);
$result = $stmt->execute();
$rowss = $stmt->fetchAll();
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block" src="../model/img/banners/TOYSTORY4.jpg" width="100%" alt="legal">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="../model/img/banners/JOHNWICK.jpg" width="100%" alt="Oh JOHN ai oh">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="../model/img/banners/Sonic.jpg" width="100%" alt="oi eu sou o sonic">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="../model/img/banners/Joker.jpg" width="100%" alt="medo">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="../model/img/banners/PorLugaresIncriveis.jpg" width="100%" alt="filme bao">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Proximo</span>
  </a>
</div>
<div class="row m-0 p-1 justify-content-center" style="background-color: #f4e9e5!important;color:white;">
  <img src="../model/img/Combo/Banner.jpg" width="40%" alt="">
</div>
<div class="filmes-destaque row justify-content-center bg-dark">
  <?php 
  $sql = "SELECT * FROM filme ORDER BY idFilme DESC LIMIT 6";
  $stmt = $PDO->prepare($sql);
  $result = $stmt->execute();
  $rows = $stmt->fetchAll();

  foreach($rows as $row):
  ?>
    <div class="filme-cartaz col-sm-auto col-5">
      <a href="descricao-filme.php?id=<?=$row["idFilme"]?>">
      <img src="<?=$row["Cover"]?>" width="150px">
      <div style="font-size: 12px; text-align: center;" class="nome-cartaz text-white">
        <?=$row["Nome"]?>
      </div>
      </a>
    </div>
  <?php endforeach; ?>
  </div>
<?php
require_once "footer.php";
?>