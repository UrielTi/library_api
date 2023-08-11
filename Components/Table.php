<?php
// Conexion a nuestro servidor
include "../Database/conn.php";
// query para selecccionar y mostrar todos los registros de libros
$sql = mysqli_query($conn, "SELECT id, title, author, yearA, gender FROM library");
while ($row = mysqli_fetch_assoc($sql)) {
    ?>
    <!-- Aprovechamos el while y imprimimos cada registro con sus respectivos datos y Id's -->
    <tr>
        <td>
            <?php echo $row["title"] ?>
        </td>
        <td>
            <?php echo $row["author"] ?>
        </td>
        <td>
            <?php echo $row["yearA"] ?>
        </td>
        <td>
            <?php echo $row["gender"] ?>
        </td>

        <td>
            <!-- Boton de editar datos, por medio de un script ubicado en Scripts/Scripts.js
            enviados el respectivo id y nos muestra una ventana emergente con los datos a corroborar-->
            <a onclick="loadDataBook('bi bi-pen',' Actualizar datos del libro','Edit','<?php echo $row['id'] ?>')" href=""
                data-bs-toggle="modal" data-bs-target="#mimodal" class="btn btn-primary"><i class="bi bi-pencil-fill"></i></a>
            <!-- Boton para borrar un registro, nos envia a Controllers/Delete.php por medio de un post action y suministrando id para poder ser eliminado -->
            <a href="../Controllers/Delete.php?action=delete&id=<?php echo $row['id'] ?>" data-toggle="tooltip" title="Eliminar"
                class="btn btn-danger"> <i class="bi bi-trash-fill"></i> </a>
        </td>
    </tr>
<?php }
?>
<!-- Este es nuestro modal o ventana emergente el cual activamos al hacer click en generar registro o editar un libro -->
<div class="modal fade" id="mimodal" role="dialog" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="titulo" class="panel-title"><i class="bi bi-search"></i></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>