<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM cliente WHERE ID_SOCIO='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="SOCIO_Nº" value="<?php echo $row['ID_SOCIO']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="ID_SOCIO" placeholder="SOCIO_Nº" value="<?php echo $row['ID_SOCIO']  ?>">
                                <input type="text" class="form-control mb-3" name="AYP" placeholder="APELLIDO Y NOMBRE" value="<?php echo $row['AYP']  ?>">
                                <input type="text" class="form-control mb-3" name="DNI" placeholder="DNI" value="<?php echo $row['DNI']  ?>">
                                <input type="text" class="form-control mb-3" name="CDS" placeholder="CATEGORIA DE SOCIO" value="<?php echo $row['CDS']  ?>">
                                <input type="text" class="form-control mb-3" name="DAV" placeholder="DERECHO A VOTO" value="<?php echo $row['DAV']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>