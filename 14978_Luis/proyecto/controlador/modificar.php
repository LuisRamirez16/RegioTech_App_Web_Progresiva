<?php
if($_POST['accion'] == 1){
$id = $_POST['id'];
$nombre = $_POST['nombre'];
include("../modelo/modificar.php");
$obj = new modificar();
$resultado = $obj -> modificar_usuario($id,$nombre);

exit(json_encode([
    "status" => "1"
]));
}

if($_POST['accion'] == 2){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio_costo = $_POST['precio_costo'];
    $precio_venta = $_POST['precio_venta'];
    include("../modelo/modificar.php");
    $obj = new modificar();
    $resultado = $obj -> modificar_p($id,$nombre,$precio_costo,$precio_venta);
    
    exit(json_encode([
        "status" => "1"
    ]));
    
}

?>