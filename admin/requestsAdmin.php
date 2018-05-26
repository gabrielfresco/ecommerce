<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir todas las clases llamadas debajo en los switchs
include_once("../php/country.php");


if(isset($_POST))
{
    if(isset($_POST["request"]) && isset($_POST["action"]))
    {
        
        $request = $_POST["request"];
        $action = $_POST["action"];
        switch ($request)
        {
            case "country":
                switch ($action)
                {
                    case "add":
                        countryInsertar();
                        break;
                    case "remove":
                        countryEliminar();
                        break;
                    case "modify";
                        countryModificar();
                        break;
                    case "view":
                        countryListar();
                        break;
                }
                break;
            case "otro":
                
                break;
            case "otro":
                
                break;
        }
    }
}

function countryEliminar()
{
    if(isset($_POST["codigo"]))
    {
        $codigo = $_POST["codigo"];
        $pais = new Country();
        if($pais->removeCountryById($codigo) == true)
        {
            echo "Ha eliminado el pais satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
}

function countryInsertar()
{
    if(isset($_POST["codigo"]) && isset($_POST["nombre"]))
    {
        $id = $_POST["codigo"];
        $name = $_POST["nombre"];
        $pais = new Country();
        if($pais->insertCountry($id,$name) == true)
        {
            echo "Ha insertado el pais satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
}

function countryModificar()
{
    
    if(isset($_POST["codigo"]) && isset($_POST["field"]) && isset($_POST["value"]))
    {
        
        $id = $_POST["codigo"];
        $field_name = $_POST["field"];

        // Queda horrible..pero no se me ocurre otra cosa ahora.
        if($field_name == "name")
        {
            $name = $_POST["value"];
        }else{
            $name = "";
        }
        if($field_name == "othervar")
        {
            $othervar = $_POST["value"]; 
        }else{
            $othervar = "";
        }

        $pais = new Country();
        if($pais->changeCountryById($id,$name) == true)
        {
            echo "Ha modificado el pais satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
}

function countryListar()
{
    $pais = new Country();
    return $pais->getListOfCountries();

}

/*
function countryFind()
{
    if(isset($_POST["id"]))
    {
        $id = $_POST["id"];
        $pais = new Country();
        $pais->findCountryById($id);
        return $pais;
    }
    return null;
}
*/

?>