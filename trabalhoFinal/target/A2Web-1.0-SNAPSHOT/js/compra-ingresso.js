$("#finalizarCompra").on('click',function (e) {
    e.preventDefault();
    var boleto = 0
    if($('#pagamento-cartao').is(':checked')){
        boleto = 1
    }
    if($('#pagamento-boleto').is(':checked')){
        boleto = 0
    }
    var ingressoTotal =$('.valor-total-ingressos').text()
    var combosTotal =$('.valor-total-combos').text()
    var compraTotal =$('.total-compra').text()
    var idCliente =$('#idCliente').val()
    var nome = $('#nome').val()
    var telefone = $('#telefone').val()
    var cpf = $('#cpf').val()
    var cartao = $('#cartao').val()
    var seguranca = $('#seguranca').val()
    var validade = $('#validade').val()
    var horairo = $('#horario').val()
    var dia = $('#dia').val()
    var idFilme = $('#filme').val()
    var assentos = $('.lugares').text()
if((boleto==0&&nome.length>5&& telefone.length>8&&cpf.length>10)||
(boleto==1&&nome.length>5&&telefone.length>8&&cpf.length>10&& cartao.length>16&& seguranca.length>2&& validade.length>2)){

    $.ajax({
        type:"GET",
        dataType: "json",
        url: "../control/api.php",
        data: {
            "method":"addCompra",
            "ingressoTotal":ingressoTotal,
            "combosTotal":combosTotal,
            "compraTotal":compraTotal,
            "idCliente":idCliente,
            "boleto":boleto,
            "dia":dia,
            "horario":horairo,
            "assentos":assentos,
            "id_filme":idFilme
        }
    }).done((data) => {
        if(data.status){
            Swal.fire(
                'Sucesso!',
                'Obrigado pela compra, bom filme',
                'success'
                )
                .then(() => {
                    location.href="index.php"
                })
            } else {
                Swal.fire(
                    'Erro!',
                    'Verifique as informações digitadas.',
                    'error'
                    ).then((result) => {
                        location.reload()
                    })
                }
                
            });
        }else{
            Swal.fire(
                'Erro!',
                'Verifique as informações digitadas.',
                'error'
                )
        }
            

});
    var cont=0;
    $('.cadeira').on('click',function(){
        var meusAcentos =$('.lugares').text();
        var meuNovoAcento =$(this).text();
    
        
        
         var totalDisponivel = parseInt($('.meu-total-ingresso').text())
        if(  totalDisponivel!=cont && $(this).hasClass('cadeira')){
            
            cont++

            if(meusAcentos==""){
                $('.lugares').text(`${meuNovoAcento}`);
            }else{   
                $('.lugares').text(`${meusAcentos}, ${meuNovoAcento}`);
            }
            $(this).removeClass('cadeira').addClass('marcado');
        }else{
            Swal.fire(
                '',
                'Selecione pelo menos um ingresso para prosseguir',
                'error'
            )
        }
    });

    
        $('.mais-inteira').on('click', function(){
            var total = parseInt($('.total-inteira').text());
            var quant = parseInt($('.quant-inteira').text());
            let valorIngressoInteira = parseInt($('.valor-inteira').val());
            let valorIngressos = parseInt($('.valor-total-ingressos').text());
            let totalValor=valorIngressos+valorIngressoInteira
    
            if(total!=0){
                quant++;
                $('.valor-total-ingressos').text(totalValor)
                $('.meu-total-ingresso').text(parseInt($('.meu-total-ingresso').text())+1)
                meuTotoal()
            }
            total--;
            if( total == -1){
                total= 0
            }
            $('.total-inteira').text(total)
            $('.quant-inteira').text(quant)
        })
        $('.menos-inteira').on('click', function(){
            var total = parseInt($('.total-inteira').text());
            var quant = parseInt($('.quant-inteira').text());
            let valorIngressoInteira = parseInt($('.valor-inteira').val());
            let valorIngressos = parseInt($('.valor-total-ingressos').text());
            let totalValor=valorIngressos-valorIngressoInteira
            
    
            if(quant>0){
                quant--;
                $('.valor-total-ingressos').text(totalValor)
                $('.meu-total-ingresso').text(parseInt($('.meu-total-ingresso').text())-1)
                total++;
                meuTotoal()
            }
            $('.total-inteira').text(total)
            $('.quant-inteira').text(quant)
        })

        $('.mais-meia').on('click', function(){
            var total = parseInt($('.total-meia').text());
            var quant = parseInt($('.quant-meia').text());
            let valorIngressoMeia = parseInt($('.valor-meia').val());
            let valorIngressos = parseInt($('.valor-total-ingressos').text());
            let totalValor=valorIngressos+valorIngressoMeia
            if(total!=0){
                quant++;
                $('.valor-total-ingressos').text(totalValor)
                $('.meu-total-ingresso').text(parseInt($('.meu-total-ingresso').text())+1)
                meuTotoal()
            }
            total--;
            if( total == -1){
                total= 0
            }
            $('.total-meia').text(total)
            $('.quant-meia').text(quant)
        })
        $('.menos-meia').on('click', function(){
            var total = parseInt($('.total-meia').text());
            var quant = parseInt($('.quant-meia').text());
            let valorIngressoMeia = parseInt($('.valor-meia').val());
            let valorIngressos = parseInt($('.valor-total-ingressos').text());
            let totalValor=valorIngressos-valorIngressoMeia
    
            if(quant>0){
                quant--;
                $('.valor-total-ingressos').text(totalValor)
                $('.meu-total-ingresso').text(parseInt($('.meu-total-ingresso').text())-1)
                total++;
                meuTotoal()
            }
            $('.total-meia').text(total)
            $('.quant-meia').text(quant)
        })
    
    $('.acento-bt').on('click',function(){
        $('.div-pagamentos').hide();
        $('.div-combos').hide();
        $('.div-acentos').show();
    });
    $('.combo-bt').on('click',function(){
        if($('.lugares').text()!=""){
            $('.div-acentos').hide();
            $('.div-pagamentos').hide();
            $('.div-combos').show();
        }else{
            Swal.fire(
                '',
                'Selecione pelo menos uma cadeira para prosseguir',
                'error'
            )
        }
    });
    $('.pagamento-bt').on('click',function(){
        $('.div-acentos').hide();
        $('.div-combos').hide();
        $('.div-pagamentos').show();
    });

    function meuTotoal(){
        let ingressos =parseInt($('.valor-total-ingressos').text())
        let combos =parseInt($('.valor-total-combos').text())
        let total = ingressos + combos
        $('.total-compra').text(total)
    }
    $('.combo').on('click', function(){
        let contC =$(this).find('.quant').val()
        let valor =$(this).find('.preco').val()
        let totalValor =parseInt($('.valor-total-combos').text())
        let meuTotal = parseInt(valor) + totalValor
        if(contC==0){
            contC++
            $('.valor-total-combos').text(meuTotal)
            $(this).find('.quant').val(contC)
            $(this).parent().find('.float-x').show()
            $(this).append(`<div class="float-plus">+1</div>`)
            $(this).find('.quant').val(contC)
        }else{
            contC++
            $('.valor-total-combos').text(meuTotal)
            $(this).find('.float-plus').text(`+${contC}`)
            $(this).find('.quant').val(contC)
        }meuTotoal()
    })

$('.float-x').on('click',function(){
    let valor =$(this).parent().find('.preco').val()
    let totalValor =parseInt($('.valor-total-combos').text())
    let meuTotal = totalValor - parseInt(valor)

    let quant = $(this).parent().find('.quant').val()
    total =quant -1
    if(total>=0){
        $('.valor-total-combos').text(meuTotal)
        $(this).parent().find('.quant').val(total)
        $(this).parent().find('.float-plus').text(`+${total}`)
    }
    if(totalValor>=0){
        meuTotoal()
    }
})