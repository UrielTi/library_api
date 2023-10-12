<!-- archivo que comprende el registro y edicion de los libros -->
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <?php
    // dependencias del head
    include "../Components/Head.php";
    ?>
</head>

<body>
    <?php
    // archivo autoload el cual nos permite comunicarnos con la clase libro
    include_once("../Controllers/Autoload.php");
    $id = intval($_GET['id']);

    $objLibros = new Libros;
    // generamos los valores en los respectivos inputs si se trata de un registro existente
    if ($id != 0) {
        $libro = $objLibros->getLibro($id);
        $title = $libro['title'];
        $author = $libro['author'];
        $year = $libro['yearA'];
        $gender = $libro['gender'];
    }

    ?>
    <div class="card card-body">
        <div class="control-group">
            <form name="form" id="form" class="form-horizontal row-fluid" action="../Controllers/Acciones.php" method="POST">
                <div class="input-group">
                    <input type="hidden" name="id" value="<?php echo $id;?>" />
                    <span class="input-group-text" style="background-color: #1A72DB; color: #FFFFFF;">Título del
                        Libro:</span>
                        <!-- en los value de estos inputs imprimimos el valor por medio de un operador ternario en el caso de que 
                        si se ha encontrado un registro o en su defecto lo dejamos vacio para poder registrar un libro-->
                    <input type="text" name="title" id="title" value="<?php $echo = (isset($title) != NULL) ? $title : '';
                                                                        echo $echo; ?>" class="form-control rounded-end" placeholder="" autocomplete="off" required>

                    <span class="input-group-text rounded-start" style="background-color: #1A72DB; color: #FFFFFF; margin-left: 10px;">Autor:</span>
                    <input type="text" name="author" id="author" value="<?php $echo = (isset($author) != NULL) ? $author : '';
                                                                        echo $echo; ?>" class="form-control" placeholder="" autocomplete="off" required>

                </div>

                <br>

                <div class="input-group">
                    <span class="input-group-text" style="background-color: #1A72DB; color: #FFFFFF;">Año de
                        publicación:</span>
                    <input type="number" min="1900" max="2099" name="year" id="year" value="<?php $echo = (isset($year) != NULL) ? $year : '';
                                                                                            echo $echo; ?>" class="form-control rounded-end" placeholder="" autocomplete="off" required>

                    <span class="input-group-text rounded-start" style="background-color: #1A72DB; color: #FFFFFF; margin-left: 10px;">Género:</span>
                    <input type="text" name="gender" id="gender" value="<?php $echo = (isset($gender) != NULL) ? $gender : '';
                                                                        echo $echo; ?>" class="form-control" placeholder="" autocomplete="off" required>

                </div>

                <br>
                <div class="control-group">
                    <div class="controls">

                        <center>
                            <!-- hacemos uso de operadores ternarios los cuales mostraran un registro o una actualizacion-->
                            <input type="submit" name="<?php $echo = ($id == 0) ? 'insert' : 'update';
                                                        echo $echo; ?>" id="<?php $echo = ($id == 0) ? 'insert' : 'update';
                                                                            echo $echo; ?>" value="<?php $echo = ($id == 0) ? 'Registrar' : 'Actualizar';
                                                                                                    echo $echo; ?>" class="btn btn btn-success" />
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>