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

}

function countryInsertar()
{
    if(isset($_POST["codigo"]) && isset($_POST["nombre"]))
    {
        $id = $_POST["codigo"];
        $name = $_POST["nombre"];
        $pais = new Country();
        $pais->insertCountry($id,$name);
        echo "Ha insertado el pais satisfactoriamente!";
    }
}

function countryModificar()
{
    
}

?>