<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir todas las clases llamadas debajo en los switchs
include_once(dirname(__FILE__) . "/.." . "/php/country.php");
include_once(dirname(__FILE__) . "/.." . "/php/city.php");
include_once(dirname(__FILE__) . "/.." . "/php/location.php");
include_once(dirname(__FILE__) . "/.." . "/php/address.php");
include_once(dirname(__FILE__) . "/.." . "/php/store.php");
include_once(dirname(__FILE__) . "/.." . "/php/category.php");
include_once(dirname(__FILE__) . "/.." . "/php/product.php");


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

            case "city":
                switch ($action)
                {
                    case "add":
                        cityInsertar();
                        break;
                    case "remove":
                        cityEliminar();
                        break;
                    case "modify";
                        cityModificar();
                        break;
                    case "view":
                        cityListar();
                        break;
                }
                break;

            case "location":
                switch ($action)
                {
                    case "add":
                        locationInsertar();
                        break;
                    case "remove":
                        locationEliminar();
                        break;
                    case "modify";
                        locationModificar();
                        break;
                    case "view":
                        locationListar();
                        break;
                }
                break;

            case "store":
                switch ($action)
                {
                    case "add":
                        storeInsertar();
                        break;
                    case "remove":
                        storeEliminar();
                        break;
                    case "modify";
                        storeModificar();
                        break;
                    case "view":
                        storeListar();
                        break;
                }
                break;

            case "category":
                switch ($action)
                {
                    case "add":
                        categoryInsertar();
                        break;
                    case "remove":
                        categoryEliminar();
                        break;
                    case "modify";
                        categoryModificar();
                        break;
                    case "view":
                        categoryListar();
                        break;
                }
                break;

            case "product":
                switch ($action)
                {
                    case "add":
                        productInsertar();
                        break;
                    case "remove":
                        productEliminar();
                        break;
                    case "modify";
                        productModificar();
                        break;
                    case "view":
                        productListar();
                        break;
                }
                break;
        }
    }
}

/*  Countries  */

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


/* Cities */

