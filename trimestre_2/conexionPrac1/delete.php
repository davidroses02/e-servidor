<?php 

    include("conectaSuperheroes.php");
    $db = conectaDB();

    $id = $_GET["id"];

    $sqlDelete = "delete from superheroes where id=:id";
    $consulta = $db->prepare($sqlDelete);
    $aParametros = array(
        ":id"=>$id
    );
    echo "$id";
    if ($consulta->execute($aParametros)) {
        echo "Registro borrado." . "<br>";
    } else {
        echo "El registro no ha sido borrado." . "<br>";
    }

    echo "<a href=".'index.php'.">Volver</a>";

?>