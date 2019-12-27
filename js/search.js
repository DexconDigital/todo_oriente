$(document).ready(function() {
    //guarda el id de los departamentos
    var res = new Array();

    //peticion departamentos
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/v2/departamento/",
        type: "GET",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:XAZ2FaGk4qDZN5IiCFOVfMUKnptf3h2Mhhw2yfEm-874")
            );
        },
        dataType: "html",
        success: function(data) {
            var datos = data.trim();

            if (datos.localeCompare('"Sin resultados"') == 0) {
                res += "No hay Inmuebles destacados";
            } else {
                var informacion = JSON.parse(data);
                for (var i = 0; i < informacion.length; i++) {
                    //peticion ciudades
                    $.ajax({
                        url: "http://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/" + informacion[i].id + "",
                        type: "GET",
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader(
                                "Authorization",
                                "Basic " +
                                btoa("Authorization:XAZ2FaGk4qDZN5IiCFOVfMUKnptf3h2Mhhw2yfEm-874")
                            );
                        },
                        dataType: "json",
                        success: function(data) {                      
                            var resultado = '';
                            var informacion = (data);
                            
                            for (var i = 0; i < informacion.length; i++) {
                                resultado += '<option value="' +
                                    informacion[i].id +
                                    '">' +
                                    informacion[i].nombre +
                                    "</option>";
                            }
                            $("#ciudad").append(resultado);
                            $('.selectpicker').selectpicker('refresh');
                        }
                    });
                }
            }
        }
    });


    $("#ciudad").change(function() {
        var res_ciudad = $("#ciudad option:selected").val();
        $.ajax({
            url: "http://www.simi-api.com/ApiSimiweb/response/v2/zonas/idCiudad/" +
                res_ciudad +
                "",
            type: "GET",
            beforeSend: function(xhr) {
                xhr.setRequestHeader(
                    "Authorization",
                    "Basic " +
                    btoa("Authorization:XAZ2FaGk4qDZN5IiCFOVfMUKnptf3h2Mhhw2yfEm-874")
                );
            },
            dataType: "json",
            success: function(data) {
                var resultado = '<option value="0">Zona</option>';
                var informacion = (data);
                for (var i = 0; i < informacion.length; i++) {
                    resultado += '<option value="' + informacion[i].id + '">' +
                        informacion[i].nombre +
                        "</option>";
                }

                $("#zona").html("");
                $("#zona").append(resultado);
                $('.selectpicker').selectpicker('refresh');
            }
        });
    });

    //get list of properties
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/tipoInmuebles/",
        type: "GET",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:XAZ2FaGk4qDZN5IiCFOVfMUKnptf3h2Mhhw2yfEm-874")
            );
        },
        dataType: "json",
        success: function(data) {
            var resultado = '<option value="0">Tipo de inmueble</option>';
            var informacion = (data);
            for (var i = 0; i < informacion.length; i++) {
                resultado +=
                    '<option value="' +
                    informacion[i].idTipoInm + '">' +
                    informacion[i].Nombre +
                    "</option>";
            }
            $("#inmueble").append(resultado);
            $('.selectpicker').selectpicker('refresh');
        }
    });

    //get list of the transactions
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/gestion/",
        type: "GET",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:XAZ2FaGk4qDZN5IiCFOVfMUKnptf3h2Mhhw2yfEm-874")
            );
        },
        dataType: "json",
        success: function(data) {
            var resultado = '<option value="0">Operación</option>';
            for (var i = 0; i < data.length; i++) {
                resultado += '<option value="' +
                    data[i].idGestion + '">' +
                    data[i].Nombre +
                    "</option>";
            }
            $("#operacion").append(resultado);
            $('.selectpicker').selectpicker('refresh');
        }
    });

    var cuidad, inmueble, operacion, zona;

    $("#search").click(function() {
        zona = $("#zona option:selected").val();
        inmueble = $("#inmueble option:selected").val();
        ciudad = $("#ciudad option:selected").val();
        operacion = $("#operacion option:selected").val();
        var code = $(".codeInm").val();
var precio = $("#price").val();
        if(code == ""){
            window.location.href = 'propiedades.php?gs=' + operacion + '&&ti=' + inmueble + '&&ci=' + ciudad + '&&zo=' + zona +'&&pre=' + precio + '';
        }else{
        window.location.href = 'detalle-propiedad.php?dt=874-'+code + '';
        }
    });

    $("#search-1").click(function() {
        zona = $("#zona option:selected").val();
        inmueble = $("#inmueble option:selected").val();
        ciudad = $("#ciudad option:selected").val();
        operacion = $("#operacion option:selected").val();
        var code = $(".codeInm").val();
var precio = $("#price").val();
        if(code == ""){
            window.location.href = 'propiedades.php?gs=' + operacion + '&&ti=' + inmueble + '&&ci=' + ciudad + '&&zo=' + zona +'&&pre=' + precio + '';
        }else{
        window.location.href = 'detalle-propiedad.php?dt=874-'+code + '';
        }
        
        
    });
});
