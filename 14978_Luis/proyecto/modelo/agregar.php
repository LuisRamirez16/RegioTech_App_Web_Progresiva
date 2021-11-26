<?php
include 'conexion.php';

class agregar{

    private $db;
    private $lista;

public function __construct(){
    $this->db = conexion::conn();
    $this->arraydb = array();
}

public function agregar_usuario($nombre,$correo,$pass){
    $resultado = $this->db->query("INSERT INTO usuarios (nombre,correo,pass) VALUES ('$nombre','$correo','$pass')");
}

public function agregar_producto($codigo,$nombre,$precio_costo,$precio_venta){
    $resultado = $this->db->query("INSERT INTO productos (codigo,nombre,precio_costo,precio_venta) VALUES ('$codigo','$nombre','$precio_costo','$precio_venta')");
}
}
?>