
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
        }
    });

    
        $('.mais-inteira').on('click', function(){
            var total = parseInt($('.total-inteira').text());
            var quant = parseInt($('.quant-inteira').text());
            
    
            if(total!=0){
                quant++;
                $('.meu-total-ingresso').text(parseInt($('.meu-total-ingresso').text())+1)
            }
            total--;
            if( total == -1){
                total= 0
            }
            var teste =parseInt($('.meu-total-ingresso').text());
            $('.total-inteira').text(total)
            $('.quant-inteira').text(quant)
        })
        $('.menos-inteira').on('click', function(){
            var total = parseInt($('.total-inteira').text());
            var quant = parseInt($('.quant-inteira').text());
            
    
            if(quant>0){
                quant--;
                $('.meu-total-ingresso').text(parseInt($('.meu-total-ingresso').text())-1)
                total++;
            }
            $('.total-inteira').text(total)
            $('.quant-inteira').text(quant)
        })

        $('.mais-meia').on('click', function(){
            var total = parseInt($('.total-meia').text());
            var quant = parseInt($('.quant-meia').text());
            var valorIngressoMeia = parseInt($('.valor-meia').val());
            var valorIngressos = parseInt($('.valor-total-ingressos').text());
    
            if(total!=0){
                quant++;
                
                $('.meu-total-ingresso').text(parseInt($('.meu-total-ingresso').text())+1)
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
            
    
            if(quant>0){
                quant--;
                $('.meu-total-ingresso').text(parseInt($('.meu-total-ingresso').text())-1)
                total++;
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
        $('.div-acentos').hide();
        $('.div-pagamentos').hide();
        $('.div-combos').show();
    });
    $('.pagamento-bt').on('click',function(){
        $('.div-acentos').hide();
        $('.div-combos').hide();
        $('.div-pagamentos').show();
    });