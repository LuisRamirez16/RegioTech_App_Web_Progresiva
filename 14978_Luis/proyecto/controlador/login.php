<?php
session_start();
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];


include("../modelo/login.php");
$obj = new Login();
$resultado = $obj -> inicio_sesion($correo,$contrasena);

if(empty($resultado)){
    exit(json_encode([
        "status" => "2"
    ]));
}else{

    foreach($resultado as $r){
            $nombre = $r['nombre'];
    }

    $_SESSION['login'] = "ok";
    $_SESSION['nombre'] = $nombre;

    exit(json_encode([
        "status" => "1",
        "nombre" => $nombre,
        "url" => "venta"
    ]));
}






?>