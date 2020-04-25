<?php
require_once "cabecalho.php";
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
                    <img src="../model/img/sonic.jpg" width="200px" alt="">
                </div>
                <div class="col-sm-8">
                    <h2>Vingadores Ultimato</h2>
                    <span class=" genero-filme"><span>Gênero: teste</span> </span>
                    <span class="faixa-etaria-filme">12</span>
                    <p>
                        Quarto filme da franquia Os Vingadores, na 3ª Fase do Universo Cinematográfico da Marvel.
                        Culminando a jornada de 21 filmes interconectados,
                        Vingadores: Ultimato mostra o fim da luta dos heróis contra Thanos, o titã louco. Após utilizar
                        a manopla do infinito,
                        Thanos dizimou metade dos seres vivos do universo,
                        agora, ainda sofrendo com a perda os Vingadores devem se recompor e criar um plano para derrotar
                        e o vilão e desfazer todo o caos. <br><br>

                        Elenco: Robert Downey Jr., Mark Ruffalo, Scarlett Johansson
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <iframe width="800px" height="400px" src="https://www.youtube.com/embed/4QRdB4RAQMs"
                allowfullscreen></iframe>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="row d-flex justify-content-center">


            <div class="col">
                <button class="btn btn-block btn-info">Segunda <br> 16hs</button>
            </div>
            <div class="col">
                <button class="btn btn-block btn-info">Terça <br> 16hs</button>
            </div>
            <div class="col">
                <button class="btn btn-block btn-info">Quarta <br> 16hs</button>
            </div>
            <div class="col">
                <button class="btn btn-block btn-info">Quinta <br> 16hs</button>
            </div>
            <div class="col">
                <button class="btn btn-block btn-info">Sexta <br> 16hs</button>
            </div>
            <div class="col">
                <button class="btn btn-block btn-info">Sabado <br> 16hs</button>
            </div>
            <div class="col">
                <button class="btn btn-block btn-info">Domingo <br> 16hs</button>
            </div>

            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<?php
require_once "footer.php";
?>