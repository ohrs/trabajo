
<!DOCTYPE html>
<html>
<head>
	<title> Fahrenheit a celsius </title>
	<link rel="stylesheet" type="text/css" href="../css/estilocal.css">
</head>
<style>
	body {
		font-family: arial;
		font-size: 12;
	}
</style>
<body>
<?php
error_reporting(0);
$fahrenheit = $_POST['fahrenheit'];
$celsius = $_POST['celsius'];

if (isset($_POST['convert'])) {
	# code...
	$f = $_POST['fahrenheit'];
	$c = ($f-32) * 5/9;
	$display = round($c,2)."". "°C";
}
if (isset($_POST['borrar'])) {
	# code...
	$fahrenheit = "";
	$celsius = "";
}

?>



<form  name="temperature" method="post">
	<h2>Fahrenheit a celsius</h2>
	<label>Temperatura fahrenheit</label>
	<input type="text" name="fahrenheit" value="<?php echo $fahrenheit; ?>" required autofocus>
	<label>Temperatura a celsius</label>
	<input type="text" name="celsius:" value="<?php echo $display; ?>">
	<input type="submit" value="Convert" name="convert"/>
		&nbsp;&nbsp;&nbsp;
	<input type="submit" value="Borrar" name="borrar"> 
			
	</form>
</body>
</html>
