<?php
// Controlador de generador de datos de libro, obtenemos los inputs del form por medio de POST, tratamos las 
// variables y luego hacemos el query inser a la base de datos, si el proceso de ejecuta exitosamente nos devolvera una 
// alerta y seguido nos devuelve al menu principal
include "../Database/conn.php";
if (isset($_POST['insert'])) {
    $title = mysqli_real_escape_string($conn, (strip_tags($_POST['title'], ENT_QUOTES)));
    $autor = mysqli_real_escape_string($conn, (strip_tags($_POST['autor'], ENT_QUOTES)));
    $year = mysqli_real_escape_string($conn, (strip_tags($_POST['year'], ENT_QUOTES)));
    $gender = mysqli_real_escape_string($conn, (strip_tags($_POST['gender'], ENT_QUOTES)));

    $insertBook = mysqli_query($conn, "INSERT INTO library(id, title, author, yearA, gender)VALUES(NULL, '$title', '$autor', '$year', '$gender')") or die(mysqli_error($conn));

    if ($insertBook) {
        echo "<script>alert('Se ha registrado un nuevo libro'); window.location = '../Views/Home.php'</script>";
    }
}
?>