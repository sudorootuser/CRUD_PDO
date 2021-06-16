<?php
//INCLUIMOS DONDE TENEMOS LA CONEXIÓN
include_once("conexion.php");

try{

    //EXECUTAR LA INSTRUCCIÓN
    $consulta =$conexion->query("SELECT * FROM login");

    echo "<a href='formCrear.php' style='margin:50px;' >Nuevo Registro</a><br><br>Lista de Usuarios";
    echo "<br>";
    echo "<table border='1' ><tr><td>Nombre</td><td>Apellido</td><td>Acciones</td></tr>";

    while($lista=$consulta->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td>$lista[Nombre]</td><td>$lista[Apellido]</td><td><a href='formEditar.php?id=$lista[id]'>Editar</a> - <a href='eliminar.php?id=$lista[id]'>Eliminar</a></td></tr>";

    } 
    echo "</table>";
    echo "<br>";
    echo  $consulta->rowCount() . "Total de registros";

}catch(PDOException $e){

    echo $e->getMessage();
}

?>