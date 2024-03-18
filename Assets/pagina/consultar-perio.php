<!DOCTYPE html>
<html lang="es">
<head>
<?php 

include '../menu.php';?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Periodos de Estudiantes</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Consultar Periodos de Estudiantes</h2>
        <table>
            <thead>
                <tr>
                    <th>Código de Estudiante</th>
                    <th>Nombre</th>
                    <th>Periodo</th>
                    <th>Año</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Juan Pérez</td>
                    <td>1</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>María López</td>
                    <td>2</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Carlos Martínez</td>
                    <td>3</td>
                    <td>2024</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
