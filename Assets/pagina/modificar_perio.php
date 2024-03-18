<?php 

include '../menu.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Periodos de Estudiantes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Modificar Periodos de Estudiantes</h2>
        <form action="modificar_periodos.php" method="POST">
            <label for="codigoEstudiante">Código de Estudiante:</label><br>
            <input type="text" id="codigoEstudiante" name="codigoEstudiante"><br>
            <label for="nuevoPeriodo">Nuevo Período:</label><br>
            <select id="nuevoPeriodo" name="nuevoPeriodo">
                <option value="1">Período 1</option>
                <option value="2">Período 2</option>
                <option value="3">Período 3</option>
                <!-- Agrega más opciones según tus necesidades -->
            </select><br>
            <button type="submit">Modificar Período</button>
        </form>
    </div>
</body>
</html>