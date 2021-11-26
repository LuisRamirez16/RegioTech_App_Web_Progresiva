<?php
if($_POST['accion']==1){
    $id = $_POST['id'];

    include("../modelo/eliminar.php");
    $obj = new eliminar();
    $resultado = $obj -> eliminar_usuario($id);
    
    exit(json_encode([
        "status" => "1",
        "id" => $id
    ]));
}

if($_POST['accion']==2){
    $id = $_POST['id'];
    include("../modelo/eliminar.php");
    $obj = new eliminar();
    $resultado = $obj -> eliminar_producto($id);
    
    exit(json_encode([
        "status" => "1",
        "id" => $id
    ]));
    }

    if($_POST['accion']==3){
        $ID = $_POST['ID'];
        include("../modelo/eliminar.php");
        $obj = new eliminar();
        $resultado = $obj -> eliminar_tabla($ID);
        
        exit(json_encode([
            "status" => "1",
            "ID" => $ID
        ]));
        }
?>