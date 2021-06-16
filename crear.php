<?php
include_once('conexion.php');

try{
$nombre =filter_var($_POST['nombre']);
$apellido = filter_var($_POST['apellido']);
$insert = $conexion->prepare("INSERT INTO login (Nombre, apellido) VALUES (:nombre, :apellido)");
$insert->bindParam(':nombre',$nombre);
$insert->bindParam(':apellido',$apellido);
$insert->execute();

header("location: index.php");


}catch(PDOException $e){
    echo 'Error: '. $e->getMessage();
}
?>