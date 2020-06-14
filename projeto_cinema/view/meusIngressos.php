<?php
require_once "cabecalho.php";
require_once("../control/config.php");
$sql = "SELECT 
        c.id,
        f.nome,
        c.horario,
        c.assentos,
        c.data_compra,
        c.ingressoTotal,
        c.combostotal,
        c.compraTotal,
        c.boleto 
        
        FROM compras c 
        INNER join filme f on(f.idFilme = c.id_filme) 
        WHERE c.idCliente = :id";

$stmt = $PDO->prepare($sql);
$stmt->bindParam( ':id', $_SESSION['userId']);
$result = $stmt->execute();
$compras = $stmt->fetchAll();
?>
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
            <div class="col-sm-1">Compra</div>
            <div class="col-sm-1">Ingressos</div>
            <div class="col-sm-1">Combos</div>
            <div class="col-sm-1">Total</div>
            <div class="col-sm-1">Pagamento</div>
            </div>
        <div class="compra-body mt-3">
            <?php foreach ($compras as $item) {?>
                <div class="card p-3">

                    <div class="row ">
                        <div class="col-sm-1"><span>#<?=$item['id']?></span></div>
                        <div class="col-sm"><span><?=$item['nome']?> | <?=$item['horario']?></span></div>
                        <div class="col-sm"><span><?=$item['assentos']?></span></div>
                        <div class="col-sm-auto"><span><?=$item['data_compra']?></span></div>
                        <div class="col-sm-1"><span>R$<?=$item['ingressoTotal']?>,00 </span></div>
                        <div class="col-sm-1"><span>R$ <?=$item['combostotal']?>,00</span></div>
                        <div class="col-sm-1"><span>R$ <?=$item['compraTotal']?>,00</span></div>
                        <div class="col-sm-1"><?=$item['boleto']?"<i class='fas fa-money-bill-wave'></i>":"<i class='far fa-credit-card'></i>"?></div>
                    </div>
                </div>
            <?php }?>
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
</script>
<?php
require_once "footer.php";
?>