setTimeout(function () {
    var tipo = localStorage.Tipo_Inmueble;
    var gest = localStorage.gestion;
    var tipoinm = "";
    var ges = "";
    tipoinm += (tipo == "Apartamento") ? "1" : "";
    tipoinm += (tipo == "Casas") ? "2" : 0;
    tipoinm += (tipo == "Consultorios") ? "3" : "";
    tipoinm += (tipo == "Oficinas") ? "4" : "";
    tipoinm += (tipo == "Locales") ? "5" : "";
    tipoinm += (tipo == "Bodegas") ? "6" : "";
    tipoinm += (tipo == "Lotes") ? "7" : "";
    tipoinm += (tipo == "Fincas") ? "8" : "";
    tipoinm += (tipo == "Parqueaderos") ? "9" : "";
    tipoinm += (tipo == "Edificios") ? "10" : "";
    tipoinm += (tipo == "Apartaestudio") ? "11" : "";
    tipoinm += (tipo == "Hotel") ? "12" : "";
    ges += (gest == "Arriendo") ? "1" : "";
    ges += (gest == "Arriendo/venta") ? "2" : "";
    ges += (gest == "Venta") ? "5" : "";
    $.ajax({
        url: 'http://www.simi-api.com/ApiSimiweb/response/v21/filtroInmueble/limite/0/total/8/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/' + tipoinm + '/tipOper/' + ges + '/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0',
        type: 'GET',
        cache: true,
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:XAZ2FaGk4qDZN5IiCFOVfMUKnptf3h2Mhhw2yfEm-874'));
        },
        'dataType': "json",
        success: function (data) {
            var res = "";
            var j = 0;
            for (var i = 0; i < data.totalPagina; i++) {
                if (data[i].Codigo_Inmueble != localStorage.codigo) {
                    res += '<div class="col-sm-12 p-6">' +
                        '<div class="info_content row">' +
                        '<div class="row m0 imageRow">' +
                        '<a href="detalle-propiedad.php?dt=' + data[i].Codigo_Inmueble + '">';

                    if (data[i].foto1 == "") {
                        res += '<img class="img-responsive" src="images/no_image.png" alt="" style="width:100%">';
                    } else {
                        res += '<img class="img-responsive" src="' + data[i].foto1 + '" alt="" style="width:100%">';
                    }

                    res += '</a>' +
                        '</div>' +
                        '<div class="row m0 description">' +
                        '<div class="row m0 priceRow">';
                    res += (data[i].Gestion == "Venta" || data[i].Gestion == "Venta ") ? '<div class="price fleft">' + data[i].Venta + '</div>' : '';
                    res += (data[i].Gestion == "Arriendo/venta" || data[i].Gestion == "Arriendo/venta ") ? '<div class="price fleft">' + data[i].Canon + ' / ' + data[i].Venta + '</div>' : '';
                    res += (data[i].Gestion == "Arriendo" || data[i].Gestion == "Arriendo ") ? '<div class="price fleft">' + data[i].Canon + '</div>' : '';

                    res += '</div><a href="detalle-propiedad.php?dt=' + data[i].Codigo_Inmueble + '" class="location_link">' +
                        ' <h4 class="location col-sm-7 col-md-7">' + data[i].Tipo_Inmueble + '.</h4>' +
                        '<h4 class="location col-sm-5 col-md-5">COD: <br>' + data[i].Codigo_Inmueble + '</h4>' +
                        '</a>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                    ++j;
                    if (j > 3) {
                        break;
                    }
                }
                $("#sugerencias").html(res);
            }
        }
    });
});
