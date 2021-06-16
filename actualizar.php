<?php
include_once('conexion.php');

try {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $nombre = filter_var($_POST['nombre']);
    $apellido = filter_var($_POST['apellido']);

    $update = $conexion->prepare("UPDATE login SET Nombre=:nombre, Apellido=:apellido WHERE id=:id");
    $update->bindParam(':id',$id);
    $update->bindParam(':nombre', $nombre);
    $update->bindParam(':apellido', $apellido);
    $update->execute();

    header("location:index.php");
    
} catch (PDOException $e) {

    echo 'Error: ' . $e->getMessage();
}
