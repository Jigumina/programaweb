<?php
$host_db="127.0.0.1:3306";
$user_db="root";
$pass_db="lajessi12";
$db_name="kpop_users";

//$host_db = 'sql310.infinityfree.com'; // Cambia si tu servidor es diferente
//$user_db = 'if0_37774369'; // Usuario de tu base de datos
//$pass_db = 'jigumina'; // Contraseña de tu base de datos
//$db_name = 'if0_37774369_kpop_users'; // Nombre de la base de datos

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
  echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}



?>

