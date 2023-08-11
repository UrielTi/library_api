<?php
// Controlador de borrado, obtenemos el id del objeto a borrar y ejecutamos el query delete
// si el proceso es exitoso nos mostrara una alerta y nos devolvera al menu principal
include "../Database/conn.php";
if (isset($_GET['action']) == 'delete') {
    $id_delete = intval($_GET['id']);
    $delete = mysqli_query($conn, "DELETE FROM library WHERE id='$id_delete'");
    
    if ($delete) {
        echo "<script>alert('Se ha eliminado un libro'); window.location = '../Views/Home.php'</script>";
    }
}
?>