<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from odontologos where id_od = '$username' and pass = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login exitoso </center></h1>";  
            echo "<script language=\"javascript\"> window.location.href=\"control_pacientes.html\"; </script>";
        }  
        else{  
            echo "<h1> Login fallido. Id de odontologo o Contraseña invalido.</h1>";  
        }     
?>   