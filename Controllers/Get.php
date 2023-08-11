<?php
// Este controlador se encarga de obtener el id suministrado al hacer click sobre el icono editar un libro
// obteniendo asi su informacion y imprimiendolo en el valor de los inputs
$id = intval($_GET['id']);

$consultBook = mysqli_query($conn, "SELECT title, author, yearA, gender FROM library WHERE id = '$id' ") or die(mysqli_error($conn));
if (mysqli_num_rows($consultBook) > 0) {
    $resultBook = mysqli_fetch_assoc($consultBook);
    $title = $resultBook['title'];
    $autor = $resultBook['author'];
    $year = $resultBook['yearA'];
    $gender = $resultBook['gender'];
}
?>