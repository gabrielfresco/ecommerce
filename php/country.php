<?php
/**
 * Class Country
 *
 * @package     Myapp
 * @subpackage  User
 * @author      Rodrigo Juan Martinez <mirodrigom@gmail.com>
 * @version     v.1.0 (25/03/2018)
 * @copyright   Copyright (c) 2016, Rodrigo Martinez
 */

require_once("mysql.php");
require_once("logFiles.php");

/*
*
* Clase Country
*
*
*/

class Country
{
/*
    private $idCountry;
    private $name;
*/
    public $idCountry;
    public $name;

    function __construct($idCountry = null, $name = null)
    {
        $this->idCountry = $idCountry;
        $this->name = $name;
    }


    /**
     * Insert one country
     * 
     * @param   integer $idCountry  Id del pais
     * @param   string  $name       Nombre del pais
     * @return  boolean
     */
    function insertCountry($id,$name)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "INSERT INTO country (idCountry,name) VALUES ('$id','$name')";

        if($result = $mysqli->query($sqlProcedure))
        {
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo insertar el pais.");
        }
        return false;
    }

    /**
     * Find country by name
     * 
     * @param   string  $nombre Nombre del pais
     * @return  void
     */
    function findCountryByName($nombre)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM country WHERE name='$nombre' LIMIT 1";
        
        if($result = $mysqli->query($sqlProcedure))
        {
            
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(count($row) > 0)
            {
                $this->idCountry = $row["idCountry"];
                $this->name = $row["name"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver el pais.");
            header(ERROR_404);
        }
    }

     /**
     * Find one country by id
     * 
     * @param   integer $id ID del pais
     * @return  void
     */
    function findCountryById($id)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM country WHERE idCountry='$id' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            if(count($row) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idCountry = $row["idCountry"];
                $this->name = $row["name"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver el pais.");
            header(ERROR_404);
        }
    }

    /**
     * Update country by id
     * 
     * @param   integer $idCountry  Id del pais
     * @param   string  $name       Nombre del pais
     * @return  boolean
     */
    function changeCountryById($idCountry = null, $name = "")
    {
        if($idCountry != null)
        {
            $queryModified = null;
            // Chequeo que las variables no sean null para ver si hay algo q modificar o no..
            if($name != "")
            {
                $name = "name='".$name."'";
            }

            $db = Database::getInstance();
            $mysqli = $db->getConnection(); 
            $sqlProcedure = "UPDATE country SET $name WHERE idCountry='$idCountry'";

                if($result = $mysqli->query($sqlProcedure))
                {
                    return true;
                }else{
                    # Devuelvo el nombre de la funcion y texto
                    new LogFiles(__FUNCTION__,"No pudo actualizar el pais.");
                }
            }else{
                new LogFiles(__FUNCTION__,"El pais debe tener id antes de modificar.");
        }
        return false;
    }


    /**
     * Remove country by id
     * 
     * @param   integer $idCountry  Id del pais
     * @param   string  $name       Nombre del pais
     * @return  boolean
     */
    function removeCountryById($idCountry)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "DELETE FROM country WHERE idCountry='$idCountry'";

        if($result = $mysqli->query($sqlProcedure))
        {
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo eliminar el pais.");
        }
        return false;
    }

     /**
     * List of countries
     * 
     * @return  array(Country)
     */
    function getListOfCountries()
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM country";

        if($result = $mysqli->query($sqlProcedure))
        {
                $listaCountries = array();
                while ($row = $result->fetch_assoc())
                {
                    $listaCountries[] = $row;
                }
                return $listaCountries;

        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver todos los paises.");
            header(ERROR_404);
        }
        return null;
    }

    /**
     * Get id country
     * @return integer
     */
    function getIdCountry()
    {
        return $this->idCountry;
    }
    /**
     * Get country name
     * @return string
     */
    function getName()
    {
        return $this->name;
    }
}
?>