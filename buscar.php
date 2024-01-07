<?php
include("conexion_php.php");
?>

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
      <title>Buscar</title>
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

</div>



    <title>Buscar</title>
    <script type="text/javascript">
        function confirmar() {
            return confirm('¿Estás seguro? Se eliminarán los datos');
        }
    </script>
      <link rel="stylesheet" href="css/hospital.css">
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

        <table>
            <tr>
                <th colspan="7">
                    <h1>Hospital danna</h1>
                </th>
            </tr>
            <tr>
                <td>
                    <label>ID:</label>
                    <input type="text" name="id">
                </td>
                <td>
               <button><input type="submit" name="enviar" value="BUSCAR" >
                    <img src="images/buscar.png" width="30px" height="25px" alt="#" /></a>
                    
    </button> 

                </td>
            </tr>
        </table>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Genero</th>
                <th>Especialidad</th>
                <th>Instrumentos medicos</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_POST['enviar'])) {
                $id = $_POST['id'];
                if (empty($id)) {
                    echo "<script lenguage='JavaScript'>
                    alert ('Ingresa el ID');
                    location.assign('buscar.php');
                    </script>";
                } else {
                    $sql = "SELECT * FROM doctor_pao WHERE id = ?";
                    $stmt = mysqli_prepare($conexion, $sql);
                    mysqli_stmt_bind_param($stmt, "s", $id);
                    mysqli_stmt_execute($stmt);
                    $resultado = mysqli_stmt_get_result($stmt);

                    if ($resultado) {
                        while ($filas = mysqli_fetch_assoc($resultado)) {
                            imprimirFila($filas);
                        }
                    } else {
                        echo "Error en la consulta: " . mysqli_error($conexion);
                    }

                    mysqli_stmt_close($stmt);
                }
            } else {
                $sql = "SELECT * FROM doctor_pao";
                $resultado = mysqli_query($conexion, $sql);

                if ($resultado) {
                    while ($filas = mysqli_fetch_assoc($resultado)) {
                        imprimirFila($filas);
                    }
                } else {
                    echo "Error en la consulta: " . mysqli_error($conexion);
                }
            }

            function imprimirFila($filas)
            {
                ?>
                <tr>
                    <td><?php echo $filas['Id'] ?></td>
                    <td><?php echo $filas['Nombres'] ?></td>
                    <td><?php echo $filas['Apellidos'] ?></td>
                    <td><?php echo $filas['Edad'] ?></td>
                    <td><?php echo $filas['Genero'] ?></td>
                    <td><?php echo $filas['Especialidad'] ?></td>
                    <td><?php echo $filas['Instrumentos_medicos'] ?></td>
                    
                </tr>
            <?php
            }

            mysqli_close($conexion);
            ?>
            
        </tbody>
        
    </table>
    <a href="index.html"><button>Volver a la página principal</button></a>

</body>

</html>
