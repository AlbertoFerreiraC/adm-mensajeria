$(document).ready(function () {

    $("#ingresarLogin").click(function () {

        if ($("#codigoLogin").val() == "" || $("#passLogin").val() == "") {

            swal({
                type: "warning",
                title: "Complete todos los campos",
                showConfirmButton: true,
                confirmButtonText: "Aceptar"
            });

            return;
        }

        var encodedString = btoa($("#passLogin").val());

        var http = new XMLHttpRequest();
        var url = '../api-mensajeria/sesiones/funLogin.php';

        var params = {
            "usuario": $("#codigoLogin").val(),
            "pass": encodedString
        };

        http.responseType = 'json';
        http.open('POST', url, true);
        http.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        http.send(JSON.stringify(params));

        http.onreadystatechange = function () {

            if (http.readyState == 4 && http.status == 200) {

                var jsonResponse = http.response;

                // SOLO lo que existe en tu tabla
                cargaVariableGobal(
                    jsonResponse["idusuario"],
                    jsonResponse["nombre"]
                );

                swal({
                    type: "success",
                    title: "Bienvenido: " + jsonResponse["nombre"],
                    showConfirmButton: true,
                    confirmButtonText: "Aceptar"
                }).then((value) => {

                    location.href = "inicio";

                });

            }

            if (http.readyState == 4 && http.status == 401) {

                swal({
                    type: "error",
                    title: "Acceso inválido, verifique sus datos",
                    showConfirmButton: true,
                    confirmButtonText: "Aceptar"
                });

            }

        }

        http.onerror = function (err) {
            console.log("Error de conexión:", err);
        }

    });

});


function cargaVariableGobal(idusuario, nombre) {

    var http = new XMLHttpRequest();

    var url = '../adm-mensajeria/variableGlobal.php'
        + '?idusuario=' + idusuario
        + "&nombre=" + nombre
        + "&iniciarSesion=ok";

    http.open('GET', url, true);
    http.send();

}