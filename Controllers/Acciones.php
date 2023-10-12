<?php
require_once("Autoload.php");

$objLibros = new Libros;

if (isset($_POST['insert'])) {
    $title = strip_tags($_POST['title'], ENT_QUOTES);
    $autor = strip_tags($_POST['author'], ENT_QUOTES);
    $year = strip_tags($_POST['year'], ENT_QUOTES);
    $gender = strip_tags($_POST['gender'], ENT_QUOTES);

    $insert = $objLibros->insertLibro($title, $autor, $year, $gender);

    if ($insert) {
        echo "<script>alert('Se ha registrado un nuevo libro'); window.location = '../Views/Home.php'</script>";
    }
}
if (isset($_POST['update'])) {
    $id = intval(strip_tags($_POST['id'], ENT_QUOTES));
    $title = strip_tags($_POST['title'], ENT_QUOTES);
    $autor = strip_tags($_POST['author'], ENT_QUOTES);
    $year = strip_tags($_POST['year'], ENT_QUOTES);
    $gender = strip_tags($_POST['gender'], ENT_QUOTES);

    $update = $objLibros->updateLibros($id, $title, $autor, $year, $gender);

    if ($update) {
        echo "<script>alert('Se han actualizado los datos'); window.location = '../Views/Home.php'</script>";
    }
}

if (isset($_GET['action']) == 'delete') {
    $id = intval($_GET['id']);

    $delete = $objLibros->deleteLibro($id);

    if ($delete) {
        echo "<script>alert('Se ha eliminado un libro'); window.location = '../Views/Home.php'</script>";
    }
}
