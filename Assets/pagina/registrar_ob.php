
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php 

include '../menu.php';


?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro de observaciones de alumnos</title>
    <style>
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 5px;
        width: 50%;
        margin: 0 auto;
      }
      body {
        margin: 8px;
      }
      h1 {
        margin-top: 0px;
      }
      label {
        display: block;
        margin: auto;
      }
      input[type="text"],
      input[type="date"],
      select,
      textarea {
        width: 80%;
        padding: 8px;
        margin-top: 0px;
      }
      input[type="submit"] {
        margin-top: 5%;
      }
      textarea {
        word-wrap: break-word;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Registro de observaciones </h1>
      <form action="#" method="post">
        <label for="student-name">Nombre del alumno:</label>
        <input type="text" id="student-name" name="student-name" required />

        <label for="teacher-name">Nombre del maestro:</label>
        <input type="text" id="teacher-name" name="teacher-name" required />

        <label for="subject">Salas:</label>
        <select id="subject" name="subject" required>
          <option value="sala1">Sala1</option>
          <option value="sala2">Sala2</option>
          <option value="sala3">Sala3</option>
         </select>

        <label for="observation">Observación:</label>
        <textarea id="observation" name="observation" rows="4" cols="50" required></textarea>

        <label for="date">Fecha:</label>
        <input type="date" id="date" name="date" required />

        <input type="submit" value="Registrar observación" />
      </form>
    </div>
  </body>
</html>