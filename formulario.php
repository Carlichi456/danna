<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Formulario</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout in_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/Hospital danna.jpg" width="250px" height="200px" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-10 offset-md-1">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.html">Principal</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="formulario.php">Formulario</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="buscar.php">Buscar registros</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="visualizar.php">Visualizar</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="actualizar2.php">Actualizar</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="eliminar.php">Eliminar</a>
                              </li>
                              
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!--  service -->
      
     
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

<link rel="stylesheet"type="text/css"href="css/estilos.css">

<div id="doctor">
<img src="images/doctoress.jpg" width="250px" height="250px" alt="#" class="alinear-izquierda"  />
</div>
<?php

echo"<br>";

echo'<form action="agregar_registros.php" method="POST">';
echo'<table align=center>';

echo'<th>ID:</th><th scope="col" colspan="2"><input type="text" name="id_doctor" class="id" ></th></tr>
<th>Nombre:</th><th scope="col" colspan="2"><input type="text" name="nombres" class="id" ></th></tr>
<th>Apellidos:</th><th scope="col" colspan="2"><input type="text" name="apellidos" class="id"></th></tr>
<th>Edad:</th><th scope="col" colspan="2"><input type="text" name="edad" class="id"></th></tr>
 <th rowspan="3">Genero</th>
 <tr>

    <th > <input type="radio" name="gen" value="Femenino">Femenino</th>
    </tr>
    <tr>
    <th><input type="radio" name="gen" value="Masculino">Masculino</th>
    </tr>
</tr>

<tr> <th>Especialidad:</th><th scope="col" colspan="2" ><select name="esp"id="esp"class="desp">
	        
            <option value="seleccionar">Seleccionar</option>
	    	<option value="medico_general">Medico General</option>
	    	<option value="pediatria">Pediatria</option>
	    	<option value="cirujano">Cirujano</option>
            <option value="cardiologo">Caldiologo</option>
	 
	    </select> </th>
</tr>
<tr>
<th>
Instrumentos Medicos:</th><td><div align="left"><input type="checkbox" name="itermo"value=itermo">Termometro  </div>
<div align="left"> <input type="checkbox" name="isutura"value="isutura">Suturas<br></div>
<div align="left"><input type="checkbox" name="ialcohol"value="ialcohol">Alcohol</div>
</td><td><div align="left"><input type="checkbox" name="iestetoscopio"value="iestetoscopio">Estetoscopio</div>
<div align="left"><input type="checkbox" name="ijeringa"value="ijeringa">Jeringas</div>
<div align="left"><input type="checkbox" name="icuracion"value="icuracion">Material de curación</div></td>


</tr>

<tr>
<th><input type="submit" name="enviar" value="guardar.." class="dguar"></th><th scope ="col" colspan="2">
<input type="reset" name="cancelar"value="Cancelar" class="dcan"></th></tr>


</form>
</table>

';

