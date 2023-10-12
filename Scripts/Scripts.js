// script de nuestra tabla agil
$(document).ready(function() {
    $('#table').DataTable();
});
// funcion para hacer aparecer el modal y generar un nuevo registro
function generateData(icon, titulo, archivo, idC) {
    document.getElementById("titulo").innerHTML = '<i class="' + icon + '"></i>' + titulo;
    $(".modal-body").load(archivo + ".php?id=" + idC, function () {
        $("#mimodal").modal({
            show: true
        });
    });
}
// funcion para hacer aparecer el modal y editar un registro
function loadDataBook(icon, titulo, archivo, idC) {
    document.getElementById("titulo").innerHTML = '<i class="' + icon + '"></i>' + titulo;
    $(".modal-body").load(archivo + ".php?id=" + idC, function () {
        $("#mimodal").modal({
            show: true
        });
    });
}
