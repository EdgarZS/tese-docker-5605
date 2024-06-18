<?php
$servername = "mysql";
$username = "root";
$password = "1234";
$dbname = "test";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully<br>";

// Consultar datos de la tabla 'test'
$sql = "SELECT * FROM integrantes";
$result = $conn->query($sql);
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body >
  <nav class="navbar navbar-dark bg-dark">
    <div class="container d-flex justify-content-center"> <a class="navbar-brand" href="#">
        <i class="fa d-inline fa-lg fa-circle-o"></i>
        <b> Proyecto 3er Parcial - Redes de Computadora - 5605</b>
      </a> </div>
  </nav>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Docker multiservicios con docker-compose</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><b>Servicios instalados en este Docker</b></p>
          <ul class="">
            <li>PHP</li>
            <li>MySQL</li>
            <li>Phpmyadmin</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="">Integrantes:</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-bordered ">

              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Apellido</th>
                  <th>Nombre</th>
                  <th>Grupo</th>
                </tr>
              </thead>
              <tbody>
                          <?php
	if ($result->num_rows > 0) {
	    // Mostrar datos de cada fila
	    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<th>".$row["id"]."</th>";
		echo "<td>".$row["apellido"]."</td>";
		echo "<td>".$row["nombre"]."</td>";
		echo "<td>".$row["grupo"]."</td>";
		echo "</tr>";
	    }
	} else {
	    echo "0 results";
	}
	?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<?php
// Cerrar conexión
$conn->close();
?>
