<?php
require_once "Clases 2.php";
/*function suma($a, $b){
	return $a+$b;
}

*/
/*

echo "My first PHP script!";
echo "<h1> Hola </h1>";

$Nombre = "Su nombre";
echo $Nombre;

echo "Hola".$Nombre;
echo "Hola $Nombre";

echo "<br>";
echo suma(3,4);
var_dump(suma(3,4));

$arraye = array("hola", 3, 's');
var_dump($arraye);
foreach($arraye as $elemento)
{
	echo $elemento;
}
*/
/*
$arraye = array("alfa" => 666, "beta" =>555);
$arraye["otro"] = "Esto";

$que = [];
//$yesto = {};
var_dump($arraye);
echo "<br>";
var_dump($que);
echo "<br>";
//var_dump($yesto);
echo "<br>";
foreach($arraye as $elemento)
{
	echo $elemento;
}

$obj = new stdClass;
var_dump(obj);

echo suma(2,3);

//echo Alumno::Saludar(); aca da error, porque no es estatico 
$alumn = new Alumno();
$alumn->legajo = 333;
echo $alumn->Saludar();
*/

$cuadradin = new Rectangulo(8,3);
$cuadradin->set_color("rojo");
echo $cuadradin->Dibujar();

?>
