<?php      
    include('connection.php');  
    $id_trata = $_POST['id_trata'];  
    $id_od = $_POST['id_od'];
    $ci = $_POST['ci'];  
    $fecha = $_POST['fecha'];
    $detalle = $_POST['detalle']; 
    $monto = $_POST['monto'];  
 
      
        //to prevent from mysqli injection  
        $id_trata = stripcslashes( $id_trata);  
        $id_od = stripcslashes($id_od); 
        $ci = stripcslashes($ci);  
        $fecha = stripcslashes( $fecha); 
        $detalle = stripcslashes( $detalle);  
        $monto = stripcslashes(  $monto);  
        $id_trata = mysqli_real_escape_string($con, $id_trata);  
        $id_od = mysqli_real_escape_string($con, $id_od); 
        $ci = mysqli_real_escape_string($con, $id_ $ci); 
        $fecha = mysqli_real_escape_string($con,  $fecha); 
        $detalle = mysqli_real_escape_string($con, $detalle); 
        $monto = mysqli_real_escape_string($con,  $monto);   


        $sql = "INSERT INTO historias (id_trata, id_od, ci, fecha, detalle, monto) VALUES('$id_trata',' $id_od','$ci', '$fecha', '$detalle', '$monto')";  
        $result = mysqli_query($con, $sql);  
        echo "<script language=\"javascript\"> window.location.href=\"control_tratamientos.html\"; </script>";
?>   