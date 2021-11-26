<?php
class conexion{

public function conn(){
            $enlace = mysqli_connect("localhost", "root", "root","proyecto");
            $enlace -> set_charset("utf8");
            return $enlace;
}   
}

?>