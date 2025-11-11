<?php
include("conexion.php");

if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $factura = $_POST['factura'];
    $tipo = $_POST['tipo'];
    $mensaje = $_POST['mensaje'];
    $fecha = date("Y-m-d H:i:s");

    // Inserta todos los datos en la tabla
    $sql = "INSERT INTO datos (nombre, email, num_fac, tipo_soli, mensaje, fecha_reg)
            VALUES ('$nombre', '$email', '$factura', '$tipo', '$mensaje', '$fecha')";

    if (mysqli_query($conex, $sql)) {
        echo "<h3 style='color:green; text-align:center;'>✅ Datos enviados correctamente.</h3>";
        echo "<p style='text-align:center;'><a href='formulario.php'>Volver al formulario</a></p>";
    } else {
        print_r($_POST);
    }
}
?>