<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<link rel="stylesheet" type="text/css" href="../css/estilocal.css">
</head>
<body>
	
	<form name="Calculadora" method="post" action="calculadora.php">
		<h2>Calculadora</h2>
		<label name="cant1">Cantidad 1 </label>
		<input type="text" name="numero1" placeholder="Cantidar 1">
		<select name="opciones">
			<option value="+">Sumar +</option>
			<option value="-">Restar -</option>
			<option value="*">Multipicar *</option>
			<option value="/">Dividir /</option>
		</select>
		<br/><br/>
		<label name="cant2">Cantidad 2 </label>
		<input type="text" name="numero2" placeholder="Cantidad 2"><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>

</body>
</html>
