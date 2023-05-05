<?php      
    $host = "localhost";  
    $user = "id19482344_nelson";  
    $password = "|@~[wH_ew7#72s4]";  
    $db_name = "id19482344_controlpacientesod";  
      
     
    if ($con = mysqli_connect($host, $user, $password, $db_name); ){
        echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";


        $query = "SELECT * FROM pacientes";
        $datos= mysql_query ($query);
    
    echo '  <h1> <center> Lista de pacientes </center></h1>
    <table border="0" cellspacing="2" cellpadding="2"> 
          <tr> 
              <td> <font face="Arial">CI</font> </td> 
              <td> <font face="Arial">Nombre</font> </td> 
              <td> <font face="Arial">Telefono</font> </td> 
              <td> <font face="Arial">Id Odontologo</font> </td> 
          </tr>';
    
    if ($result = mysql_query($query)) {
        while ($row = mysql_fetch_array($datos)) {
            $id = $_POST['ci'];  
            $nombre = $_POST['nom'];
            $telefono = $_POST['tel'];  
            $id_od = $_POST['id_od']; 
    
            echo '<tr> 
                      <td>'.$id.'</td> 
                      <td>'.$nombre.'</td> 
                      <td>'.$telefono.'</td> 
                      <td>'.$id_od.'</td> 
                  </tr>';
        }

        echo ' <button name="button"> <a href="registro.html">Registrar Paciente </a></button>
            <button name="button1"> <a href="tratamiento.html> Registrar Tratamiento </a></button>
            <button name="button2"> <a href="control_tratamientos"> Ver tratamientos </a></button>'

        }else{
            echo "<p> MySQL no conoce ese usuario y password</p>";
            }
    } 
    ?>