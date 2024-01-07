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
      <title>Actualizar</title>
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
                              <a href="index.html"><img src="images/Hospital danna.jpg" width="300px" alt="#" /></a>
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
                              <li class="nav-item">
                                 <a class="nav-link" href="buscar.php">Buscar registros</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="visualizar.php">Visualizar</a>
                              </li>
                              <a class="nav-link" href="actualizar2.php">Actualizar</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="eliminar.php">Eliminar</a>

                              
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>

</html>

<link rel="stylesheet" href="css/actualizar.css">

<?php
include("conexion_php.php");

if(isset($_POST['buscar'])) {
    $idBuscar = $_POST['id_buscar'];

    $consulta = mysqli_query($conexion, "SELECT * FROM doctor_pao WHERE Id = '$idBuscar'");
    
    if(mysqli_num_rows($consulta) > 0) {
        $registro = mysqli_fetch_assoc($consulta);
        $id = $registro['Id'];
        $nombres = $registro['Nombres'];
        $apellidos = $registro['Apellidos'];
        $edad = $registro['Edad'];
        $gen = $registro['Genero'];
        $esp = $registro['Especialidad'];
        $itermo = $registro['Instrumentos_medicos'];
    } else {
        echo 'No se encontró el registro con el ID proporcionado.';
        exit;
    }
}

if(isset($_POST['modificar'])) {
    $idModificar = $_POST['id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $gen = $_POST['gen'];
    $esp = $_POST['esp'];
    $itermo = isset($_POST['itermo']) ? 'itermo' : '';
    $isutura = isset($_POST['isutura']) ? 'isutura' : '';
    $ialcohol = isset($_POST['ialcohol']) ? 'ialcohol' : '';
    $iestetoscopio = isset($_POST['iestetoscopio']) ? 'iestetoscopio' : '';
    $ijeringa = isset($_POST['ijeringa']) ? 'ijeringa' : '';
    $icuracion = isset($_POST['icuracion']) ? 'icuracion' : '';

    $instrumentos = implode(',', array_filter([$itermo, $isutura, $ialcohol, $iestetoscopio, $ijeringa, $icuracion]));

    $sql = "UPDATE doctor_pao SET Nombres='$nombres', Apellidos='$apellidos', Edad='$edad', Genero='$gen', Especialidad='$esp', Instrumentos_medicos='$instrumentos' WHERE Id='$idModificar'";
    mysqli_query($conexion, $sql) or die ("Problemas con la sentencia mysql: " . mysqli_error($conexion));

    

    echo 'Registro modificado correctamente';
}
?>

<form method="post" action="">
   <table>
    <label for="id_buscar">ID a actualizar:</label>
    <input type="text" name="id_buscar" required>
<td>
     <button><input type="submit" name="buscar" value="Buscar">
      <img src="images/actualizar.png" width="30px" height="25px" alt="#" /></button>

</form>
</table>
<?php if(isset($id)): ?>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" value="<?php echo $nombres; ?>" required>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value="<?php echo $apellidos; ?>" required>
        <label for="edad">Edad:</label>
        <input type="text" name="edad" value="<?php echo $edad; ?>" required>
        <label for="gen">Género:</label>
        <div>
            <label><input type="radio" name="gen" value="Femenino" <?php echo ($gen == 'Femenino') ? 'checked' : ''; ?>> Femenino</label>
            <label><input type="radio" name="gen" value="Masculino" <?php echo ($gen == 'Masculino') ? 'checked' : ''; ?>> Masculino</label>
        </div>
        <label for="esp">Especialidad:</label>
        <select name="esp" id="esp">
            <option value="medico_general" <?php echo ($esp == 'medico_general') ? 'selected' : ''; ?>>Médico General</option>
            <option value="pediatria" <?php echo ($esp == 'pediatria') ? 'selected' : ''; ?>>Pediatría</option>
            <option value="cirujano" <?php echo ($esp == 'cirujano') ? 'selected' : ''; ?>>Cirujano</option>
            <option value="cardiologo" <?php echo ($esp == 'cardiologo') ? 'selected' : ''; ?>>Cardiólogo</option>
        </select>
        <label for="itermo">Instrumentos médicos:</label>
        <div>
            <label><input type="checkbox" name="itermo[]" value="itermo" <?php echo (strpos($itermo, 'itermo') !== false) ? 'checked' : ''; ?>> Termómetro</label>
            <label><input type="checkbox" name="isutura[]" value="isutura" <?php echo (strpos($itermo, 'isutura') !== false) ? 'checked' : ''; ?>> Suturas</label>
            <label><input type="checkbox" name="ialcohol[]" value="ialcohol" <?php echo (strpos($itermo, 'ialcohol') !== false) ? 'checked' : ''; ?>> Alcohol</label>
            <label><input type="checkbox" name="iestetoscopio[]" value="iestetoscopio" <?php echo (strpos($itermo, 'iestetoscopio') !== false) ? 'checked' : ''; ?>> Estetoscopio</label>
            <label><input type="checkbox" name="ijeringa[]" value="ijeringa" <?php echo (strpos($itermo, 'ijeringa') !== false) ? 'checked' : ''; ?>> Jeringas</label>
            <label><input type="checkbox" name="icuracion[]" value="icuracion" <?php echo (strpos($itermo, 'icuracion') !== false) ? 'checked' : ''; ?>> Mat.curacion</label>
        </div>
        <input type="submit" name="modificar" value="Modificar">
    </form>
<?php endif; ?>

</body>
</html>
