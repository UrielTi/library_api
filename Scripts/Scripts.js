$(document).ready(function() {
    $('#table').DataTable();
});
function generateData(icon, titulo, archivo, idC) {
    document.getElementById("titulo").innerHTML = '<i class="' + icon + '"></i>' + titulo;
    $(".modal-body").load(archivo + ".php?id=" + idC, function () {
        $("#mimodal").modal({
            show: true
        });
    });
}
function loadDataBook(icon, titulo, archivo, idC) {
    document.getElementById("titulo").innerHTML = '<i class="' + icon + '"></i>' + titulo;
    $(".modal-body").load(archivo + ".php?id=" + idC, function () {
        $("#mimodal").modal({
            show: true
        });
    });
}
