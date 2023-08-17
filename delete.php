<?php

include("conexion.php");
$con=conectar();

$ID_SOCIO=$_GET['id'];

$sql="DELETE FROM cliente  WHERE ID_SOCIO ='$ID_SOCIO'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
