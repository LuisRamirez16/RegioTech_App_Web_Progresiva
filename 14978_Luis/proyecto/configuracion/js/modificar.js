function modificar(id, nombre) {
    var accion = 1;
    var datos = new FormData();
    datos.append("accion", accion)
    datos.append("id", id)
    datos.append("nombre", nombre)
    Swal.fire({
        title: 'Atención!',
        text: "Desea modificar el nombre del usuario?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../../controlador/modificar.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire({
                            title: 'Atención!',
                            text: "el nombre de " + nombre + "   ha sido modificado correctamente",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Continuar',
                        }).then((result) => {
                            window.location.reload();
                        })
                    }
                }
            })
        }
    })
}

function modificar_producto(id, nombre, precio_costo, precio_venta) {
    var datos = new FormData();
    var accion = 2;
    datos.append("accion", accion)
    datos.append("id", id)
    datos.append("nombre", nombre)
    datos.append("precio_costo", precio_costo)
    datos.append("precio_venta", precio_venta)
    Swal.fire({
        title: 'Atención!',
        text: "Desea modificar el nombre del producto?" + accion,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../../controlador/modificar.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire({
                            title: 'Atención!',
                            text: "el producto " + nombre + " se ha sido modificado correctamente",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Continuar',
                        }).then((result) => {
                            window.location.reload();
                        })
                    }
                }
            })
        }
    })
}