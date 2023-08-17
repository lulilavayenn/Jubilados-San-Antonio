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
                                <input type="text" class="form-control mb-3" name="BOLSON" placeholder="BOLSON" value="<?php echo $row['BOLSON']  ?>">
                                <input type="text" class="form-control mb-3" name="AYP" placeholder="APELLIDO Y NOMBRE" value="<?php echo $row['AYP']  ?>">
                                <input type="text" class="form-control mb-3" name="EDAD" placeholder="EDAD" value="<?php echo $row['EDAD']  ?>">
                                <input type="text" class="form-control mb-3" name="DNI" placeholder="DNI" value="<?php echo $row['DNI']  ?>">
                                <input type="text" class="form-control mb-3" name="FC" placeholder="FECHA NAC." value="<?php echo $row['FC']  ?>">
                                <input type="text" class="form-control mb-3" name="NACIONALIDAD" placeholder="NACIONALIDAD" value="<?php echo $row['NACIONALIDAD']  ?>">
                                <input type="text" class="form-control mb-3" name="EC" placeholder="ESTADO CIVIL" value="<?php echo $row['EC']  ?>">
                                <input type="text" class="form-control mb-3" name="TELEFONO" placeholder="TELEFONO" value="<?php echo $row['TELEFONO']  ?>">
                                <input type="text" class="form-control mb-3" name="DOMICILIO" placeholder="DOMICILIO" value="<?php echo $row['DOMICILIO']  ?>">
                                <input type="text" class="form-control mb-3" name="CP" placeholder="CODIGO POSTAL" value="<?php echo $row['CP']  ?>">
                                <input type="text" class="form-control mb-3" name="LOCALIDAD" placeholder="LOCALIDAD" value="<?php echo $row['LOCALIDAD']  ?>">
                                <input type="text" class="form-control mb-3" name="FI" placeholder="FECHA DE INGRESO" value="FI" value="<?php echo $row['FI']  ?>">
                                <input type="text" class="form-control mb-3" name="JUBILADO" placeholder="JUBILADO" value="<?php echo $row['JUBILADO']  ?>">
                                <input type="text" class="form-control mb-3" name="ADHERENTE" placeholder="ADHERENTE" value="<?php echo $row['ADHERENTE']  ?>">
                                <input type="text" class="form-control mb-3" name="PENSIONADO" placeholder="PENSIONADO" value="<?php echo $row['PENSIONADO']  ?>">
                                <input type="text" class="form-control mb-3" name="BENEFICIO" placeholder="BENEFICIO" value="<?php echo $row['BENEFICIO']  ?>">
                                <input type="text" class="form-control mb-3" name="PM" placeholder="PRIMER MES" value="<?php echo $row['PM']  ?>">
                                <input type="text" class="form-control mb-3" name="UM" placeholder="ULTIMO MES" value="<?php echo $row['UM']  ?>">
                                <input type="text" class="form-control mb-3" name="OBSERVACIONES" placeholder="OBSERVACIONES" value="<?php echo $row['OBSERVACIONES']  ?>">

                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>