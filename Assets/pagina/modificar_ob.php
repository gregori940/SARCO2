<!DOCTYPE html>
<html lang="es">
<head>
<?php include '../partials/header.php' ?>
<?php include '../menu.php';?>
<p>&nbsp;</p>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Observaciones Estudiantiles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 2rem;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 1rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        textarea {
            width: 100%;
            min-height: 200px;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        button {
            display: block;
            width: 100%;
            padding: 0.5rem;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Consulta de Observaciones Estudiantiles</h1>
        <form>
            <label for="student">Nombre del estudiante:</label>
            <input type="text" id="student" />
            <label for="observations">Observaciones:</label>
            <textarea id="observations"></textarea>
            <button type="button" onclick="saveObservations()">Guardar Observaciones</button>
        </form>
    </div>
    <script>
        function saveObservations() {
            const student = document.getElementById("student").value;
            const observations = document.getElementById("observations").value;
            // Aquí puedes agregar tu lógica para guardar las observaciones en una base de datos o en un archivo de texto
            console.log(`Guardando observaciones de ${student}: ${observations}`);
        }
    </script>
</body>
</html>