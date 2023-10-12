<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include("../Components/Head.php");
    ?>
</head>

<script>
    <?php
    include("../Scripts/Scripts.js");
    ?>
</script>

<body>
    <div class="panel-heading bg-primary text-light">
        <img src="https://www.onyxerp.com/templates/yootheme/cache/onyx-soft-white-59dd1218.webp" class="img-fluid" style="margin-left: 5px; margin-top: 5px;">
        Librería Digital (Prueba técnica remota)
    </div>
    <div class="container-fluid ">

        <div class="panel panel-default">

            <br>

            <div class="panel-body">
                <div id="alert"></div>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <center><strong> Bienvenido </strong> Este proyecto tiene como funcionalidad digitalizar libros por
                        medio
                        una API creada en php. </center>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <br>
                <div class="position-absolute start-50 translate-middle py-2 px-4" style="margin-top: 10px">
                    <a onclick="generateData('bi bi-journal-arrow-up',' Generar nuevo libro','Edit', '0')" href="" data-bs-toggle="modal" data-bs-target="#mimodal" class="btn btn-primary"> Nuevo Libro </a>
                </div>
                <br><br>

                <div class="table-responsive">
                    <table id="table" class="table table-striped">
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