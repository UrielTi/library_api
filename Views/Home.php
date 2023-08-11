<!-- Este es nuestro menu principal, aca mantendremos conexiones al servidor y dependencia, con el cual generaremos la informacion que se podra editar y manejar -->
<?php
// generamos conexion al servidor
include "../Database/conn.php";
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <?php
    // conexion a dependencias
    include("../Components/Head.php");
    ?>
</head>

<script>
    <?php
    // invocamos los scripts que usaremos con nuestras funciones dinamicas
    include("../Scripts/Scripts.js");
    ?>
</script>

<body>

    <div class="container-fluid " data-bs-theme="dark">

        <hr>
        <div class="panel panel-default">
            <div class="panel-heading">
                <!-- reutilizacion de imagenes Webp para matener optimizado el aplicativo -->
                <img src="https://www.onyxerp.com/templates/yootheme/cache/onyx-soft-white-59dd1218.webp"
                    class="img-fluid">
                Librería Digital (Prueba técnica remota)
            </div>
            <br>

            <?php
            // invocamos nuestro controlador Delete el cual estara monitoreando si se recibe el action=delete al borrar un registro
            include("../Controllers/Delete.php"); 
            ?>

            <div class="panel-body">
                <div id="alert"></div>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <center><strong> Bienvenido </strong> Este proyecto tiene como funcionalidad digitalizar libros por
                        medio
                        una API creada en base a php, javascript, bootstrap y mysql. </center>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <br>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <center> Este codigo tiene como finalidad dar una solucion sencilla a una necesidad sencilla, sin
                        embargo estoy dispuesto a elaborar un proyecto más complejo en donde se haga uso de clases y
                        objetos ya que suele ser el tipo de uso que se le dan a los frameworks tales como symfony en el
                        cual ya he trabajo con anterioridad
                    </center>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <br>
                <div class="position-absolute start-50 translate-middle py-2 px-4" style="margin-top: 10px">
                    <a onclick="generateData('bi bi-journal-arrow-up',' Generar nuevo libro','Edit', '0')" href=""
                        data-bs-toggle="modal" data-bs-target="#mimodal" class="btn btn-primary"> Nuevo Libro </a>
                </div>
                <br><br>
                <!-- Tabla dinamica de datatable generamos su encabezado al tbody le insertamos nuestra Table.php que esta ubicada en Components -->
                <div class="table-responsive">
                    <table id="table" class="table table-striped" style="width:90%; margin-left: 5%; margin-right: 5%;">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Autor</th>
                                <th>Año de Publicación</th>
                                <th>Género</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include_once '../Components/Table.php' ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <!-- Derechos reservados Codigo 100% generado por mi -->
        <div class="card-footer">
            <div class="container">
                <center> <b class="copyright"><a> Alessandro Brito SSGTEC
                            <?php echo date("Y"); ?>
                        </a> &copy;
                        Copyright </b></center>
            </div>
        </div>
</body>

</html>