<?php 

		$contenido = file("cuentasnetflix.txt");
		$linea_azar = $contenido[rand(0, count($contenido) - 1)];
		echo $linea_azar;

 ?>