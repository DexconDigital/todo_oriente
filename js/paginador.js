function paginator(actual) {
    $("#propiedad").html('<div class="container"><h3>Cargando...</h3></div>');
    let position = 0;
    if (position != 0) {
        position = localStorage.getItem("total");
    }
    var count = localStorage.getItem("count");

    if (actual == 'ant') {
        count--;
        localStorage.setItem("count", count);
        imprimir(count);
    }
    if (actual == 'sig') {
        count++;
        localStorage.setItem("count", count);
        imprimir(count);
    }
}

function imprimir(count) {
    localStorage.setItem("count", count);


    if (localStorage.getItem("gs") == 0 && localStorage.getItem("ci") == 0 && localStorage.getItem("ti") == 0 && localStorage.getItem("zo") == 0 && localStorage.getItem("pre") == 0) {
        $.ajax({
            url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total/12/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/fecha/order/desc/banios/0/alcobas/0/garajes/0',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:XAZ2FaGk4qDZN5IiCFOVfMUKnptf3h2Mhhw2yfEm-874'));
            },
            'dataType': "json",
            success: function (data) {
                //console.log(data.Inmuebles)

                if (data == "Sin resultados") {
                    res += '<div class="alert alert-danger"><h4>No hay Inmuebles </h4></div>';
                    $("#propiedad").append(res);
                    return;

                } else {


                    localStorage.setItem("total", data.datosGrales.fin - 1);

                    //ordenar por precio
                    data.Inmuebles.sort(function (a, b) {
                        return parseFloat(a.valorFiltro.replace(/[^\d\.\-]/g, "")) - parseFloat(b.valorFiltro.replace(/[^\d\.\-]/g, ""));
                    });

                    var res = " ";

                    for (var pos = 0; pos < data.Inmuebles.length; pos++) {
                        res += '<div class="col-sm-6 col-xs-12 col-md-4 listing_grid">' +
                            '<div class="info_content row">' +
                            '<div class="row m0 imageRow">' +
                            '<a href="detalle-propiedad.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" >';
                        if (data.Inmuebles[pos].foto1 == "") {
                            res += '<img class="img-responsive" src="images/no_image.png" alt="" style="width:100%">';
                        } else {
                            res += '<img class="img-responsive" src="' + data.Inmuebles[pos].foto1 + '" alt="" style="width:100%">';
                        }

                        var Gestion = data.Inmuebles[pos].Gestion;
                        var dato = data.Inmuebles[pos];
                        
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
                            '<a href="detalle-propiedad.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="location_link">' +
                            '<h4 class="location h-5">' + data.Inmuebles[pos].Barrio + '</h4>' +
                            '<h4 class="location" style="margin-left: 60%;margin-top: -12%;">' + 'COD: <br/>' + data.Inmuebles[pos].Codigo_Inmueble + '</h4>' +
                            '<h4 class="location">' + data.Inmuebles[pos].Tipo_Inmueble + '</h4>' +
                            '</a>' +
                            '<a href="detalle-propiedad.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="specify_btn"><i  class="fa fa-arrows-alt"></i>' + data.Inmuebles[pos].AreaConstruida + 'm<sup>2</sup></a>' +
                            '<a href="detalle-propiedad.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="specify_btn"><i  class="fa fa-bed"></i>' + data.Inmuebles[pos].Alcobas + '</a>' +
                            '<a href="detalle-propiedad.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="specify_btn"><i  class="fa fa-bath"></i>' + data.Inmuebles[pos].banios + '</a>' +
                            '</div>' +
                            '</div>' +
                            '</div>';

                    }
                    $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de " + localStorage.getItem("total"));
                    var anterior = $("#anterior");
                    var siguiente = $("#siguiente");
                    (data.datosGrales.pagina_actual <= 1) ? anterior.css("display", "none"): anterior.css("display", "inline-flex");
                    (data.datosGrales.pagina_actual == localStorage.getItem("total")) ? siguiente.css("display", "none"): siguiente.css("display", "inline-flex");
                }
                $("#propiedad").html(res)
            }

        });

    } else {
        var min = 0,
            max = 0;
        if (localStorage.getItem("pre") == 0) {
            min = 0;
            max = 0;
        } else if (localStorage.getItem("pre") == 1) {
            min = 500000;
            max = 1000000;
        } else if (localStorage.getItem("pre") == 2) {
            min = 1000001;
            max = 5000000;
        } else if (localStorage.getItem("pre") == 3) {
            min = 5000001;
            max = 8000000;
        } else if (localStorage.getItem("pre") == 4) {
            min = 8000001;
            max = 30000000;
        } else if (localStorage.getItem("pre") == 5) {
            min = 30000001;
            max = 50000000;
        } else if (localStorage.getItem("pre") == 6) {
            min = 50000001;
            max = 300000000;
        } else if (localStorage.getItem("pre") == 7) {
            min = 300000001;
            max = 600000000;
        } else if (localStorage.getItem("pre") == 8) {
            min = 600000001;
            max = 1000000000;
        } else if (localStorage.getItem("pre") == 9) {
            min = 1000000001;
            max = 2000000000;
        } else if (localStorage.getItem("pre") == 10) {
            min = 2000000001;
            max = 12000000000;
        }

        $.ajax({
            url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total/12/departamento/0/ciudad/' + localStorage.getItem("ci") + '/zona/0/barrio/' + localStorage.getItem("zo") + '/tipoInm/' + localStorage.getItem("ti") + '/tipOper/' + localStorage.getItem("gs") + '/areamin/0/areamax/0/valmin/' + min + '/valmax/' + max + '/campo/0/order/0/banios/0/alcobas/0/garajes/0',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:XAZ2FaGk4qDZN5IiCFOVfMUKnptf3h2Mhhw2yfEm-874'));
            },
            'dataType': "json",
            success: function (data) {
                var res = " ";
                if (data == "Sin resultados") {
                    res += '<div class="alert alert-danger"><h4>No hay Inmuebles </h4></div>';
                    $("#siguiente").css("display", "none");
                    $("#anterior").css("display", "none");
                    $("#propiedad").append(res);
                    return;

                } else {
                    console.log(data);
                    //ordenar por precio
                    data.Inmuebles.sort(function (a, b) {
                        return parseFloat(a.valorFiltro.replace(/[^\d\.\-]/g, "")) - parseFloat(b.valorFiltro.replace(/[^\d\.\-]/g, ""));
                    });
                    localStorage.setItem("total", data.datosGrales.fin);
                    localStorage.setItem("inicio", data.datosGrales.inicio);
                    localStorage.setItem("actual", data.datosGrales.pagina_actual);
                    res = '<div class="total-inm" ><h4>Se han encontrado ' + data.datosGrales.totalInmuebles + ' inmuebles</h4></div>';
                    for (var pos = 0; pos < (data.Inmuebles.length); pos++) {
                        if (data.Inmuebles[pos].Codigo_Inmueble != undefined) {
                            res += '<div class="col-sm-6 col-xs-12 col-md-4 listing_grid">' +
                                '<div class="info_content row">' +
                                '<div class="row m0 imageRow">' +
                                '<a href="detalle-propiedad.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" >';
                            if (data.Inmuebles[pos].foto1 == "") {
                                res += '<img class="img-responsive" src="images/no_image.png" alt="" style="width:100%">';
                            } else {
                                res += '<img class="img-responsive" src="' + data.Inmuebles[pos].foto1 + '" alt="" style="width:100%">';
                            }

                            var Gestion = data.Inmuebles[pos].Gestion;
                            var dato = data.Inmuebles[pos];

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
                                '<a href="detalle-propiedad.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="location_link">' +
                                '<h4 class="location h-5">' + data.Inmuebles[pos].Barrio + '</h4>' +
                                '<h4 class="location" style="margin-left: 60%;margin-top: -12%;">' + 'COD: <br/>' + data.Inmuebles[pos].Codigo_Inmueble + '</h4>' +
                                '<h4 class="location">' + data.Inmuebles[pos].Tipo_Inmueble + '</h4>' +
                                '</a>' +
                                '<a href="detalle-propiedad.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="specify_btn"><i  class="fa fa-arrows-alt"></i>' + data.Inmuebles[pos].AreaConstruida + 'm<sup>2</sup></a>' +
                                '<a href="detalle-propiedad.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="specify_btn"><i  class="fa fa-bed"></i>' + data.Inmuebles[pos].Alcobas + '</a>' +
                                '<a href="detalle-propiedad.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="specify_btn"><i  class="fa fa-bath"></i>' + data.Inmuebles[pos].banios + '</a>' +
                                '</div>' +
                                '</div>' +
                                '</div>';

                        }
                    }
                    if (localStorage.getItem("total") == 0) {
                        $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de 1")
                    } else {
                        $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de " + localStorage.getItem("total"))
                    }
                    var anterior = $("#anterior");
                    var siguiente = $("#siguiente");
                    (data.datosGrales.pagina_actual <= 1) ? anterior.css("display", "none"): anterior.css("display", "inline-flex");
                    (data.datosGrales.pagina_actual == localStorage.getItem("total")) ? siguiente.css("display", "none"): siguiente.css("display", "inline-flex");
                }
                $("#propiedad").html(res)
            }
        });
    }
}
