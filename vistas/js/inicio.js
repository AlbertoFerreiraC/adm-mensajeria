$(document).ready(function () {

    cargarResumen();
    cargarUltimasConversaciones();

});

function cargarResumen() {

    $.ajax({
        url: "../api-mensajeria/historial_conversaciones/funResumen.php",
        method: "GET",
        dataType: "json",
        success: function (res) {

            $("#kpiTotal").text(res.total_conversaciones);
            $("#kpiContactos").text(res.total_contactos);
            $("#kpiHoy").text(res.conversaciones_hoy);

        }
    });

}

function cargarUltimasConversaciones() {

    $.ajax({
        url: "../api-mensajeria/historial_conversaciones/funListar.php",
        method: "GET",
        dataType: "json",
        success: function (response) {

            let filas = "";
            let limite = 10;

            for (let i = 0; i < response.length && i < limite; i++) {

                filas += `
                    <tr>
                        <td>${response[i].fecha}</td>
                        <td>${response[i].contacto}</td>
                        <td>${response[i].numero_o_id}</td>
                        <td>${response[i].mensaje_entrada}</td>
                        <td>${response[i].mensaje_respuesta}</td>
                        <td>${response[i].tipo_secuencia}</td>
                    </tr>
                `;
            }

            $("#tablaConversaciones tbody").html(filas);
        }
    });

}