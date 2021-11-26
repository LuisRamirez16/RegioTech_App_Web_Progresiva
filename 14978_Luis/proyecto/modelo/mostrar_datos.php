<?php

include 'conexion.php';

class usuarios{

    private $db; //database
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
     }


     public function usuarios(){
         $resultado = $this->db->query("SELECT * FROM usuarios ORDER BY nombre AND correo");
         while($filas = $resultado->fetch_assoc()){
                $this->lista[] = $filas;
         }
         return $this->lista;
     }
    }
class productos{

        private $db; //database
        private $lista;
    
        public function __construct(){
            $this->db = conexion::conn();
            $this->arraydb = array();
         }

     public function productos(){
        $resultado = $this->db->query("SELECT * FROM productos ORDER BY codigo AND nombre AND precio_costo AND precio_venta");
        while($filas = $resultado->fetch_assoc()){
               $this->lista[] = $filas;
        }
        return $this->lista;
     }

    }


?>