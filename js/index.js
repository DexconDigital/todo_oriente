setTimeout(function () {
    $.ajax({
        url: 'http://www.simi-api.com/ApiSimiweb/response/v21/filtroInmueble/limite/0/total/3/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0',
        type: 'GET',
        cache: true,
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:XAZ2FaGk4qDZN5IiCFOVfMUKnptf3h2Mhhw2yfEm-874'));
        },
        'dataType': "json",
        success: function (data) {


            $("#property").empty();
            var res = "";
            if (data == "Sin resultados") {
                res += '<h1 style="color:white"> No hay Inmuebles destacados </h1>';
                $("#property").append(res);
                return;

            } else {
                for (var i = 0; i < data.totalPagina; i++) {
                    res += '<div class="col-sm-6 col-xs-12 col-md-4 listing_grid">' +
                        '<div class="info_content row">' +
                        '<div class="row m0 imageRow">' +
                        '<a href="detalle-propiedad.php?dt=' + data[i].Codigo_Inmueble + '" >';
                    if (data[i].foto1 == "") {
                        res += '<img class="img-responsive" src="images/no_image.png" alt="" style="width:100%">';
                    } else {
                        res += '<img class="img-responsive" src="' + data[i].foto1 + '" alt="" style="width:100%">';
                    }
                    var Gestion = data[i].Gestion;
                    var dato = data[i];

                    res += (Gestion == "Venta" || Gestion == "Venta ") ? '<div class="saleTag">' + Gestion + '</div>' : '';
                    res += (Gestion == "Arriendo/venta" || Gestion == "Arriendo/venta ") ? '<div class="saleTag arriendo_venta">' + Gestion + '</div>' : '';
                    res += (Gestion == "Arriendo" || Gestion == "Arriendo ") ? '<div class="saleTag rentTag">' + Gestion + '</div>' : '';

                    res += '</a></div>' +
                        '<div class="row m0 description">' +
                        '<div class="row m0 priceRow">';

                    res += (Gestion == "Venta" || Gestion == "Venta ") ? '<div class="price fleft">' + dato.Venta + '</div>' : '';
                    res += (Gestion == "Arriendo/venta" || Gestion == "Arriendo/venta ") ? '<div class="price fleft">' + dato.Canon + ' / ' + dato.Venta + '</div>' : '';
                    res += (Gestion == "Arriendo" || Gestion == "Arriendo ") ? '<div class="price fleft">' + dato.Canon + '</div>' : '';

                    res += '<i class="fa fa-file-text-o"></i>' +
                        '</div>' +
                        '<a href="detalle-propiedad.php?dt=' + data[i].Codigo_Inmueble + '" class="location_link">' +
                        '<h4 class="location">' + data[i].Barrio + '</h4>' +
                        '<h4 class="location" style="margin-left: 60%;margin-top: -12%;">' + 'COD: ' + data[i].Codigo_Inmueble + '</h4>' +
                        '<h4 class="location">' + data[i].Tipo_Inmueble + '</h4>' +
                        '</a>' +
                        '<a href="detalle-propiedad.php?dt=' + data[i].Codigo_Inmueble + '" class="specify_btn"><i  class="fa fa-arrows-alt"></i>' + data[i].AreaConstruida + 'm<sup>2</sup></a>' +
                        '<a href="detalle-propiedad.php?dt=' + data[i].Codigo_Inmueble + '" class="specify_btn"><i  class="fa fa-bed"></i>' + data[i].Alcobas + '</a>' +
                        '<a href="detalle-propiedad.php?dt=' + data[i].Codigo_Inmueble + '" class="specify_btn"><i  class="fa fa-bath"></i>' + data[i].banios + '</a>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                }
            }
            $("#property").append(res);
        }
    });
});
