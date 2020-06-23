
$('.horarios').on('click',function(e){
    var idFilme = $(this).attr('id_filme')
    var dia = $(this).attr('dia')
    var redirect = $(this).attr('href')
    e.preventDefault()
    $.ajax({
        type:"get",
        dataType:"json",
        url:"../control/api.php",
        data:{
            "method":"getHorario",
            "id_filme": idFilme,
            "dia":dia
        },

    }).done((data) => {
        if(data.status){
            var conteudo = data.data.split('/')
            var horarios = ""
            for (let i = 0; i < conteudo.length; i++) {
                horarios += `<option value"${conteudo[i]}">${conteudo[i]}hs</option>`
                
            }
            $.confirm({
                title: 'Horarios',
                content: `
                <div class="form-group">
                    <label>Selecione uma sessao disponivel</label>
                    <select class=" horario form-control">
                    <option value="">Horarios</option>
                    ${horarios}
                    </select>
                </div>`,
                buttons: {
                    formSubmit: {
                        text: 'Selecionar',
                        btnClass: 'btn-blue',
                        action: function () {
                            var horario = this.$content.find('.horario').val();
                            if(!horario){
                                $.alert('Selecione um horario de exibição');
                                return false;
                            }
                            redirect +=`&horario=${horario}`
                            location.href= redirect
                        }
                    },
                    cancel: {
                        text:"voltar",
                        action: function () {
                            //close
                        },}
                }
            });
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
})
$('.bloqueioLogin').on('click',function(e){
    e.preventDefault()
    Swal.fire(
            'Indisponível',
            'faça login no UnaCine para reservar o seu assento',
            'error'
        )
})