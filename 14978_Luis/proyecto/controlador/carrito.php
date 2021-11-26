<?php 
session_start();

$mensaje="";

if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){
        case 'agregar':
            if(is_numeric($_POST['id'])){
                $id=($_POST['id']);
                $mensaje.="El id es correcto ".$id."<br/>";
            }else{
                $mensaje.="El id es incorrecto ".$id."<br/>";
            }

            if(is_string($_POST['nombre'])){
                $nombre=($_POST['nombre']);
            }else{ $mensaje.="El nombre es incorrecto "."<br/>";  break;}

            if(is_string($_POST['precio_venta'])){
                $precio_venta=($_POST['precio_venta']);
                $mensaje.="El precio es correcto ".$precio_venta."<br/>";
            }else{ $mensaje.="El precio es incorrecto "."<br/>";  break;}

            if(is_numeric($_POST['cantidad'])){
                $cantidad=($_POST['cantidad']);
            }else{ $mensaje.="La cantidad es incorrecta "."<br/>";  break;}


            //'login' puede cambiar a carrito si no sale
            if(!isset($_SESSION['carrito'])){
                $producto=array(
                    'id'=>$id,
                    'nombre'=>$nombre,
                    'precio_venta'=>$precio_venta,
                    'cantidad'=>$cantidad
                );
                $_SESSION['carrito'][]=$producto;
                $mensaje="El producto se agrego correctamente ";

            }else{
                $idProductos=array_column($_SESSION['carrito'],"id");
                if(in_array($id,$idProductos)){
                    echo "<script>alert('El producto se ha seleccionado');</script>";
                    $mensaje="";
                }else{
                    
                $NumeroProductos=count($_SESSION['carrito']);
                $producto=array(
                    'id'=>$id,
                    'nombre'=>$nombre,
                    'precio_venta'=>$precio_venta,
                    'cantidad'=>$cantidad
                );
                $_SESSION['carrito'][$NumeroProductos]=$producto;
                $mensaje="El producto se agrego correctamente";
                }
            }
            //$mensaje=print_r($_SESSION,true);
            
        break;
        case "eliminar";
        if(is_numeric($_POST['id'])){
            $id=($_POST['id']);
            foreach($_SESSION['carrito'] as $indice=>$producto){
             if($producto['id']==$id){
                unset($_SESSION['carrito'][$indice]);
                echo "<script>alert('Producto borrado');</script>";
             }               

            }
        }else{
            $mensaje.="El id es incorrecto".$id."<br/>";
        }


        break;
    }



}


?>