<?php
// antispam Ruben Pastor - v1 01/03/2024
// sistema captcha simple

	$claves = array("lapiz" => "madera",
					"silla" => "madera",
					"arbol" => "madera",
					"cuchara" => "metal",
					"reloj" => "metal",
					"tuerca" => "metal",
					"vaso" => "cristal",
					"espejo" => "cristal",
					"canica" => "cristal",
					"rueda" => "goma",
					"pelota" => "goma",
					"borrador" => "goma",
					"bolsa" => "plastico",
					"radiografia" => "plastico",
					"emboltorio" => "plastico",
					"pared" => "yeso",
					"estatua" => "yeso",
					"techo" => "yeso",
					"gota" => "agua",
					"charco" => "agua",
					"lago" => "agua"
					);

	$as1 = $_POST["as1"];
	$as2 = $_POST["as2"];
	$as3 = $_POST["as3"];
	
	if ($claves[$as1]!=$claves[$as2])	{ // no comparten material - redirigir de nuevo al formulario
										exit; 
										}
	if ($as1==$as2)						{ // repite objeto - redirigir de nuevo al formulario
										exit; 
										}
	if ($as3!=date("H")*256)			{ // no actualiza as3 - redirigir de nuevo al formulario
										exit; 
										}
	// fin antispam

// procesar formulario

// Aquí se recibirían otros valores por $_POST y se procesaría la solicitud


?>
    