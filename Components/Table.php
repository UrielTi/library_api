<?php
include_once("../Controllers/Autoload.php");

$objLibro = new Libros();

$libros = $objLibro->getLibros();

foreach ($libros as $libro => $value) {
    $id = $value['id'];
    $title = $value['title'];
    $author = $value['author'];
    $año = $value['yearA'];
    $gender = $value['gender'];
?>
    <tr>
        <td>
            <?php echo $title; ?>
        </td>
        <td>
            <?php echo $author; ?>
        </td>
        <td>
            <?php echo $año; ?>
        </td>
        <td>
            <?php echo $gender; ?>
        </td>

        <td>
            <a onclick="loadDataBook('bi bi-pen',' Actualizar datos del libro','Edit','<?php echo $id ?>')" href="" data-bs-toggle="modal" data-bs-target="#mimodal" class="btn btn-primary"><i class="bi bi-pencil-fill"></i></a>
            
            <a href="../Controllers/Acciones.php?action=delete&id=<?php echo $id ?>" data-toggle="tooltip" title="Eliminar" class="btn btn-danger"> <i class="bi bi-trash-fill"></i> </a>
        </td>
    </tr>
<?php }
?>
<div class="modal fade" id="mimodal" role="dialog" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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