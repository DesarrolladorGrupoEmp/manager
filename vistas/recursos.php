<?php 

	include("../controller/muestra_pagina.php");

	$muestra_recursos = new mostrar();

	//---------------------------------------------------------
	$pagina = "cont_recursos.php";
	$scripts = array('cont_recursos.js','cont_recursos_contratos.js');
	//---------------------------------------------------------
	$id_modulo = 1;
	//---------------------------------------------------------

	$muestra_recursos->mostrar_pagina_scripts($pagina,$scripts,$id_modulo);

 ?>