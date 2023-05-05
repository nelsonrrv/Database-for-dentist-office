<html>

<head>
  <title>Lista de pacientes</title>
</head>

<body>

  <?php
  $conexion = mysqli_connect("localhost", "id19482344_nelson", "|@~[wH_ew7#72s4]", "id19482344_controlpacientesod") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select ci,nom, tel, id_od
                        from pacientes") or
    die("Problemas en el select:" . mysqli_error($conexion));
    echo '<h1> <center> Lista de pacientes </center></h1> '
  while ($reg = mysqli_fetch_array($registros)) {
    
    echo "CI:" . $reg['ci'] . "<br>";
    echo "Nombre:" . $reg['nom'] . "<br>";
    echo "Telefono:" . $reg['tel'] . "<br>";
    echo "Id Odontologo:". $reg['id_od'] . "<br>";
    echo "<hr>";
  }

  echo ' <button name="button"> <a href="registro.html">Registrar Paciente </a></button>
  <button name="button1"> <a href="tratamiento.html> Registrar Tratamiento </a></button>
  <button name="button2"> <a href="control_tratamientos"> Ver tratamientos </a></button>'
  mysqli_close($conexion);
  ?>

</body>

</html>