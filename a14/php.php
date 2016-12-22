<?php
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$curso=$_POST["cu"];
$ciclo=$_POST["ci"];
$pro=$_POST["pro"];
$ed=$_POST["ed"];
$llmm=$_POST["llmm"];
$bbdd=$_POST["bbdd"];

echo "-------------------------------------------------------------------------------"."<br>";
	echo "El alumno:"."<br>";
	if (!empty($nombre)){//Si el nombre no esta vacío, muestralo.
		echo $nombre." ";
	}else{
		header("Location: http://localhost/a14/html.php");//en caso, contrario, vuelve a la pagina del formulario.
	}
	if (!empty($apellidos)){//Si el campo de los apellidos no esta vacío, muestralo.
		echo $apellidos. " , "."<br>";
	}else{
		header("Location: http://localhost/a14/html.php");//en caso, contrario, vuelve a la pagina del formulario.
	}
	echo "que pertenece al curso de ".$curso ." de ".$ciclo."<br>";
	echo "presenta las siguientes calificaciones:"."<br>";
	echo "-------------------------------------------------------------------------------"."<br>";
	
	/*Si en el formulario, nos dejamos el campo de texto de alguna asignatura
	en blanco, la calificación es igual a 0 */
	if(empty($pro)){//Si $pro esta vacio, $pro es igual a 0.
		$pro=0;
		echo "-Programación:".$pro."<br>";
	}else{
		echo "-Programación:".$pro."<br>";//En caso contrario, muestrame el resultado de las notas de programacion.
	}
	if(empty($ed)){
		$ed=0;
		echo "-Entornos de Desarrollo:".$ed."<br>";
	}else{
		echo "-Entornos de Desarrollo:".$ed."<br>";
	}
	if(empty($llmm)){
		$llmm=0;
		echo "-Lengiajes de Marcas y Gestion de la Informacion:".$llmm."<br>";
	}else{
		echo "-Lengiajes de Marcas y Gestion de la Informacion:".$llmm."<br>";
	}
	if(empty($bbdd)){
		$bbdd=0;
		echo "-Bases de Datos:".$bbdd."<br>";
	}else{
		echo "-Bases de Datos:".$bbdd."<br>";
	}
	echo "-------------------------------------------------------------------------------"."<br>";
	//Establecemos los posibles maximos.
	max($pro,$llmm,$bbdd,$ed);
		echo "La nota mas alta es:".max($pro,$llmm,$bbdd,$ed)."<br>";
		
	//Establecemos los posibles minimos.
	min($pro,$llmm,$bbdd,$ed);
		echo "La nota mas baja es:".min($pro,$llmm,$bbdd,$ed)."<br>";

	//Calculo de la media.
	$div=array($pro,$ed,$llmm,$bbdd);
	$contador=count($div);
	$res=array_sum($div)/$contador;
	echo "La media es:".$res."<br>";
	echo "-------------------------------------------------------------------------------"."<br>";

