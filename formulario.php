<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario PQR</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdfbf5;
            text-align: center;
        }

        .formulario-contacto {
            background: #fff;
            margin: 40px auto;
            padding: 25px;
            max-width: 600px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1em;
        }

        button {
            background-color: #c27b2d;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1em;
        }

        button:hover {
            background-color: #a86820;
        }
    </style>
</head>

<body>

    <div class="formulario-contacto">
        <h3>Formulario de Factura y PQR</h3>
        <form action="procesar_formulario.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre completo" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>
            </div>
            <div class="form-group">
                <label for="factura">Número de Factura (opcional):</label>
                <input type="text" id="factura" name="factura" placeholder="Ej: FAC-00123">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo de Solicitud:</label>
                <select id="tipo" name="tipo" required>
                    <option value="">Selecciona una opción</option>
                    <option value="peticion">Petición</option>
                    <option value="queja">Queja</option>
                    <option value="reclamo">Reclamo</option>
                    <option value="factura">Consulta de factura</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" placeholder="Describe tu solicitud" required></textarea>
            </div>
            <button type="submit" name="enviar">Enviar</button>
        </form>
    </div>

</body>

</html>