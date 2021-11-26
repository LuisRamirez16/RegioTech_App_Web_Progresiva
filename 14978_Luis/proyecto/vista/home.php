<?php
session_start();
include("../configuracion/extensiones/cabecera.php");
include ("../modelo/mostrar_datos.php");
$obj = new usuarios();
$resultado = $obj -> usuarios();
?>
<center><h2>Lista de personal</h2></center>
<br>
    <div class="container">
        <table class="table table-primary table-hover table-bordered ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>correo</th>
                    <th>--</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultado as $r){ ?>
                <tr>
                    <td> <?php echo $r['id'] ?></td>
                    <td><?php echo $r['nombre'] ?></td>
                    <td><?php echo $r['correo'] ?></td>
                    <td>
                        <button class="btn btn-danger" onclick="eliminar('<?php echo $r['id'] ?>','<?php echo $r['nombre'] ?>')">Eliminar</button>
                    </td>
                </tr>


                <!-- The Modal -->
                <div class="modal fade" id="modal<?php echo $r['id'] ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Modificar nombre</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nombre">Usuario a Modificar:</label>
                                    <input type="text" class="form-control" value="<?php echo $r['nombre'] ?>" id="nombre<?php echo $r['id'] ?>">
                                    <input type="hidden" name="" id="id_nombre_<?php echo $r['id'] ?>" value="<?php echo $r['id'] ?>" >

                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button onclick="modificar(document.getElementById('id_nombre_<?php echo $r['id'] ?>').value,document.getElementById('nombre<?php echo $r['id'] ?>').value)" type="button" class="btn btn-primary" >Modificar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
    </div>
    <?php } ?>
    </tbody>
    </table>
    </div>



  <!-- The Modal -->
  <div class="modal fade" id="add_usuario">
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
        <label for="agregar_nombre">Nombre:</label>
        <input  placeholder="Ingresar Nuevo Usuario" type="text" name="" id="nombre" class="form-control" >
        <label for="agregar_nombre">Correo:</label>
        <input  placeholder="Ingresar Nuevo Correo" type="email" name="" id="correo" class="form-control" >
        <label for="agregar_nombre">Contraseña:</label>
        <input  placeholder="Ingresar Nuevo Contraseña" type="text" name="" id="pass" class="form-control" >
        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <button onclick="agregar()" type="button" class="btn btn-primary" >Agregar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

    <center><button class="btn btn-danger" onclick="cerrar()" >Cerrar sesión</button>
    <button class="btn btn-primary"  data-toggle="modal" data-target="#add_usuario" >Añadir trabajador</button><br><br></center>





    <script src="configuracion/js/cerrar_sesion.js"></script>
    <script src="configuracion/js/eliminar.js"></script>
    <script src="configuracion/js/modificar.js"></script>
    <script src="configuracion/js/agregar.js"></script>

    </body>
</html>