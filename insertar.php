<?php

include("conexion.php");
$con=conectar();

$ID_SOCIO=$_POST['ID_SOCIO'];
$BOLSON=$_POST['BOLSON'];
$AYP=$_POST['AYP'];
$EDAD=$_POST['EDAD'];
$DNI=$_POST['DNI'];
$FC=$_POST['FC'];
$NACIONALIDAD=$_POST['NACIONALIDAD'];
$EC=$_POST['EC'];
$TELEFONO=$_POST['TELEFONO'];
$DOMICILIO=$_POST['DOMICILIO'];
$CP=$_POST['CP'];
$LOCALIDAD=$_POST['LOCALIDAD'];
$FI=$_POST['FI'];
$JUBILADO=$_POST['JUBILADO'];
$PENSIONADO=$_POST['PENSIONADO'];
$ADHERENTE=$_POST['ADHERENTE'];
$BENEFICIO=$_POST['BENEFICIO'];
$PM=$_POST['PM'];
$UM=$_POST['UM'];
$OBSERVACIONES=$_POST['OBSERVACIONES'];


if (!($ID_SOCIO=="" or $AYP=="" or $DNI=="" or $FC==""))
{
	$sql="INSERT INTO cliente VALUES ('$ID_SOCIO', '$BOLSON', '$AYP', '$EDAD', '$DNI', '$FC', '$NACIONALIDAD', '$EC', '$TELEFONO', '$DOMICILIO', '$CP', '$LOCALIDAD', '$FI', '$JUBILADO', '$PENSIONADO', '$ADHERENTE','$BENEFICIO', '$PM', '$UM',  '$OBSERVACIONES')";

	$query=mysqli_query($con,$sql);

	    if($query){
	        Header("Location: cliente.php");
	    }
}
// $ID_CLIENTE=$_POST['ID_CLIENTE'];
// $fecha=$_POST['fecha'];
// $dominio=$_POST['dominio'];
// $producto=$_POST['producto'];
// $KM=$_POST['KM'];
// $F_ACEITE=$_POST['F_ACEITE'];
// $F_AIRE = $_POST['F_AIRE'];
// $F_COMB = $_POST['F_COMB'];
// $F_AA = $_POST['F_AA'];
// $niveles=$_POST['niveles'];
// $aditivo=$_POST['aditivo'];
// $engrase=$_POST['engrase'];
// $proximo=$_POST['proximo'];
// $observaciones=$_POST['observaciones'];
else
{
	echo '<script>
	if (window.confirm("CAMPOS INCOMPLETOS"))
	{
	  window.open("cliente.php", Target="_self");
	}
	</script>';
}


?>
