<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("country.php");

//Test:
$pais = new Country();
//var_dump($pais);

//$pais->insertCountry(54,"Argentina");
$pais->findCountryByName("Argentina");
var_dump($pais->getIdCountry());

?>