function cityEliminar()
{
    if(isset($_POST["codigoCity"]))
    {
        $codigo = $_POST["codigoCity"];
        $city = new City();
        if($city->removeCityById($codigo) == true)
        {
            echo "Ha eliminado la ciudad satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
}

function cityInsertar()
{
    if(isset($_POST["codigoCountry"]) && isset($_POST["nombre"]))
    {
        $idCountry = $_POST["codigoCountry"];
        $name = $_POST["nombre"];
        $city = new City();
        if($city->insertCity($idCountry,$name) == true)
        {
            echo "Ha insertado la ciudad satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
}

function cityModificar()
{
    
    if(isset($_POST["codigoCity"]) && isset($_POST["field"]) && isset($_POST["value"]))
    {
        
        $idCity = $_POST["codigoCity"];
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

        $city = new City();
        if($city->changeCityById($idCity,null,$name) == true)
        {
            echo "Ha modificado la ciudad satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }

}

function cityListar()
{
    $city = new City();
    return $city->getListOfCities();

}


/* Locations */

function locationEliminar()
{
    if(isset($_POST["codigoLocation"]))
    {
        $codigo = $_POST["codigoLocation"];
        $location = new Location();
        if($location->removeLocationById($codigo) == true)
        {
            echo "Ha eliminado la localidad satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
}

function locationInsertar()
{
    if(isset($_POST["codigoCity"]) && isset($_POST["nombre"]))
    {
        $idCity = $_POST["codigoCity"];
        $name = $_POST["nombre"];
        $location = new Location();
        if($location->insertLocation($idCity,$name) == true)
        {
            echo "Ha insertado la localidad satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
}

function locationModificar()
{
    
    if(isset($_POST["codigoLocation"]) && isset($_POST["field"]) && isset($_POST["value"]))
    {
        
        $idLocation = $_POST["codigoLocation"];
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

        $location = new Location();
        if($location->changeLocationById($idLocation,null,$name) == true)
        {
            echo "Ha modificado la localidad satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }

}

function locationListar()
{
    $location = new Location();
    return $location->getListOfLocations();

}


/* Stores */

function storeEliminar()
{
    if(isset($_POST["codigoStore"]))
    {
        $codigo = $_POST["codigoStore"];
        $store = new Store();
        if($store->removeStoreById($codigo) == true)
        {
            echo "Ha eliminado la sucursal satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
}

function storeInsertar()
{
    if(isset($_POST["codigoLocation"]) && isset($_POST["nombre"]) && isset($_POST["address"]) && isset($_POST["postalCode"]) && isset($_POST["telephone"]) && isset($_POST["available"]) && isset($_POST["email"]))
    {
        $idLocation = $_POST["codigoLocation"];
        $name = $_POST["nombre"];
        $address = $_POST["address"];
        $postalCode = $_POST["postalCode"];
        $telephone = $_POST["telephone"];
        $available = $_POST["available"];
        $email = $_POST["email"];

        // Primero agrego la direccion y despues la sucursal
        $addressObject = new Address();
        if($addressObject->insertAddress($idLocation, $address, $postalCode) == true)
        {

            $store = new Store();
            if($store->insertStore($addressObject->idAddress,$name,$telephone,$available,$email) == true)
            {
                echo "Ha insertado la sucursal satisfactoriamente!";
            }else{
                echo "Algo mal ha ocurrido.";
            }
        }else{
            echo "Algo mal ha ocurrido.";
        }       
    }
}

function storeModificar()
{
    /*
    if(isset($_POST["codigoAddress"]) && isset($_POST["field"]) && isset($_POST["value"]))
    {
        
        $idLocation = $_POST["codigoAddress"];
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

        $location = new Location();
        if($location->changeLocationById($idLocation,null,$name) == true)
        {
            echo "Ha modificado la localidad satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
    */

}

function storeListar()
{
    $store = new Store();
    return $store->getListOfStores();

}



/* Categories */

function categoryInsertar()
{

    if(isset( isset($_POST["idSuperCategory"]) && isset($_POST["name"]) )
    {
        $idSuperCategory = $_POST["idSuperCategory"];
        $name = $_POST["name"];
        $category = new Category();
        if($category->insertCategory($idSuperCategory, $name) == true)
        {
            echo "Ha insertado el producto satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
}


function categoryEliminar()
{
    if(isset($_POST["idCategory"]))
    {
        $codigo = $_POST["idCategory"];
        $category = new Category();
        if($category->removeCategoryById($codigo) == true)
        {
            echo "Ha eliminado el producto satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
}

function categoryModificar()
{
    
    if(isset($_POST["idCategory"]) && isset($_POST["idSuperCategory"]) && isset($_POST["name"]) )
    {

        $category = new Category();
        if($category->changeProductById($idCategory, $idSuperCategory ,$name) == true)
        {
            echo "Ha modificado el producto satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
}

function categoryListar()
{
    $category = new Category();
    return $category->getListOfCategories();

}


/* Products */

function productEliminar()
{
    if(isset($_POST["idProduct"]))
    {
        $codigo = $_POST["idProduct"];
        $product = new Product();
        if($product->removeProductById($codigo) == true)
        {
            echo "Ha eliminado el producto satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
}

function productInsertar()
{

    if(isset($_POST["idCategory"]) && isset($_POST["name"]) && isset($_POST["width"]) && isset($_POST["depth"]) && isset($_POST["length"]) && isset($_POST["price"]) && isset($_POST["warranty"]))
    {
        $idCategory = $_POST["idCategory"];
        $name = $_POST["name"];
        $width = $_POST["width"];
        $depth = $_POST["depth"];
        $length = $_POST["length"];
        $price = $_POST["price"];
        $warranty = $_POST["warranty"];

        $product = new Product();
        if($product->insertProduct($idCategory,$name,$width,$depth,$length,$price,$warranty) == true)
        {
            echo "Ha insertado el producto satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
}

function productModificar()
{
    
    if(isset($_POST["idProduct"]) && isset($_POST["idCategory"]) && isset($_POST["name"]) && isset($_POST["width"]) && isset($_POST["depth"]) && isset($_POST["length"]) && isset($_POST["price"]) && isset($_POST["warranty"]))
    {

        $product = new Product();
        if($product->changeProductById($idCategory,$name,$width,$depth,$length,$price,$warranty) == true)
        {
            echo "Ha modificado el producto satisfactoriamente!";
        }else{
            echo "Algo mal ha ocurrido.";
        }
    }
}

function productListar()
{
    $product = new Product();
    return $product->getListOfProducts();

}
?>