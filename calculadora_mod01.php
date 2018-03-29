<?php
	$valor1 = isset($_POST["numero1"])?$_POST["numero1"]:"";
	$valor2 = isset($_POST["numero2"])?$_POST["numero2"]:"";
	$som = isset($_POST["Somar"])?$_POST["Somar"]:"";
	$sub = isset($_POST["Subtrair"])?$_POST["Subtrair"]:"";
	$mult = isset($_POST["Multiplicar"])?$_POST["Multiplicar"]:"";
	$div = isset($_POST["Dividir"])?$_POST["Dividir"]:"";

	function validar($valor1,$valor2){
		return is_numeric($valor1) && is_numeric($valor2);
	}
	function som($valor1,$valor2){
		$total = $valor1 + $valor2;
		echo "Resultado: $total";
	}
	function sub($valor1,$valor2){
		$total = $valor1 - $valor2;
		echo "Resultado: $total";
	}
	function mult($valor1,$valor2){
		$total = $valor1 * $valor2;
		echo "Resultado: $total";
	}
	function div($valor1,$valor2){
		$total = $valor1 / $valor2;
		echo "Resultado: $total";
	}
	if ($som){
		if(validar($valor1,$valor2)){
			som($valor1,$valor2);		
	}else{
		echo "valor não existente";
	}
	}
	if ($sub){
		if(validar($valor1,$valor2)){
			sub($valor1,$valor2);		
	}else{
		echo "valor não existente";
	}
	}
	if ($mult){
		if(validar($valor1,$valor2)){
			mult($valor1,$valor2);		
	}else{
		echo "valor não existente";
	}
	}
	if ($div){
		if(validar($valor1,$valor2)){
			div($valor1,$valor2);		
	}else{
		echo"valor não existente";
	}
	}
 ?>