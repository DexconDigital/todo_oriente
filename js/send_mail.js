
function send_mail() {

    var email = $("#email").val();
    var nombre = $("#nombre").val();
    var telefono = $("#telefono").val();
    var mensaje = $("#mensaje").val();
    $.ajax({
        url: "js/mail.php",
        type: "POST",
        data: {
            email: email,
            nombre: nombre,
            telefono: telefono,
            mensaje: mensaje
        },
        dataType: "html",
        success: function(data) {
            console.log(data);
            if (data == 1) {
                modal = '<div class="modal fade" tabindex="-1" role="dialog" id="modalemail1">' +
                    '<div class="modal-dialog" role="document">' +
                    '<div class="modal-content">' +
                    '<div class="modal-header">' +
                    '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>' +
                    '<h4 class="modal-title">Gracias por contactar a Inmobiliaria Todo Oriente </h4>' +
                    '</div>' +
                    '<div class="modal-body">' +
                    '<p style="color:black">Querido cliente, nos comunicaremos a ' + email + ' para dar pronta respuesta a su inquietud </p>' +
                    '</div>' +
                    '<div class="modal-footer">' +
                    '<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>' +
                    '</div>' +
                    '</div><!-- /.modal-content -->' +
                    '</div><!-- /.modal-dialog -->' +
                    '</div><!-- /.modal -->';
                $("#email").val("");
                $("#nombre").val("");
                $("#telefono").val("");
                $("#mensaje").val("");
                $("body").append(modal);
                $('#modalemail1').modal();
            }
        }
    });
}