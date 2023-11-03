<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" >
  </head>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css_1/vistainicial.css">
    <title>bienvenida</title>
</head>
<body>
<!--Esto sería el encabezado de la página, en este caso está separado y debe cargarse para cada vista-->
<!--<header>
    <h1>Librería Elida</h1>
    <nav id="menu">
           <ul>
            <li><a href="<?= base_url(); ?>Iniciar/funcArticulos" >Carga Articulos</a></li>
            <li><a href="<?= base_url(); ?>OperarDatos/listarArt" >Lista Articulos</a></li>
            <li><a href="<?= base_url(); ?>Iniciar/funcClientes" >Clientes</a></li>
            <li><a href="#" >Salir</a></li>
        </ul>
    </nav>
</header>-->
<ul class="nav nav-underline">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Iniciar/funcArticulos">Carga Articulos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url(); ?>OperarDatos/listarArt">Lista Articulos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url(); ?>Iniciar/funcClientes">Clientes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Salir</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
<br><br>