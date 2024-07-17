<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo($titulo);?></title>
    <!--variable titulo -->

    <!-- <title>Toyota Imperio</title> ahora lo controla al titulo el Php-->

    <!-- <link rel="icon" href="assets/img/logo-toyota.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css"> -->
    <!-- cambio para usar las imgenes desde servidor  -->

    <link href="<?php echo base_url('assets/img/logo-toyota.svg');?>" type="image/x-icon" rel="icon">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css ');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/styles.css');?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<header>
    <h1>Bienvenido a Toyota Imperio S.A.</h1>
</header>

<body>