

    <!DOCTYPE html>
    <html lang="es">
    <head>
    <?php 

include '../menu.php';
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Observación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
            resize: vertical;
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
        <h2>Eliminar Observación de Estudiante</h2>
        <form id="eliminarObservacionForm" action="eliminar_observacion.php" method="POST">
            <label for="codigoEstudiante">Código de Estudiante:</label><br>
            <input type="text" id="codigoEstudiante" name="codigoEstudiante"><br>
            <label for="observacionActual">Observación Actual:</label><br>
            <textarea id="observacionActual" name="observacionActual" rows="4" cols="50" readonly></textarea><br>
            <label for="eliminarObservacion">¿Desea eliminar esta observación?</label><br>
            <select id="eliminarObservacion" name="eliminarObservacion">
                <option value="si">Sí</option>
                <option value="no">No</option>
            </select><br>
            <button type="submit">Eliminar Observación</button>
        </form>
    </div>

    <script>
        document.getElementById('eliminarObservacionForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Evitar que se envíe el formulario automáticamente
            
            // Aquí podrías agregar lógica adicional, como enviar los datos del formulario mediante AJAX
            
            // Simplemente para este ejemplo, mostraremos los datos del formulario en la consola del navegador
            console.log('Código de Estudiante:', document.getElementById('codigoEstudiante').value);
            console.log('Eliminar Observación:', document.getElementById('eliminarObservacion').value);
        });

        // Simulación de carga de observación al seleccionar un código de estudiante (esto podría ser cargado desde tu base de datos)
        document.getElementById('codigoEstudiante').addEventListener('change', function() {
            // Simulación de carga de observación (esto podría ser una solicitud AJAX a tu servidor)
            const codigoEstudiante = this.value;
            // Ejemplo de observación obtenida de la base de datos
            const observacion = obtenerObservacion(codigoEstudiante);
            document.getElementById('observacionActual').value = observacion;
        });

        // Función de simulación para obtener la observación de un estudiante (puedes reemplazar esto con tu lógica real)
        function obtenerObservacion(codigoEstudiante) {
            // Aquí podrías hacer una solicitud AJAX para obtener la observación desde tu servidor
            // Por simplicidad, vamos a retornar una observación simulada
            const observaciones = {
                '123': 'El estudiante tiene buen desempeño en matemáticas.',
                '456': 'El estudiante necesita mejorar su atención en clase.'
                // Agrega más observaciones según tus códigos de estudiante
            };

            return observaciones[codigoEstudiante] || 'No se encontró ninguna observación para este estudiante.';
        }
    </script>
</body>
</html>
