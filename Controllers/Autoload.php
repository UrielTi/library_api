<?php
// autoload de clases por medio de estas linas de cosigo hacemos facil la interaccion de la clase libros
    function autoload ($clase){
        require_once($clase.".php");
    }
    spl_autoload_register("autoload");
?>