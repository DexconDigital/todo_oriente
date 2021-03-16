function paginator(actual) {

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
                    //console.log(data);
                    
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

                        if (data.Inmuebles[pos].Gestion == "Venta") {
                            res += '<div class="saleTag">Venta</div>';
                        }
                        else {
                            res += '<div class="saleTag rentTag">' + data.Inmuebles[pos].Gestion + '</div>';
                        }
                        res += '</a></div>' +
                            '<div class="row m0 description">' +
                            '<div class="row m0 priceRow">';
                        if (data.Inmuebles[pos].Gestion == "Venta") {
                            res += '<div class="price fleft">$ ' + data.Inmuebles[pos].Venta + '</div>';
                        } else {
                            res += '<div class="price fleft">$ ' + data.Inmuebles[pos].Canon + '</div>';
                        }
                        res += '<i class="fa fa-file-text-o"></i>' +
                            '</div>' +
                            '<a href="detalle-propiedad.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="location_link">' +
                            '<h4 class="location">' + data.Inmuebles[pos].Barrio + '</h4>' +
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
                }
                $("#propiedad").html(res)

            }

        });
        validar()
    } else {
        var min = 0, max = 0;
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

                            if (data.Inmuebles[pos].Gestion == "Venta") {
                                res += '<div class="saleTag">Venta</div>';
                            }
                            else {
                                res += '<div class="saleTag rentTag">' + data.Inmuebles[pos].Gestion + '</div>';
                            }
                            res += '</a></div>' +
                                '<div class="row m0 description">' +
                                '<div class="row m0 priceRow">';
                            if (data.Inmuebles[pos].Gestion == "Venta") {
                                res += '<div class="price fleft">$ ' + data.Inmuebles[pos].Venta + '</div>';
                            } else {
                                res += '<div class="price fleft">$ ' + data.Inmuebles[pos].Canon + '</div>';
                            }
                            res += '<i class="fa fa-file-text-o"></i>' +
                                '</div>' +
                                '<a href="detalle-propiedad.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="location_link">' +
                                '<h4 class="location">' + data.Inmuebles[pos].Barrio + '</h4>' +
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
                    validar();
                }

                $("#propiedad").html(res)

            }

        });


    }
}

function validar() {
    console.log(localStorage.getItem("total"))
    if (localStorage.getItem("total") == localStorage.getItem("actual")) {
        console.log(1)
        $("#siguiente").css("display", "none");
    } else {
        console.log(2)
        $("#siguiente").css("display", "inline-flex");
    }

    if (localStorage.getItem("actual") != 1) {
        $("#anterior").css("display", "inline-flex");
    } else {

        $("#anterior").css("display", "none");
    }
}


