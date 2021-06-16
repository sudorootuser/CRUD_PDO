<!-- PROGRAMACIÓN CON PDO -->
<?php
try {
    //CONEXIÓN CON LA BASE DE DATOS
    $conexion = new PDO("mysql:host=localhost;dbname=pdo;", "root", "");

    //PARA MÁS INFORMACION SOBRE LOS ATRIBUTOS PARA VALIDAR LOS DIFERENTES ERRORES: https://www.php.net/manual/en/pdo.setattribute.php
   
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
    $conexion->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);

    // echo "Conexi&oacute Exitosa";

} catch (PDOException $e) {
    //EN CASO DE QUE NO FUNCIONE LA CONEXIÓN CON LA BASE DE DATOS SE MOSTRARA UN ERROR INDICANDO LA LINEA
    echo "Error en la conexión con la base de datos: " . $e->getMessage();
}
//USAMOS EL TRY CATCH

?>