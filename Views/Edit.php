<!-- Este archivo nos funciona como registro y actualizacion de registro al mismo tiempo #1A72DB
gracias a la utilizacion de operadores ternarios y metodos POST  y funcionalidades dinamicas con javascript-->
<?php
// generamos conexion con el servidor
include "../Database/conn.php";
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <?php
    // invocamos dependencias
    include "../Components/Head.php";
    ?>
</head>

<body>
    <?php
    // Controlador get que se encarga de tomar los datos por id del libro
    include "../Controllers/Get.php"
        ?>
    <div class="card card-body">
        <div class="control-group">
            <!-- Aca tenemos el form POST para actualizar o generar registros -->
            <!-- En este form usamos un operador ternario en la parte del action el cual identifica si el id es igual a 0 nos enviara al controlador Post.php 
            para poder registrar un libro
            de lo contrario se trata de un registro existente el cual se esta tratando de actualizar asi que nos envia a Update.php con su respectivo Id -->
            <form name="form" id="form" class="form-horizontal row-fluid" action="<?php $echo = ($id == 0) ? '../Controllers/Post.php' : '../Controllers/Update.php?id=' . $id;
            echo $echo; ?>" method="POST">
            <!-- En el value de los inputs tenemos un operador ternario que se encarga de mostrar 
            o no informacion dependiendo si se trata de un registro o edicion de registro -->
                <div class="input-group">
                    <span class="input-group-text" style="background-color: #1A72DB; color: #FFFFFF;">Título del
                        Libro:</span>
                    <input type="text" name="title" id="title" value="<?php $echo = (isset($title) != NULL) ? $title : '';
                    echo $echo; ?>" class="form-control rounded-end" placeholder="...Elden ring" autocomplete="off"
                        required>

                    <span class="input-group-text rounded-start"
                        style="background-color: #1A72DB; color: #FFFFFF; margin-left: 10px;">Autor:</span>
                    <input type="text" name="autor" id="autor" value="<?php $echo = (isset($autor) != NULL) ? $autor : '';
                    echo $echo; ?>" class="form-control" placeholder="...J.R.R. Tolkien" autocomplete="off" required>

                </div>

                <br>

                <div class="input-group">
                    <span class="input-group-text" style="background-color: #1A72DB; color: #FFFFFF;">Año de
                        publicación:</span>
                    <input type="number" min="1900" max="2099" name="year" id="year" value="<?php $echo = (isset($year) != NULL) ? $year : '';
                    echo $echo; ?>" class="form-control rounded-end" placeholder="...1986" autocomplete="off" required>

                    <span class="input-group-text rounded-start"
                        style="background-color: #1A72DB; color: #FFFFFF; margin-left: 10px;">Género:</span>
                    <input type="text" name="gender" id="gender" value="<?php $echo = (isset($gender) != NULL) ? $gender : '';
                    echo $echo; ?>" class="form-control" placeholder="... Horror" autocomplete="off" required>

                </div>

                <br>
                <div class="control-group">
                    <div class="controls">
                        <!-- El boton de registrar posee operadores ternarios el cual le permite cambiar su informacion
                        de insert(generar un registro) o update(actualizar un registro) y su nombre tambien cambia a registrar o actualizar -->
                        <center>
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