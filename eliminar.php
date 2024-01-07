<?php
include("conexion_php.php");

// Función para imprimir las filas de la tabla
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

// Verificar si se ha enviado el formulario de eliminar
if(isset($_POST['eliminar'])) {
    $idEliminar = $_POST['id_eliminar'];

    $sql = "DELETE FROM doctor_pao WHERE Id='$idEliminar'";
    mysqli_query($conexion, $sql) or die("Problemas con la sentencia mysql: " . mysqli_error($conexion));

    echo 'Registro eliminado correctamente';
}

// Obtener todos los registros para mostrarlos
$sql = "SELECT * FROM doctor_pao";
$resultado = mysqli_query($conexion, $sql);
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
 <link rel="stylesheet"type="text/css"href="css/eliminar.css">

    <form method="post" action="">
        <label for="id_eliminar">ID a eliminar:</label>
        <input type="text" name="id_eliminar" required>
        <input type="submit" name="eliminar" value="Eliminar">
        <img src="images/eliminar.png" width="30px" height="25px" alt="#" />
    </form>

    <!-- Tabla para visualizar los registros -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Género</th>
                <th>Especialidad</th>
                <th>Instrumentos médicos</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Imprimir cada fila de los registros obtenidos
            while ($fila = mysqli_fetch_assoc($resultado)) {
                imprimirFila($fila);
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php
mysqli_close($conexion);
?>