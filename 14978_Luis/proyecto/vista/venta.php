<?php session_start(); 
include("../configuracion/extensiones/cabecera.php");
include("../modelo/mostrar_datos.php");
include("../controlador/carrito.php");
$obj = new productos();
$resultado = $obj -> productos();

?>


<br> 
<div class="container"> 
    <center> <div class="alert alert-success">
    <?php echo  $mensaje;?>
    <a href="../mostrarCarrito" class="badge bg-success">Ver carrito</a>
    </div></center>

<div class="cartas">

<?php foreach($resultado as $r){?> 

<div class="carta">
<div class="img-color"><img src="configuracion/images/<?php echo $r['nombre'];?>.png" alt=""></div>
<div class="contenido-c">
<h4><?php echo $r['nombre']; ?></h4>
<p>Precio Venta: $<?php echo $r['precio_venta'];?> </p>

<form action="" method="post">
<input type="hidden" name="id" id="id" value="<?php echo $r['id']; ?>">
<input type="hidden" name="nombre" id="nombre" value="<?php echo $r['nombre']; ?>">
<input type="hidden" name="precio_venta" id="precio_venta" value="<?php echo $r['precio_venta']; ?>">
<input type="number" name="cantidad" id="cantidad" value="<?php echo 1; ?>">

<button class="btn btn-primary" 
name="btnAccion" 
value="agregar" 
type="submit"> 
Agregar al carrito 
</form>


</div>
</div>



<?php }?>

</div>      
      </div>
    </div>
  </div>
  



</body>
</html>