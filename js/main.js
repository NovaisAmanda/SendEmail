$(function(){
    $("#idProduto").on("click",function(){
        var form = $('#formularioProduto')[0];
        var formData = new FormData(form);

        $.ajax({
            url: '../php/busca.php', 
            type: 'POST',
            data: formData, 
            success: function(msg) { 
                $("#result").html(msg);
            },
            cache: false,
            contentType: false,
            processData: false,
        });
    })

    $("#retornoTeste").on("click",function(){
        var form = $('#enviarEmail')[0];
        var formData = new FormData(form);
        $.ajax({
            url: '../php/enviarTeste.php', 
            type: 'POST',
            data: formData, 
            success: function(msg) { 
                alert('E-mail enviado com sucesso! Você estará em copia');
            },
            cache: false,
            contentType: false,
            processData: false,
        });
    })

    $("#enviarConserto").on("click",function(){
        var form = $('#enviarEmail')[0];
        var formData = new FormData(form);
        $.ajax({
            url: '../php/enviarConserto.php', 
            type: 'POST',
            data: formData, 
            success: function(msg) { 
                alert('E-mail enviado com sucesso! Você estará em copia');
            },
            cache: false,
            contentType: false,
            processData: false,
        });
    })

})

 
