// Codigo Javascript que permite activar las funcionalidades del datatable por medio de la libreria CDN que se invoca en Components/Head.php
$(document).ready(function() {
    $('#table').DataTable();
});
// Esta funcion permite activar el modal o ventana para visualizar el archivo edit y generar un registro de libro
function generateData(icon, titulo, archivo, idC) {
    document.getElementById("titulo").innerHTML = '<i class="' + icon + '"></i>' + titulo;
    $(".modal-body").load(archivo + ".php?id=" + idC, function () {
        $("#mimodal").modal({
            show: true
        });
    });
}
// Esta funcion permite activar el modal o ventana para visualizar el archivo edit y editar un registro de un libro por medio de su Id
function loadDataBook(icon, titulo, archivo, idC) {
    document.getElementById("titulo").innerHTML = '<i class="' + icon + '"></i>' + titulo;
    $(".modal-body").load(archivo + ".php?id=" + idC, function () {
        $("#mimodal").modal({
            show: true
        });
    });
}
