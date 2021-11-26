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
