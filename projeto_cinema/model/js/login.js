$("#loginForm").submit(function (e) {
    e.preventDefault();
    $.ajax({
        type:"GET",
        dataType: "json",
        url: "../control/api.php",
        data: {
            "method":"getLogin",
            "email":$(this).find("input[name='email']").val(),
            "senha":$(this).find("input[name='senha']").val()
        }
    }).done((data) => {
        if(data.status){
            Swal.fire(
                'Sucesso!',
                'Você logou com sucesso!',
                'success'
            )
            .then((result) => {
                location.reload()
              })
            $(".welcomeMessage").html("Olá "+data.data.nome+", Bem vindo!");
            $("#afterLoginMenu").show();
            $("#loginForm").hide();
            $("#signupForm").hide();
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
});
$("#signupForm").submit(function (e) {
    e.preventDefault();
    $.ajax({
        type:"GET",
        dataType: "json",
        url: "../control/api.php",
        data: {
            "method":"addLogin",
            "nome":$(this).find("input[name='nome']").val(),
            "email":$(this).find("input[name='email']").val(),
            "senha":$(this).find("input[name='senha']").val()
        }
    }).done((data) => {
        if(data.status){
            Swal.fire(
                'Sucesso!',
                'Você se cadastrou com sucesso!',
                'success'
            ).then((result) => {
                location.reload()
              })
            $(".welcomeMessage").html("Olá "+$(this).find("input[name='nome']").val()+", Bem vindo!");
            $("#afterLoginMenu").show();
            $("#loginForm").hide();
            $("#signupForm").hide();
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
});
$(".loginButton").on("click", function (e){
    e.preventDefault();
    e.stopPropagation();
    if($("#signupForm").css("display") != "none" && $("#loginForm").css("display") == "none"){
        $("#loginForm").show();
        $("#signupForm").hide();
    }
});

$(".cadastrarButton").on("click", function (e){
    e.preventDefault();
    e.stopPropagation();
    if($("#signupForm").css("display") == "none" && $("#loginForm").css("display") != "none"){
        $("#loginForm").hide();
        $("#signupForm").show();
    }
});

$(".clickSair").on("click", function (e){
    $.ajax({
        type:"GET",
        dataType: "json",
        url: "../control/api.php",
        data: {
            "method":"getLogout"
        }
    }).done((data) => {
        if(data.status){
            Swal.fire(
                'Sucesso!',
                'Você saiu com sucesso!',
                'success'
            ).then((result) => {
                location.reload()
              })
            $("#afterLoginMenu").hide();
            $("#loginForm").show();
            $("#signupForm").hide();
        }
        
    });
});