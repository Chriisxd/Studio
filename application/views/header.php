<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Elecciones</title>
  </head>
  <!-- importacion juery -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <!-- importar boostrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <body style="background-color: #c39114">


    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="<?php echo site_url(); ?>">Candidatos</a>
    </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav">
             <li class="active"><a href="<?php echo site_url(); ?>/presidentes/index">Reporte Presidentes <span class="sr-only">(current)</span></a></li>
             <li class="active"><a href="<?php echo site_url(); ?>/anacionales/index">Reporte Asambleistas Nacionales <span class="sr-only">(current)</span></a></li>
             <li class="active"><a href="<?php echo site_url(); ?>/aprovinciales/index">Reporte Asambleistas Provinciales<span class="sr-only">(current)</span></a></li>
             <li class="active"><a href="<?php echo site_url(); ?>/prefectos/index">Prefectos <span class="sr-only">(current)</span></a></li>
             <li class="active"><a href="<?php echo site_url(); ?>/consejales/index">Consejales<span class="sr-only">(current)</span></a></li>

             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Presidentes<span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="<?php echo site_url(); ?>/presidentes/nuevo"<>Nuevo candidato P</a></li>
                 <li><a href="<?php echo site_url(); ?>/presidentes/index">Reporte Candidatos Presidenciales</a></li>
                 <li><a href="<?php echo site_url(); ?>/presidentes/listado">Listado Candidatos Presidenciales</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Asambleistas Nacionales<span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="<?php echo site_url(); ?>/anacionales/nuevo"<>Nuevo Asambleista Nacional</a></li>
                 <li><a href="<?php echo site_url(); ?>/anacionales/index">Reporte Asambleistas Nacionales</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Asambleistas Provinciales<span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="<?php echo site_url(); ?>/aprovinciales/nuevo"<>Nuevo Asambleista Provincial</a></li>
                 <li><a href="<?php echo site_url(); ?>/aprovinciales/index">Reporte Asambleistas Provinciales</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prefectos<span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="<?php echo site_url(); ?>/prefectos/nuevo"<>Nuevo Prefecto</a></li>
                 <li><a href="<?php echo site_url(); ?>/prefectos/index">Reporte de Prefectos</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consejales<span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="<?php echo site_url(); ?>/consejales/nuevo"<>Nuevo Consejal</a></li>
                 <li><a href="<?php echo site_url(); ?>/consejales/index">Reporte de Consejales</a></li>
               </ul>
             </li>
           </ul>

           <div class="row">
             <div class="col-md-4 text-center" style="background-color: white">
               <h1 style="color:Black"><strong>ELECCIONES</strong></h1>
           </div>
            <div class="col-md-8 text-left" style="background-color: white">
              <h1 style="color:Black"><strong>2023&copy</strong></h1>
           </div>


          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
          </nav>
