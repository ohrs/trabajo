<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Obtencion del importe en bruto</title>
	<link rel="stylesheet" type="text/css" href="../css/estilocal.css">
</head>
<body>


<section>
	<form name="factori" action="controlador_factorial.php" method="GET" enctype="multipart/form-data">

        <h2> Capture el numero para calcular el factorial </h2>

		<label>Numero a calcular</label>
		<input type="text" name="num" min="1" max="10" placeholder="Numero a calcular" required><br/>
		<input type="submit" name="calcular" value="Calcular">
	</form>

	</section>
</body>
</html>

