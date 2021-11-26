<?php session_start(); 
include("../configuracion/extensiones/cabecera.php");
include("../modelo/mostrar_datos.php");
include("../controlador/carrito.php");
$obj = new productos();
$resultado = $obj -> productos();
?>
<br>
<center><h3>Lista de carrito<h3></center>

<?php if(!empty($_SESSION['carrito'])){

?>

<div class="container">
 <table class="table table-primary table-hover table-bordered">
     <tbody>
         <tr>
             <th width="25%">Producto</th>
             <th width="25%" class="text-center">Cantidad</th>
             <th width="25%" class="text-center">Precio</th>
             <th width="20%" class="text-center">Total</th>
             <th width="5%">--</th>
         </tr>
        <?php $total=0; ?>
        <?php foreach($_SESSION['carrito'] as $indice=>$producto){ ?>
         <tr>
             <td width="25%"><?php echo $producto['nombre'] ?></td>
             <td width="25%" class="text-center"><?php echo $producto['cantidad'] ?></td>
             <td width="25%" class="text-center"><?php echo $producto['precio_venta'] ?></td>
             <td width="20%" class="text-center"><?php echo number_format($producto['precio_venta']*$producto['cantidad'],2); ?></td>
             <td width="5%">
             
             <form action="" method="post">
            
            <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">

             <button class="btn btn-danger"
             type="submit" name="btnAccion" value="eliminar">Eliminar</button></td>
             </form>
             

         </tr>
         <?php $total=$total+($producto['precio_venta']*$producto['cantidad']); ?>
            <?php }?>
        <tr>
            <td colspan="3" align="right"><h3>Total</h3></td>
            <td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
            <td></td>
        </tr>

            <tr>
                <td colspan="5">
                <form action="../pagar" method="post">
                 <div class="alert alert-success">
                    
                    <div class="form-group">
                        <label for="my-input">Nombre del cliente</label>
                        <input id="Nombre" name="Nombre" class="form-control" type="text" placeholder="Ingresa el nombre del cliente porfavor" required>
                    </div>
                 </div>
                 <button class="btn btn-primary btn-lg btn-block" type="submit" value="proceder" name="btnAccion">Proceder a pagar >></button>
                </form>
                 </td>
            </tr>
     </tbody>
 </table>
<?php }else{ ?>
    <div class="alert alert-success">
    No hay productos en el carrito

 </div>
 <?php }?>
</body>
</html>