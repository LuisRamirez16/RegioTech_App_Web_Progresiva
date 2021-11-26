<?php

include 'conexion.php';

class eliminar{

    private $db; //database
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
     }


     public function eliminar_usuario($id){
         $resultado = $this->db->query("DELETE FROM usuarios WHERE id = '$id'");
     }
     public function eliminar_producto($id){
        $resultado = $this->db->query("DELETE FROM productos WHERE id = '$id'");
    }
    public function eliminar_tabla($ID){
        $resultado = $this->db->query("TRUNCATE TABLE tblventas");
    }
}

?>