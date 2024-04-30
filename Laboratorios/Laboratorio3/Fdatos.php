<?php
// include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numAlumnos = $_POST["num_alumnos"];
    
    echo "<!DOCTYPE html>
          <html>
          <head>
              <title>Formulario Alumnos</title>
          </head>
          <body>
              <form action='Finsertar.php' method='post' enctype='multipart/form-data'>
              <table border='0'>
                  <tr>
                      <th>Nro</th>
                      <th>Fotografía</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>CU</th>
                      <th>Sexo</th>
                      <th>Carrera</th>
                  </tr>";

    for ($i = 1; $i <= $numAlumnos; $i++) {
        echo "<tr>
                <td>${i}</td>
                <td><input type='file' name='fotografia[]' accept='image/*' required></td>
                <td><input type='text' name='nombres[]' required></td>
                <td><input type='text' name='apellidos[]' required></td>
                <td><input type='text' name='cu[]' required></td>
                <td>
                    <label><input type='radio' name='sexo[${i}]' value='M' required> Masculino</label>
                    <label><input type='radio' name='sexo[${i}]' value='F'> Femenino</label>
                </td>
                <td>
                    <select name='codigocarrera[]'>
                        <option value='1'>Ing. Sistemas</option>
                        <option value='2'>Ing. Telecomunicaciones</option>
                        <option value='3'>Ing. Del Gas y Petróleo</option>
                        <option value='4'>Ing. eléctrica</option>
                    </select>
                </td>
               
              </tr>";
    }

    echo "</table>
          <br>
          <input type='submit' value='Insertar'>
          <input type='submit' value='Borrar'>
          </form>
          <script>
              function insertarFila(button) {
                  var newRow = button.parentNode.parentNode.cloneNode(true);
                  button.parentNode.parentNode.parentNode.insertBefore(newRow, button.parentNode.parentNode.nextSibling);
              }

              function borrarFila(button) {
                  var row = button.parentNode.parentNode;
                  if (row.parentNode.rows.length > 2) {
                      row.parentNode.removeChild(row);
                  }
              }
          </script>
          </body>
          </html>";
}

