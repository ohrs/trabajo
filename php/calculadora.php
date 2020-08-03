<?php

include("clase.php");
if (isset($_REQUEST['calcular'])) {
	# code...
	$n1=$_REQUEST['numero1'];
	$n2=$_REQUEST['numero2'];
	$op=$_REQUEST['opciones'];

	switch ($op) {
		case '+':echo "$n1 + $n2 = ".matematica::sumar($n1,$n2);break;
		case '-':echo "$n1 - $n2 = ".matematica::restar($n1,$n2);break;
		case '*':echo "$n1 * $n2 = ".matematica::multiplicar($n1,$n2);break;
		case '/':echo "$n1 / $n2 = ".matematica::dividir($n1,$n2);break;
	}
}


?>
