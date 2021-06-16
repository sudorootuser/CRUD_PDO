<form action="crear.php" method="POST" style="margin:50px">

    Nombre: <input type="text" name="nombre" /><br><br>
    Apellido: <input type="text" name="apellido" /><br>
    <input type="hidden" name="id" value="<?php echo $lista['id'] ?>">
    <input type="submit" value="Crear">
    <a href="index.php" style="text-decoration:none;">Regresar</a>
</form>