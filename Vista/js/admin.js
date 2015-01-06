$(document).on('ready', function () {
    var menus = $(".boton");

    menus.eq(0).on('click', function (e) { //Menus
        e.preventDefault();
        alert('Presionando un Menu');
    });

    menus.eq(1).on('click', function (e) { //Noticia
        e.preventDefault();
        alert('Presionando un Menu');
    });

    menus.eq(2).on('click', function (e) { //Banner
        e.preventDefault();
        alert('Presionando un Menu');
    });
    $listado = $("#listado ul")

    cargarDatos();
    setInterval('cargarDatos()', 11000);

    $("#formulario>a").on('click', function (e) {//Guardar
        e.preventDefault();
        $.ajax({
            beforeSend: function (xhr) {
                $("#formulario h1").html("Agregando...");
            },
            type: 'POST',
            url: 'Controlador/operaciones.php',
            data: {tipo: "guardar", tabla: "banners", titulo: $(".titulo").val(),
                datos: {url: $(".url").val(), imagen: $(".imagen").val()}},
            success: function (data, textStatus, jqXHR) {
                $("#formulario h1").html(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $("#formulario h1").html("Ocurrio un error inesperado");
            },
            complete: function (jqXHR, textStatus) {
                $("#formulario h1").html("Editar/Crear Banners");
                limpiar();
                cargarDatos();
            },
            timeout: 10000
        });
    });

    $("#operaciones>a").on('click', function (e) {//Nuevo
        e.preventDefault();
        limpiar();
    });

});

function update() {
    for (var i = 0; i < $(".iconEliminar").length; i++) {//Eliminar
        $(".iconEliminar").eq(i).parent().on('click', function (e) {
            e.preventDefault();
            $(this).parents("li").addClass("eliminar");
            $.ajax({
                beforeSend: function (xhr) {
                    $("#listado h2").html("Eliminando...");
                },
                type: 'POST',
                data: {tipo: "eliminar", tabla: "banners", titulo: $(".eliminar .tituloLi").html()},
                url: "Controlador/operaciones.php",
                success: function (data, textStatus, jqXHR) {
                    $(".eliminar").fadeOut(1000, function () {
                        $(".eliminar").remove();
                    })
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $("#listado h2").html("Ocurrio un error al eliminar...");
                },
                complete: function (jqXHR, textStatus) {
                    $("#listado h2").html("Listado de banners");
                    limpiar();
                },
                timeout: 10000
            });
        });
    }


    for (var i = 0; i < $(".iconModificar").length; i++) {//Cargar Datos
        $(".iconModificar").eq(i).parent().on('click', function (e) {
            e.preventDefault();
            $(this).parents("li").addClass("modificar");
            $.ajax({
                beforeSend: function (xhr) {
                    $("#listado h2").html("Cargando Datos...");
                    $(".titulo").prop('disabled', true);
                },
                type: 'POST',
                data: {tipo: "cargar", tabla: "banners", titulo: $(".modificar .tituloLi").html()},
                url: "Controlador/operaciones.php",
                success: function (data, textStatus, jqXHR) {
                    $datos = $.parseJSON(data);
                    $(".titulo").val($datos[0]);
                    $(".url").val($datos[1]);
                    $(".imagen").val($datos[2]);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $("#formulario h1").html("Ocurrio un error al cargar datos...");
                },
                complete: function (jqXHR, textStatus) {
                    cargarDatos();
                    $("#listado h2").html("Listado de banners");
                },
                timeout: 10000
            });
        });
    }
}

function cargarDatos() {
    $.ajax({
        beforeSend: function (xhr) {
            $listado.html("<h3>Actualizando Datos...</h3>");
        },
        type: 'POST',
        data: {tipo: "mostrar", tabla: "banners"},
        url: "Controlador/operaciones.php",
        success: function (data, textStatus, jqXHR) {
            $listado.html(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            $listado.html("<h3>Ocurrio un error inesperado</h3>");
        },
        complete: function (jqXHR, textStatus) {
            update();
        },
        timeout: 10000
    });
}


function limpiar() {
    $(".titulo").prop('disabled', false);
    $(".url").prop('disabled', false);
    $(".imagen").prop('disabled', false);
    $(".titulo").val("");
    $(".url").val("");
    $(".imagen").val("");
    $(".titulo").focus();
}