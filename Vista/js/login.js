$(document).on('ready', function () {
    $("#formulario a").on('click',function (e){
        e.preventDefault();
        console.log($("#usuario").val());
        if($("#usuario").val().length === 0){
            $("#formulario h2").text("Introduce un nombre de usuario");
        }else if($("#password").val().length === 0){
            $("#formulario h2").text("Introduce una contraseña");
        }else $.ajax({
            beforeSend: function (xhr) {
                $("#formulario h2").html("Iniciando Sesion...");
            },
            url: "Controlador/login.php",
            type: 'POST',
            data: $("#formulario form").serialize(),
            success: function (data, textStatus, jqXHR) {
                if(data.length !== 0){
                    $("#formulario h2").html(data);
                }else{
                    window.location="menus.php";
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $("#formulario h2").html("Se presento un error inesperado");
            },
            timeout: 10000
        });
        
    });
});