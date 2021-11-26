<?php
if($_POST['accion']==1){
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];

include("../modelo/agregar.php");
$obj = new agregar();
$resultado = $obj->agregar_usuario($nombre,$correo,$pass);


exit(json_encode([
    "status" => "1"
]));
}

if($_POST['accion']==2){
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $precio_costo = $_POST['precio_costo'];
    $precio_venta = $_POST['precio_venta'];
    include("../modelo/agregar.php");
    $obj = new agregar();
    $resultado = $obj -> agregar_producto($codigo,$nombre,$precio_costo,$precio_venta);
    
    
    exit(json_encode([
        "status" => "1"
    ]));
    }
?>