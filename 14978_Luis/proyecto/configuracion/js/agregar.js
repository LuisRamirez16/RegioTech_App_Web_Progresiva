function agregar() {
    var accion = 1;
    var nombre = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;
    var contra = document.getElementById('pass').value;

    var datos = new FormData();
    datos.append("nombre", nombre);
    datos.append("correo", correo);
    datos.append("pass", contra);
    datos.append("accion", accion);

    Swal.fire({
        title: 'Atención!',
        text: "¿Deseas registrar a? -> " + nombre,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../../controlador/agregar.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire({
                            title: 'Atención!',
                            text: nombre + " ha sido agregado correctamente",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Continuar',
                        }).then((result) => {
                            location.reload();
                        })
                    }
                }
            })
        }
    })


}

function agregar_producto() {
    var accion = 2;
    var codigo = document.getElementById('codigo').value;
    var nombre = document.getElementById('nombre').value;
    var precio_costo = document.getElementById('precio_costo').value;
    var precio_venta = document.getElementById('precio_venta').value;

    var datos = new FormData();
    datos.append("codigo", codigo);
    datos.append("nombre", nombre);
    datos.append("precio_costo", precio_costo);
    datos.append("precio_venta", precio_venta);
    datos.append("accion", accion);

    Swal.fire({
        title: 'Atención!',
        text: "¿Deseas registrar el producto? -> " + nombre,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../../controlador/agregar.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire({
                            title: 'Atención!',
                            text: nombre + " ha sido agregado correctamente",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Continuar',
                        }).then((result) => {
                            location.reload();
                        })
                    }
                }
            })
        }
    })


}