<?php
$conexion=mysqli_connect('localhost','root','root','proyecto');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reporte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="configuracion/css/tablas.css">
</head>
<body>
<h1 align="center">Reporte de ventas</h1>

<div class="container">
<table border="1" style="margin: 0 auto;" width="100%">
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
</body>
</html>