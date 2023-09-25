<?php

include("conexion.php");
$con=conectar();

$ID_SOCIO=$_POST['ID_SOCIO'];
$AYP=$_POST['AYP'];
$DNI=$_POST['DNI'];
$CDS=$_POST['CDS'];
$DAV=$_POST['DAV'];


// $ID_CLIENTE=$_POST['ID_CLIENTE'];
// $fecha=$_POST['fecha'];
// $dominio=$_POST['dominio'];
// $producto=$_POST['producto'];
// $KM=$_POST['KM'];
// $F_ACEITE=$_POST['F_ACEITE'];
// $F_AIRE=$_POST['F_AIRE'];
// $F_COMB=$_POST['F_COMB'];
// $F_AA=$_POST['F_AA'];
// $niveles=$_POST['niveles'];
// $aditivo=$_POST['aditivo'];
// $engrase=$_POST['engrase'];
// $proximo=$_POST['proximo'];
// $observaciones=$_POST['observaciones'];

 // Socio Nº=$ID_SOCIO,Bolson=$BOLSON, Apellido y nombre=$AYP, Edad=$EDAD, Fecha de Nac.=$FC, Nacionalidad=$NACIONALIDAD, Estado Civil=$EC, Telefono=$TELEFONO, Domicilio=$DOMICILIO, C_P=$CP, Localidad=$LOCALIDAD, Fecha de ingreso=$FI,Jubilado=$JUBILADO,Pensionado=$PENSIONADO,Adherente=$ADHERENTE,Beneficio$BENEFICIO,$PM,$UM,$OBSERVACIONES

$sql="UPDATE cliente SET  AYP='$AYP', DNI='$DNI', CDS='$CDS', DAV='$DAV' WHERE ID_SOCIO='$ID_SOCIO'";

// $sql="UPDATE cliente SET  fecha='$fecha',dominio='$dominio', producto='$producto',KM='$KM',F_ACEITE='$F_ACEITE',F_AIRE='$F_AIRE',F_COMB='$F_COMB',F_AA='$F_AA',niveles='$niveles', aditivo='$aditivo', engrase='$engrase',proximo='$proximo',observaciones='$observaciones' WHERE ID_CLIENTE='$ID_CLIENTE'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
