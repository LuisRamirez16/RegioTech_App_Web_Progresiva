function eliminar(id, nombre) {
    var accion = 1;
    var datos = new FormData();
    datos.append("accion", accion)
    datos.append("id", id)
    Swal.fire({
        title: 'Atención!',
        text: "Desea eliminar el usuario -> " + nombre,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../../controlador/eliminar.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire({
                            title: 'Perfecto!',
                            text: "el usuario de " + nombre + " ha sido eliminado correctamente" + respuesta.id,
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

function eliminar_producto(id, nombre) {
    var accion = 2;
    var datos = new FormData();
    datos.append("id", id)
    datos.append("accion", accion)
    Swal.fire({
        title: 'Atención!',
        text: "Desea eliminar el producto -> " + nombre,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../../controlador/eliminar.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire({
                            title: 'Perfecto!',
                            text: "el usuario de " + nombre + " ha sido eliminado correctamente" + respuesta.id,
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

function eliminar_tabla(ID) {
    var accion = 3;
    var datos = new FormData();
    datos.append("ID", ID)
    datos.append("accion", accion)
    Swal.fire({
        title: 'Atención!',
        text: "Desea limpiar el historial?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../../controlador/eliminar.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire({
                            title: 'Perfecto!',
                            text: "El historial se ha borrado correctamente" + respuesta.ID,
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