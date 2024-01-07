<link rel="stylesheet"type="text/css"href="css/estilo.css">
<?php
$id=$_POST['id_doctor'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
$gen=$_POST['gen'];
$esp=$_POST['esp'];
$itermo=$_POST['itermo']?? "";
$isutura=$_POST['isutura']?? "";
$ialcohol=$_POST['ialcohol']?? "";
$iesteto=$_POST['iestetoscopio']?? "";
$ijeringa=$_POST['ijeringa']?? "";
$icuracion=$_POST['icuracion']?? "";
include("conexion_php.php");

mysqli_query($conexion,"INSERT INTO doctor_pao (Id,Nombres,Apellidos,Edad,Genero,Especialidad,Instrumentos_medicos) VALUES
('$id','$nombres','$apellidos','$edad','$gen','$esp','$itermo,$isutura,$ialcohol,$iesteto,$ijeringa,$icuracion')") 
or die ("Problemas con la sentencia mysql");

echo'Registros almacenados correctamente';
//include("Cerrar_conexion_php.php");

?>
