
$(".input-search").on("input",function() {
    $(".search-list").html("");
    $(".overlay-search").show();
    $(".search-list").removeClass("d-none").addClass("d-inline");
    if($(this).val().length <= 2) {
        $(".search-list").html("<div class='search-item'><span>Digite pelo menos 3 letras para buscar um filme.</span></div>");
        return;
    }
    $.ajax({
        type:"GET",
        dataType: "json",
        url: "../control/api.php",
        data: {"method":"getFilmes","search":$(".input-search").val()}
    }).done((data) => {
        data.data.forEach(element => {
            $(".search-list").append(`<div class="search-item"><a href="compra-ingresso.php"class=" btn " ><img class="img-fluid" src="${element.Cover}" style="height: 100px;"/><span class="title-search-filme position-absolute">${element.Nome} <span class="disc-search-filme">${element.Descricao}</span></span></a></div>`);
        });
    });
});
$(".search-list").on("mouseleave", function(e) {
    $(".search-list").html("");
    $(".overlay-search").hide();
});
$(".input-search").on("keypress", function(e) {
    if (e.keyCode == 13) {
        location.href="resultado-pesquisa.php?search="+$(this).val();
        return false;
    }
});
$(".botao-pesquisar").on("click", function (e){
    location.href="resultado-pesquisa.php?search="+$(".input-search").val();
    return false;
});
