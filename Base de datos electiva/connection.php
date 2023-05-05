<?php      
    $host = "localhost";  
    $user = "id19482344_nelson";  
    $password = "|@~[wH_ew7#72s4]";  
    $db_name = "id19482344_controlpacientesod";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  