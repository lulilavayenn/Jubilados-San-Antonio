<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cliente";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> CENTRO DE JUBILADOS Y PENSIONADOS "EDAD DORADA" SAN ANTONIO DE ARREDONDO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css"/>
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="ID_SOCIO" placeholder="SOCIO Nº">
                                    <input type="text" class="form-control mb-3" name="BOLSON" placeholder="BOLSON">
                                    <input type="text" class="form-control mb-3" name="AYP" placeholder="APELLIDO Y NOMBRE">
                                    <input type="text" class="form-control mb-3" name="EDAD" placeholder="EDAD">
                                    <input type="text" class="form-control mb-3" name="DNI" placeholder="DNI">
                                    <input type="text" class="form-control mb-3" name="FC" placeholder="FECHA DE NAC.">
                                    <input type="text" class="form-control mb-3" name="NACIONALIDAD" placeholder="NACIONALIDAD">
                                    <input type="text" class="form-control mb-3" name="EC" placeholder="ESTADO CIVIL">
                                    <input type="text" class="form-control mb-3" name="TELEFONO" placeholder="TELEFONO">
                                    <input type="text" class="form-control mb-3" name="DOMICILIO"placeholder="DOMICILIO">
                                    <input type="text" class="form-control mb-3" name="CP" placeholder="CODIGO POSTAL">
                                    <input type="text" class="form-control mb-3" name="LOCALIDAD" placeholder="LOCALIDAD">
                                    <input type="text" class="form-control mb-3" name="FI" placeholder="FECHA DE INGRESO">
                                    <input type="text" class="form-control mb-3" name="JUBILADO" placeholder="JUBILADO">
                                    <input type="text" class="form-control mb-3" name="ADHERENTE" placeholder="ADHERENTE">
                                    <input type="text" class="form-control mb-3" name="PENSIONADO" placeholder="PENSIONADO">
                                    <input type="text" class="form-control mb-3" name="BENEFICIO" placeholder="BENEFICIO">
                                    <input type="text" class="form-control mb-3" name="PM" placeholder="PRIMER MES">
                                    <input type="text" class="form-control mb-3" name="UM" placeholder="ULTIMO MES">
                                    <input type="text" class="form-control mb-3" name="OBSERVACIONES" placeholder="OBSERVACIONES">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" id="myTable">
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>SOCIO Nº</th>
                                        <th>BOLSON</th>
                                        <th>APELLIDO Y NOMBRE</th>
                                        <th>EDAD</th>
                                        <th>DNI</th>
                                        <th>FECHA DE NAC.</th>
                                        <th>NACIONALIDAD</th>
                                        <th>ESTADO CIVIL</th>
                                        <th>TELEFONO</th>
                                        <th>DOMICILIO</th>
                                        <th>C.P</th>
                                        <th>LOCALIDAD</th>
                                        <th>FECHA DE INGRESO</th>
                                        <th>JUBILADO</th>
                                        <th>ADHERENTE</th>
                                        <th>PENSIONADO</th>
                                        <th>BENEFICIO Nº</th>
                                        <th>PRIMER MES</th>
                                        <th>ULTIMO MES</th>
                                        <th>OBSERVACIONES</th>

                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID_SOCIO']?></th>
                                                <th><?php  echo $row['BOLSON']?></th>
                                                <th><?php  echo $row['AYP']?></th>
                                                <th><?php  echo $row['EDAD']?></th>
                                                <th><?php  echo $row['DNI']?></th>  
                                                <th><?php  echo $row['FC']?></th>
                                                <th><?php  echo $row['NACIONALIDAD']?></th> 
                                                <th><?php  echo $row['EC']?></th> 
                                                <th><?php  echo $row['TELEFONO']?></th> 
                                                <th><?php  echo $row['DOMICILIO']?></th> 
                                                <th><?php  echo $row['CP']?></th> 
                                                <th><?php  echo $row['LOCALIDAD']?></th> 
                                                <th><?php  echo $row['FI']?></th> 
                                                <th><?php  echo $row['JUBILADO']?></th> 
                                                <th><?php  echo $row['ADHERENTE']?></th> 
                                                <th><?php  echo $row['PENSIONADO']?></th> 
                                                <th><?php  echo $row['BENEFICIO']?></th> 
                                                <th><?php  echo $row['PM']?></th> 
                                                <th><?php  echo $row['UM']?></th> 
                                                <th><?php  echo $row['OBSERVACIONES']?></th>


                                                <th><a href="actualizar.php?id=<?php echo $row['ID_SOCIO'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID_SOCIO'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
 
            <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>

            <script>
                $(document).ready(function() 
                {
                    $('#myTable').DataTable( 
                    {
                        language: 
                        {
                            url: 'https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json'
                        }
                    } );
                } );            
            </script>
    </body>
</html>
