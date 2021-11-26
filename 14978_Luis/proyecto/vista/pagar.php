<?php session_start(); 
include("../configuracion/extensiones/cabecera.php");
include("../modelo/archivo.php");
include("../controlador/carrito.php");


?>

<?php 
if($_POST){

    $total=0;
    $SID=session_id();
    $Fecha="2021-07-05 04:18:28";
    $Nombre=$_POST['Nombre'];
    $estado="Venta realizada con exito";
    

    foreach($_SESSION['carrito'] as $indice=>$producto){
        
        $total=$total+($producto['precio_venta']*$producto['cantidad']);
    }
    include("../modelo/pagar.php");
    $obj=new pagar();
    $resultado=$obj->pagar($SID,$Fecha,$Nombre,$total,$estado);
   
}

session_destroy();
?>
<div class="jumbotron" align="center">
<h1 class="display-4">Finalizar Venta</h1>
<hr class="my-4">
<p class="lead">Favor de cobrar la cantidad de:
<h4><?php echo number_format($total,2); ?></h4></p>
<a class="btn btn-success" href="venta">Finalizar Venta</a>
</div>



</body>
</html>