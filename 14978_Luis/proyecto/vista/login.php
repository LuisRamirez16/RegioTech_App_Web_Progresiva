<!DOCTYPE html>
<html lang="en">
<head>
  <title>Proyecto 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
</head>
<body>
<h1 align="center"><FONT COLOR="white"><i><b>Login<b><i></font></h1>
<body background="../configuracion/images/fondo.png">
<br>
<div id="formulario" class="container">
  <center>
  <form action="return false" onsubmit="return false">
    <div class="form-group">
    <table>
    <tr><td align="center" rowspan="5"><img src="../configuracion/images/candado.png"></td>
      <tr><td><label for="email" ><FONT COLOR="white"><b><i>Correo Electronico:</b></i></font></label></tr></td>
      <tr><td><input type="email" class="form-control" placeholder="Ingresa tu correo electronico" id="email"></td></tr>
    </div>
    <div class="form-group">
    <tr><td><label for="pwd"><FONT COLOR="white"><b><i>CONTRASEÑA:</b></i></font></label></tr></td>
      <tr><td><input type="password" class="form-control" id="pwd" placeholder="Ingresa la contraseña"></td></tr>
    </div>
    <div class="form-group form-check">
      
    </div>
    </table>
    <button type="submit" onclick="login()" class="btn btn-primary">INGRESAR</button>
  </form>
  </center>
</div>


<div id="cargando" style="display: none" class="container">
<center>
<img src="configuracion/images/cargando.gif" alt="" srcset=""><br>
<h1>Validando, Espere un momento...</h1>
</center>
</div>

<script src="configuracion/js/login.js"></script>

</body>
</html>
