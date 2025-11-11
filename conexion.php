<?php
// Conexión a la base de datos
$conex = mysqli_connect("localhost", "root", "", "registro");

// Verificar conexión
if (!$conex) {
    die("❌ Error de conexión: " . mysqli_connect_error());
} else {
    // Puedes usar esta línea para verificar
    // echo "✅ Conexión exitosa a la base de datos.";
}
?>