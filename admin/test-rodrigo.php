<?php

include(dirname(__FILE__) . "/.." ."/php/country.php");
/*
Test class, la uso para probar metodos y boludeces..
*/

$countries = new Country();
$paises = $countries->getListOfCountries();
var_dump(json_encode($paises));
/*
$country = null;
foreach ($paises as $pais) {
    $country = new Country($pais);
    //var_dump($country);
    var_dump($country->getIdCountry());
    //var_dump($pais);
    
   // $country.getIdCountry();
}
var_dump($country);

*/
/*
$object = new Country();
foreach ($paises as $key => $value)
{
    $object->$key = $value;
    var_dump($object);
    //var_dump($object);
    
    echo "----------";
}

var_dump($object->getIdCountry());
*/

?>