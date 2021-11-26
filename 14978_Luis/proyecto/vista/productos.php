<?php session_start(); 
include("../configuracion/extensiones/cabecera.php");
include("../modelo/mostrar_datos.php");
$obj = new productos();
$resultado = $obj -> productos();

?>


<div class="container"><br><br> 
    <center><button class="btn btn-primary"  data-toggle="modal" data-target="#add_producto">Añadir Producto</button><br><br></center>
<div class="cartas">

<?php foreach($resultado as $r){?> 

<div class="carta">
<div class="img-color"><img src="configuracion/images/<?php echo $r['nombre'];?>.png" alt=""></div>
<div class="contenido-c">
<h4><?php echo $r['nombre']; ?></h4>
<p>Precio Costo: $<?php echo $r['precio_costo'];?> </p>
<p>Precio Venta: $<?php echo $r['precio_venta'];?> </p>
<p>
<button class="btn btn-danger" onclick="eliminar_producto('<?php echo $r['id'] ?>','<?php echo $r['nombre'] ?>')">Eliminar</button>
<button class="btn btn-info" data-toggle="modal" data-target="#modal<?php echo $r['id'];?>">Modificar</button>
</p>

</div>
</div>
<div class="modal" id="modal<?php echo $r['id'];?>">
      <div class="modal-dialog">
      <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Actualizar</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

       <!-- Modal body -->
                            <div class="modal-body">
                            <div class="form-group">
                            <label for="nombre">Producto a modificar:</label>
                            <input type="text" class="form-control" value="<?php echo $r['nombre']; ?>" id="nombre_<?php echo $r['nombre']; ?>">
                            <label for="precio_costo">Precio Costo:</label>
                            <input type="text" class="form-control" value="<?php echo $r['precio_costo']; ?>" id="precio_costo_<?php echo $r['precio_costo']; ?>">
                            <label for="precio_venta">Precio Venta:</label>
                            <input type="text" class="form-control" value="<?php echo $r['precio_venta']; ?>" id="precio_venta_<?php echo $r['precio_venta']; ?>">
                            <input type="hidden" value="<?php echo $r['id']; ?>" id="id_<?php echo $r['id']; ?>">
                            </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                            <button onclick="modificar_producto(document.getElementById('id_<?php echo $r['id'] ?>').value,document.getElementById('nombre_<?php echo $r['nombre'] ?>').value,document.getElementById('precio_costo_<?php echo $r['precio_costo'] ?>').value,document.getElementById('precio_venta_<?php echo $r['precio_venta'] ?>').value)" type="button" class="btn btn-primary" >Modificar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

    </div>
  </div>
</div>


<?php }?>

</div>
</div>
  <!-- The Modal -->
  <div class="modal fade" id="add_producto">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">AGREGAR</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="form-group">
        <label for="codigo">Codigo:</label>
        <input  placeholder="Ingresar Codigo" type="text" name="" id="codigo" class="form-control" >

        <label for="nombre">Nombre:</label>
        <input  placeholder="Ingresar nombre del Producto" type="text" name="" id="nombre" class="form-control" >
        
        <label for="precio_costo">Precio Costo:</label>
        <input  placeholder="Ingresar el Precio Costo" type="text" name="" id="precio_costo" class="form-control" >
        
        <label for="precio_venta">Precio Venta:</label>
        <input  placeholder="Ingresar el Precio de Venta" type="text" name="" id="precio_venta" class="form-control" >
        

        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <button onclick="agregar_producto()" type="button" class="btn btn-primary" >Agregar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
  


<script src="configuracion/js/cerrar_sesion.js"></script>
<script src="configuracion/js/eliminar.js"></script>
<script src="configuracion/js/modificar.js"></script>
<script src="configuracion/js/agregar.js"></script>
</body>
</html>