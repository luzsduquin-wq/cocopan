<?php
include("conexion.php");

if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    
    $fecha = date("Y-m-d");

    // Consulta para insertar los datos
    $sql = "INSERT INTO datos (nombre, email, fecha_reg) VALUES ('$nombre', '$email', '$fecha')";

    if (mysqli_query($conex, $sql)) {
        echo "<h3 style='color:green; text-align:center;'>✅ Datos enviados correctamente.</h3>";
    } else {
        echo "<h3 style='color:red; text-align:center;'>❌ Error al enviar los datos: " . mysqli_error($conex) . "</h3>";
    }
}
?>