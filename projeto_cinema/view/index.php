<?php
require_once "cabecalho.php";
require_once("../control/config.php");
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block" src="../model/img/banners/TheWitcher.jpg" width="100%" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="../model/img/banners/Vikings.jpg" width="100%" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="../model/img/banners/Sonic.jpg" width="100%" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="../model/img/banners/Joker.jpg" width="100%" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="../model/img/banners/himym.jpg" width="100%" alt="Third slide">
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
      <img src="<?=$row["Cover"]?>" width="150px" alt="">
      <div class="nome-cartaz text-white">
        <?=$row["Nome"]?>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
<?php
require_once "footer.php";
?>