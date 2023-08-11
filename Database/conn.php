<!-- Esta es la conexion al servidor mysql -->
<?php
$db_host = "localhost"; // cambiar por su tipo de host
$db_user = "root";  // cambiar por su usuario registrado en su host
$db_pass = "mysql"; // cambiar por contraseña registrada en su usuario host
$db_name = "library_api"; // cambiar por el nombre de su base de datos, generar una nueva o exportar la que estara adjunta al proyecto

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Error, no se pudo conectar a la base de datos: '.mysqli_connect_error();
}

if(!mysqli_set_charset($conn, "utf8")){
	printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conn));
    exit();
}