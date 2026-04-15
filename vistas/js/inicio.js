$(document).ready(function () {

    $("#filtroEstado").val("pendiente");
    cargarPedidos();

    $("#btnFiltrar").click(function () {
        cargarPedidos();
    });

    $("#btnGuardarEstado").click(function () {
        actualizarEstado();
    });

});

function cargarPedidos() {

    let estado = $("#filtroEstado").val();
    let desde = $("#fechaDesde").val();
    let hasta = $("#fechaHasta").val();

    $.ajax({
        url: "../api-mensajeria/historial_pedidos/funListar.php",
        method: "POST",
        data: JSON.stringify({
            estado: estado,
            desde: desde,
            hasta: hasta
        }),
        contentType: "application/json",
        dataType: "json",
        success: function (response) {

            let filas = "";

            let total = 0;
            let pendiente = 0;
            let concretado = 0;
            let rechazado = 0;

            response.forEach(function (item) {

                total++;

                if (item.estado === "pendiente") pendiente++;
                if (item.estado === "concretado") concretado++;
                if (item.estado === "rechazado") rechazado++;

                let estadoBadge = "";

                if (item.estado === "pendiente") {
                    estadoBadge = '<span class="label label-warning">Pendiente</span>';
                } else if (item.estado === "concretado") {
                    estadoBadge = '<span class="label label-success">Concretado</span>';
                } else {
                    estadoBadge = '<span class="label label-danger">Rechazado</span>';
                }

                let botonAccion = "";


                if (item.estado === "pendiente") {
                    botonAccion = `
                <button class="btn btn-primary btn-sm btnCambiarEstado"
                    data-id="${item.idhistorial_pedidos}">
                    Procesar
                </button>
                `;
                }

                filas += `
                    <tr>
                        <td>${item.fecha_levantamiento}</td>
                        <td>${item.fecha_procesamiento || '-'}</td>
                        <td>${item.contacto_nro}</td>
                        <td>${item.contacto_desripcion}</td>
                        <td>${item.descripcion_producto}</td>
                        <td>Gs. ${parseFloat(item.precio_producto).toLocaleString()}</td>
                        <td>${estadoBadge}</td>
                        <td>${(estado === "concretado" || estado === "rechazado") ? "" : botonAccion}</td>
                        
                    </tr>
                `;
            });

            $("#tablaPedidos tbody").html(filas);

            if (estado === "concretado" || estado === "rechazado") {
                $("#tablaPedidos th:last-child").hide();
            } else {
                $("#tablaPedidos th:last-child").show();
            }

            $("#kpiTotal").text(total);
            $("#kpiPendiente").text(pendiente);
            $("#kpiConcretado").text(concretado);
            $("#kpiNoConcretado").text(rechazado);

            $(".btnCambiarEstado").click(function () {

                let id = $(this).data("id");

                $("#idPedido").val(id);
                $("#modalEstado").modal("show");

            });

        },
        error: function () {
            swal("Error", "No se pudieron cargar los datos", "error");
        }
    });

}

function actualizarEstado() {

    let id = $("#idPedido").val();
    let estado = $("#nuevoEstado").val();
    let observacion = $("#observacion").val();

    $.ajax({
        url: "../api-mensajeria/historial_pedidos/funActualizarEstado.php",
        method: "POST",
        data: JSON.stringify({
            id: id,
            estado: estado,
            observacion: observacion
        }),
        contentType: "application/json",
        dataType: "json",
        success: function (res) {

            if (res.mensaje === "ok") {

                swal("Correcto", "Estado actualizado correctamente", "success")
                    .then(() => {

                        $("#modalEstado").modal("hide");
                        $("#observacion").val("");
                        cargarPedidos();

                    });

            } else {
                swal("Error", "No se pudo actualizar", "error");
            }

        },
        error: function () {
            swal("Error", "Error en el servidor", "error");
        }
    });

}