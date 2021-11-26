<?php
$conexion=mysqli_connect('localhost','root','root','proyecto');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Proyecto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="configuracion/css/tablas.css">
</head>
<body style="background-color:rgb(241, 238, 255);">

    <h1 align="center">Snack </h1>

    <nav class="navbar navbar-expand-sm bg-info navbar-light" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="home" >
    <img src="../configuracion/images/snack.jpg" alt="" style="width: 55px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="productos"><strong>Productos</strong></a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="venta"><strong>Venta</strong></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../mostrarCarrito"><strong>Carrito(<?php
      echo(empty($_SESSION['carrito'])) ?0:count($_SESSION['carrito']);?>)</strong></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="historial"><strong>Historial de venta</strong></a>
    </li>
  </ul>
</nav>
<div class="container">
<table class="table table-primary table-hover table-bordered ">
		<tr>
			<td align="center">N°de venta</td>
      <td align="center">Nombre</td>
			<td align="center">Dia/hora</td>
			<td align="center">Total</td>
			<td align="center">Estado</td>
		</tr>

		<?php 
		$sql="SELECT * from tblventas";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td align="center"><?php echo $mostrar['ID'] ?></td>
      <td align="center"><?php echo $mostrar['Nombre'] ?></td>
			<td align="center"><?php echo $mostrar['Fecha'] ?></td>
			<td align="center"><?php echo $mostrar['Total'] ?></td>
			<td align="center"><?php echo $mostrar['estado'] ?></td>
		</tr>
	<?php 
	}
	 ?>
       </div>
	</table>
  <center><button class="btn btn-danger" onclick="eliminar_tabla('<?php echo $r['ID'] ?>')">Borrar historial</button>
  <a href="reporte" class="btn btn-success">Imprimir reporte</a></center>
<br><center><h3>NOTA:LIMPIAR LA TABLA DESPUES DE GENERAR EL REPORTE DE VENTAS PARA COMENZAR UN NUEVO HISTORIAL</h3></center>
</body>
<script src="configuracion/js/eliminar.js"></script>
</html>