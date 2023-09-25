<?php

include("conexion.php");
$con=conectar();

$ID_SOCIO=$_POST['ID_SOCIO'];
$AYP=$_POST['AYP'];
$DNI=$_POST['DNI'];
$CDS=$_POST['CDS'];
$DAV=$_POST['DAV'];


if (!($ID_SOCIO=="" or $AYP=="" or $DNI==""))
{
	$sql="INSERT INTO cliente VALUES ('$ID_SOCIO', '$AYP', '$DNI', '$CDS',  '$DAV')";

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
