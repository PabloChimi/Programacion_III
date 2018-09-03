<?php

$dir = "./datos";
echo file_exists($dir);
echo is_dir($dir);
if (!file_exists($dir) && !is_dir($dir)) {
    mkdir($dir);  
    touch("datos.json");       
}
$dir2 = "./datos/datos.json";

$fgestor = fopen($dir2, "w");
echo $fgestor;

?>