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
        c.boleto,
        f.link_trailer
        
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
            <div class="col-sm-1 text-center">Compra</div>
            <div class="col-sm-1 text-center">Ingressos</div>
            <div class="col-sm-1 text-center">Combos</div>
            <div class="col-sm-1 text-center">Total</div>
            <div class="col-sm-1 text-center">Pagamento</div>
            <div class="col-sm-1 p-0 m-0 text-center">Ticket</div>
            </div>
        <div class="compra-body mt-3">
            <?php foreach ($compras as $item) {?>
                <div class="card p-3">

                    <div class="row ">
                        <div class="col-sm-1"><span>#<?=$item['id']?></span></div>
                        <div class="col-sm"><span><?=$item['nome']?> | <?=$item['horario']?></span></div>
                        <div class="col-sm"><span><?=$item['assentos']?></span></div>
                        <div class="col-sm-auto"><span><?=date('d/m/Y H:i:s',strtotime($item['data_compra']))?></span></div>
                        <div class="col-sm-1 text-center"><span>R$<?=$item['ingressoTotal']?>,00 </span></div>
                        <div class="col-sm-1 text-center"><span>R$ <?=$item['combostotal']?>,00</span></div>
                        <div class="col-sm-1 text-center"><span>R$ <?=$item['compraTotal']?>,00</span></div>
                        <div class="col-sm-1 text-center"><?=$item['boleto']?"<i class='fas fa-money-bill-wave'></i>":"<i class='far fa-credit-card'></i>"?></div>
                        <div class="col-sm-1 m-0 p-0 text-center">
                            <button class="btn btn-light ticket">Baixar</button>
                            <input type="hidden"class="nome" value="<?=$item['nome']?>">
                            <input type="hidden"class="video" value="<?=$item['link_trailer']?>">
                    </div>
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

$('.ticket').on('click',function(){
    var nome = $(this).parent().find('.nome').val()
    var video = $(this).parent().find('.video').val()
    $.confirm({
                title: `${nome}`,
                content: `<div class="container-fluid">
                    <div class='row d-flex justify-content-center'>
                        <div class="col-6">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${video}">
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
<?php
require_once "footer.php";
?>