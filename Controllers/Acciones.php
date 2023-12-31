<?php
require_once("Autoload.php");

$objLibros = new Libros;

// Switch de Post, Get y DELETE los cuales ejecutan los procesos de envio, actualizacion y eliminacion de datos ademas de comprobar el estado de las mismas.
switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        if (isset($_POST['update'])) {
            $id = intval(strip_tags($_POST['id'], ENT_QUOTES));
            $title = strip_tags($_POST['title'], ENT_QUOTES);
            $autor = strip_tags($_POST['author'], ENT_QUOTES);
            $year = strip_tags($_POST['year'], ENT_QUOTES);
            $gender = strip_tags($_POST['gender'], ENT_QUOTES);

            $update = $objLibros->updateLibros($id, $title, $autor, $year, $gender);
            // actualizar
            if ($update) {
                http_response_code(200);
                echo "<script>alert('Se han actualizado los datos'); window.location = '../Views/Home.php'</script>";
            }
        }
        if (isset($_POST['insert'])) {
            $title = strip_tags($_POST['title'], ENT_QUOTES);
            $autor = strip_tags($_POST['author'], ENT_QUOTES);
            $year = strip_tags($_POST['year'], ENT_QUOTES);
            $gender = strip_tags($_POST['gender'], ENT_QUOTES);

            $insert = $objLibros->insertLibro($title, $autor, $year, $gender);
            // registrar
            if ($insert) {
                http_response_code(200);
                echo "<script>alert('Se han actualizado los datos'); window.location = '../Views/Home.php'</script>";
            }
        }

        // leer datos json suministrados por el test automatizado
        $datos = json_decode(file_get_contents('php://input'));
        $v = isset($datos->id) ? 1 : 0;

        if ($datos != NULL && $v == 1) {
            //actualizacion json
            if ($update = $objLibros->updateLibros($datos->id, $datos->title, $datos->author, $datos->year, $datos->gender)) {
                http_response_code(200);
            } else {
                http_response_code(400);
            }
        } else {
            http_response_code(405);
        }

        if ($datos != NULL && $v == 0) {
            //registro json
            if ($insert = $objLibros->insertLibro($datos->title, $datos->author, $datos->year, $datos->gender)) {
                http_response_code(200);
            } else {
                http_response_code(400);
            }
        }


        break;
    case 'GET':
        $datos = json_decode(file_get_contents('php://input'));
        $v = isset($datos->id) ? 1 : 0;

        if ($datos != NULL && $v == 1) {
            // obtener libro por medio de test automatizado
            if ($getLibro = $objLibros->getLibro($datos->id)) {
                print_r($getLibro);
                http_response_code(200);
            } else {
                http_response_code(400);
            }
        } else {
            http_response_code(200);
        }

        break;
    case 'DELETE':
        $datos = json_decode(file_get_contents('php://input'));
        $v = isset($datos->id) ? 1 : 0;

        if ($datos != NULL && $v == 1) {
            if ($delete = $objLibros->deleteLibro($datos->id)) {
                http_response_code(200);
            } else {
                http_response_code(400);
            }
        }
    break;
}

// eliminar registro
if (isset($_GET['action']) == 'delete') {
    $id = intval($_GET['id']);

    $delete = $objLibros->deleteLibro($id);

    if ($delete) {
        http_response_code(200);
        echo "<script>alert('Se ha eliminado un libro'); window.location = '../Views/Home.php'</script>";
    }
}