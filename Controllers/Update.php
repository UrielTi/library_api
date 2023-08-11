<?php
// Controlador de actualizador de datos de libro, obtenemos los inputs del form por medio de POST, tratamos las 
// variables y luego hacemos el query update a la base de datos, si el proceso de ejecuta exitosamente nos devolvera una 
// alerta y seguido nos devuelve al menu principal

include "../Database/conn.php";
if (isset($_POST['update'])) {
	$id	= intval($_GET['id']);
	$title = mysqli_real_escape_string($conn, (strip_tags($_POST['title'], ENT_QUOTES)));
    $autor = mysqli_real_escape_string($conn, (strip_tags($_POST['autor'], ENT_QUOTES)));
    $year = mysqli_real_escape_string($conn, (strip_tags($_POST['year'], ENT_QUOTES)));
    $gender = mysqli_real_escape_string($conn, (strip_tags($_POST['gender'], ENT_QUOTES)));

    $updateBook = mysqli_query($conn, "UPDATE library SET  title='$title', author='$autor', yearA='$year', gender='$gender' WHERE id='$id'") or die (mysqli_error($conn));

    if ($updateBook) {
		echo "<script>alert('Se han actualizado los datos'); window.location = '../Views/Home.php'</script>";
	} 
}

?>