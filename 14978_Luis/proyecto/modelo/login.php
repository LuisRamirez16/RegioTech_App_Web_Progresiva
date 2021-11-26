<?php

include 'conexion.php';

class login{

    private $db; //database
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
     }


     public function inicio_sesion($correo,$contrasena){
         $resultado = $this->db->query("SELECT * FROM usuarios WHERE correo='$correo' AND pass='$contrasena'");
         while($filas = $resultado->fetch_assoc()){
                $this->lista[] = $filas;
         }
         return $this->lista;
     }
}

?>