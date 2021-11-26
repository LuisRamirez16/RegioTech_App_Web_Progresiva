<?php

include 'conexion.php';

class modificar{

    private $db; //database
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
     }


     public function modificar_usuario($id,$nombre){
         $resultado = $this->db->query("UPDATE usuarios SET nombre = '$nombre' WHERE id = '$id'");
     }
     public function modificar_p($id,$nombre,$precio_costo,$precio_venta){
        $resultado = $this->db->query("UPDATE productos SET nombre = '$nombre' , precio_costo = '$precio_costo' , precio_venta = '$precio_venta'  WHERE id = '$id'");
    }

    
    }

     