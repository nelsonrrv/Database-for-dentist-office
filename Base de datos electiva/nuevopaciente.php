<?php      
    include('connection.php');  
    $id = $_POST['ci'];  
    $nombre = $_POST['nom'];
    $telefono = $_POST['tel'];  
    $id_od = $_POST['id_od']; 
 
      
        //to prevent from mysqli injection  
        $id = stripcslashes($id);  
        $nombre = stripcslashes($nombre);
        $telefono = stripcslashes($telefono); 
        $id_od = stripcslashes($id_od); 
        $id = mysqli_real_escape_string($con, $id);  
        $nombre = mysqli_real_escape_string($con, $nombre);  
        $telefono = mysqli_real_escape_string($con, $telefono); 
        $id_od = mysqli_real_escape_string($con, $id_od); 


        $sql = "INSERT INTO pacientes (ci, nom, tel, id_od) VALUES('$id','$nombre','$telefono', '$id_od')";  
        $result = mysqli_query($con, $sql);  
        echo "<script language=\"javascript\"> window.location.href=\"control.html\"; </script>";
?>   