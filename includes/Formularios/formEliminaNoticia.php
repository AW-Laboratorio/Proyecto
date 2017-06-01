
<?php
    require_once '/../config.php';
    //require_once '/../ModelScripts/GestorCitas.php';
    use \estatica\includes\ModelScripts\GestorNoticias as GN;

    //$lista = new GestorCitas();
    
    $id = $_GET['data'];
    $noticia = GN::borrarNoticia($id);

    //header("Location: ../../citasPaciente.php");
    header("Location: ../../adminNoticias.php");
?>