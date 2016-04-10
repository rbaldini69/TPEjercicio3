<?php
	
	$valorIngresado=0;
	if(isset($_GET["afahrenheit"]))
	{
		$valorIngresado=$_GET["temperatura"];
		$afahrenheit=($valorIngresado*9/5)+32;
	$muestro=$valorIngresado." grados Centigrados equivalen a :".$afahrenheit." grados Fahreinheit.-";
	}
	if (isset($_GET["acentigrados"])) 
	{
		$valorIngresado=$_GET["temperatura"];
		$acentigrados=(($valorIngresado-32)*5)/9;
		$muestro=$valorIngresado." grados Fahreinheit equivalen a :".$acentigrados." Centigrados.-";
	}
			include "index.php";
?>
