<?php
include 'conexion.php';

class pagar{

    private $db;
    private $lista;

public function __construct(){
    $this->db = conexion::conn();
    $this->arraydb = array();
}

public function pagar($ClaveTransaccion,$Fecha,$Nombre,$Total,$estado){
    $resultado = $this->db->query("INSERT INTO tblventas (ClaveTransaccion,Fecha,Nombre,Total,estado)  VALUES ('$ClaveTransaccion',NOW(),'$Nombre','$Total','$estado')");
}
}


?>