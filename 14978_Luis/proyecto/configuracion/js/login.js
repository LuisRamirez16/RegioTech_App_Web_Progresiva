function login() {
    var email = document.getElementById('email').value;
    var pass = document.getElementById('pwd').value;
    var datos = new FormData();
    datos.append("correo", email);
    datos.append("contrasena", pass);
    $.ajax({
        url: "../../controlador/login.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: datos,
        success: function(resp) {
            var respuesta = JSON.parse(resp);
            if (respuesta.status == "1") {
                Swal.fire({
                    title: 'Bienvenido',
                    text: respuesta.nombre,
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Continuar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.replace(respuesta.url)
                    }
                })
            } else {
                Swal.fire(
                    'Error!',
                    'Usuario y/o contraeña incorrectos',
                    'error'
                )
            }
        }

    })
}