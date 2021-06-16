<?php
include_once('conexion.php');

try {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  

    $eliminar = $conexion->prepare("DELETE FROM login WHERE id=:id");
    $eliminar->bindParam(':id',$id);
    $eliminar->execute();

    header("location:index.php");
    
} catch (PDOException $e) {

    echo 'Error: ' . $e->getMessage();
}
