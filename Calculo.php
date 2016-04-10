<!DOCTYPE html>
<html>
<head>
	<title></title>
	

<h1 style="text-align: center; font-size: 15;text-decoration-color: #B40431"> Conversor de temperatura </h1>
<body style="background-color: lightblue">
<div style="border-style: solid;border-color: orange;margin-left: 28%; margin-right: 40%">

<form action="calculo.php" method="GET">
<br>
	<div style="background-color: #FBEFEF">
	
	<br> <input style="font-size: 16px;height: 40px;width: 200px;margin-left: 18%; border-radius:5px" type="double" value="<?php echo $valoringresado; ?>" name="temperatura"></br>
	<p><br></p>
	
	
	</div>

<div style="">
<br><input style="height: 40px;width: 200px; border-radius:5px; margin-left: 18%;margin-right: 30%" type="submit" name="acentigrados" value="A - De fahrenheit a centigrados"> </br>


<br><input style="height: 40px;width: 200px; border-radius:5px;margin-left: 18%" type="submit" name="afahrenheit" value="A - De centigrados a fahrenheit"> </br>


	<div style="height: 40px; text-align: center; border-style: solid; border-color: blue; margin-left: 0.3%">
		<?php
		echo $muestro;
		?>
	</div>
</div>
<br>
</div>

</form>

</body>

</html>

</form>

</body>

</html>
