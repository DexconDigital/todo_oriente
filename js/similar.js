setTimeout(function() {
    $.ajax({
        url: 'http://www.simi-api.com/ApiSimiweb/response/v21/filtroInmueble/limite/0/total/100/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0',
        type: 'GET',
        cache: true,
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:XAZ2FaGk4qDZN5IiCFOVfMUKnptf3h2Mhhw2yfEm-874'));
        },
        'dataType': "json",
        success: function(data) {
            var res = "";
            var nInmb = 0;
            var j = 0;
            for (var i = 0; i < data.totalInmuebles; i++) {
                if (data[i].Codigo_Inmueble != localStorage.codigo) {
                    if (data[i].Gestion == localStorage.gestion) {
                        res += '<div class="media">' +
                            '<div class="media-left">' +
                            '<a href="detalle-propiedad.php?dt=' + data[i].Codigo_Inmueble + '">';
                         if(data[i].foto1 ==""){
                            res+='<img class="media-object img-responsive" src="images/no_image.png" alt="" style="width: 100%;height:40px">';    
                        }else{
                            res+='<img class="media-object img-responsive" src="' + data[i].foto1 + '" alt="" style="width: 100%;height:40px">';
                        }
                              res+='</a>' +
                            '</div>' +
                            '<div class="media-body media-middle">' +
                            '<a href="detalle-propiedad.php?dt=' + data[i].Codigo_Inmueble + '">' +
                            '<h5 class="blogTitle">' + data[i].Codigo_Inmueble + '</h5>' +
                            '</a>' +
                            '</div>' +
                            '</div>';
                            j++;
                    } else {
                        nInmb++;
                    }
                    if(j > 9){
                        break;
                    }
                }
            }

            if(nInmb == 0){

                res += '<div class="media">' +
                '<div class="media-left">' +
                '</div>' +
                '<div class="media-body media-middle">' +
                '<h5 class="blogTitle">No hay propiedades similares</h5>' +
                '</div>' +
                '</div>';
                $(".similarListing").append(res);
                return;
            }
            $(".similarListing").append(res);

        }

    });
});