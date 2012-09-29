<!DOCTYPE html>
<html lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <title>Club Deportivo 25 de Mayo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo URL; ?>public/assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="<?php echo URL; ?>public/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/assets/css/custom.css" rel="stylesheet">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo URL; ?>public/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo URL; ?>public/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo URL; ?>public/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo URL; ?>public/assets/ico/apple-touch-icon-57-precomposed.png">
    
    	<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/validate.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.pajinate.js"></script>
        
	<?php
		if (isset($this->js)) 
		{
			foreach ($this->js as $js)
			{
				echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
			}
		}
	?>
  </head>

  <body>
<?php Session::init(); ?>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo URL; ?>index">Home</a></li>
              <li><a href="<?php echo URL; ?>noticias">Noticias</a></li>
              <li><a href="<?php echo URL; ?>deportes">Calendario</a></li>
	      <li><a href="<?php echo URL; ?>contacto">Contacto</a></li>
              <?php if (Session::get('loggedIn') == true && Session::get('admin') == true):?>
              <li><a href="<?php echo URL; ?>notificaciones">Notificaciones (0)</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administraci&oacute;n <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Administrar Socios</a></li>
                  <li><a href="#">Administrar Cuotas</a></li>
                  <li><a href="#">Administrar Promociones</a></li>
                  <li><a href="#">Administrar Multa</a></li>
                  <li><a href="#">Administrar Noticias</a></li>
                  <li><a href="#">Administrar Calendario</a></li>
                  <li><a href="<?php echo URL; ?>tiposocio">Administrar Tipos de Socio</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Reportes</li>
                  <li><a href="#">Socios morosos</a></li>
                  <li><a href="#">Socios con cobrador</a></li>
                </ul>
              </li>
              <li><a style="margin-left: 300px;" href="<?php echo URL; ?>dashboard/logout"><i class="icon-user"></i>Logout</a></li>
                    
              <?php elseif (Session::get('loggedIn') == true && Session::get('admin') == false):?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Socios <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Pagar cuota</a></li>
                  <li><a href="#">Solicitar baja</a></li>
                </ul>
              </li>
              <li><a style="margin-left: 300px;" href="<?php echo URL; ?>dashboard/logout"><i class="icon-user"></i>Logout</a></li>
              <?php endif;?>
            <?php require 'login/index.php';?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">