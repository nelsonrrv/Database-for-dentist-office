<html>

<head>
  <title>Lista de tratamientos</title>
</head>

<body>

  <?php
  $conexion = mysqli_connect("localhost", "id19482344_nelson", "|@~[wH_ew7#72s4]", "id19482344_controlpacientesod") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select id_trata, id_od, ci, fecha, detalle, monto
                        from historias") or
    die("Problemas en el select:" . mysqli_error($conexion));
    echo '<h1> <center> Lista de pacientes </center></h1> '
  while ($reg = mysqli_fetch_array($registros)) {
    
    echo "CI:" . $reg['id_trata'] . "<br>";
    echo "Nombre:" . $reg['id_od'] . "<br>";
    echo "Telefono:" . $reg['ci'] . "<br>";
    echo "Fecha:". $reg['fecha'] . "<br>";
    echo "Detalle:". $reg['detalle'] . "<br>";
    echo "Monto:". $reg['Monto'] . "<br>";
    echo "<hr>";
  }

  echo ' <button name="button"> <a href="registro.html">Registrar Paciente </a></button>
  <button name="button1"> <a href="tratamiento.html> Registrar Tratamiento </a></button>
  <button name="button2"> <a href="control_pacientes1"> Ver Pacientes </a></button>'
  mysqli_close($conexion);
  ?>

</body>

</html>