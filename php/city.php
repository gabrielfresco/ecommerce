<?php
/**
 * Class City
 *
 * @package     Myapp
 * @subpackage  User
 * @author      Rodrigo Juan Martinez <mirodrigom@gmail.com>
 * @version     v.1.0 (25/03/2018)
 * @copyright   Copyright (c) 2016, Rodrigo Martinez
 */

require_once(dirname(__FILE__) . "/mysql.php");
require_once(dirname(__FILE__) . "/logFiles.php");

/*
*
* Clase Ciudad
*
*
*/

class City
{
    public $idCity;
    public $idCountry;
    public $name;

    function __construct($idCity = null, $idCountry = null, $name = null)
    {
        $this->idCity = $idCity;
        $this->idCountry = $idCountry;
        $this->name = $name;
    }


    /**
     * Insert one city
     * 
     * @param   integer $idCountry  Id del pais
     * @param   string  $name       Nombre de la ciudad
     * @return  boolean
     */
    function insertCity($idCountry,$name)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "INSERT INTO city (idCountry,name) VALUES ('$idCountry','$name')";

        if($result = $mysqli->query($sqlProcedure))
        {
            $this->idCity = $mysqli->insert_id;
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo insertar la ciudad.");
        }
        return false;
    }

    /**
     * Find city by name
     * 
     * @param   string  $nombre Nombre de la ciudad
     * @return  void
     */
    function findCityByName($nombre)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM city WHERE name='$nombre' LIMIT 1";
        
        if($result = $mysqli->query($sqlProcedure))
        {
            
            if(mysqli_num_rows($result) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idCity = $row["idCity"];
                $this->idCountry = $row["idCountry"];
                $this->name = $row["name"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver la ciudad.");
            header(ERROR_404);
        }
    }

     /**
     * Find one city by id
     * 
     * @param   integer $id ID de la ciudad
     * @return  void
     */
    function findCityById($id)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM city WHERE idCity='$id' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            if(mysqli_num_rows($result) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idCity = $row["idCity"];
                $this->idCountry = $row["idCountry"];
                $this->name = $row["name"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver la ciudad");
            header(ERROR_404);
        }
    }

     /**
     * Update city by idCity
     * 
     * @param   integer $idCity     Id de la ciudad
     * @param   integer $idCountry  Id del pais
     * @param   string  $name       Nombre de la ciudad
     * @return  boolean
     */
    function changeCityById($idCity = null, $idCountry = null, $name = "")
    {
        if($idCity != null)
        {
            $queryModified = null;
            // Chequeo que las variables no sean null para ver si hay algo q modificar o no..
            if($name != "")
            {
                $queryModified .= "name='".$name."',";
            }

            if($idCountry != null)
            {
                $queryModified .= "idCountry='".$idCountry."',";
            }

            
            if($queryModified != null)
            {
                $queryModified = rtrim($queryModified,",");
                $db = Database::getInstance();
                $mysqli = $db->getConnection();
                
                $sqlProcedure = "UPDATE city SET $queryModified WHERE idCity='$idCity'";
                
                    if($result = $mysqli->query($sqlProcedure))
                    {
                        return true;
                    }else{
                        # Devuelvo el nombre de la funcion y texto
                        new LogFiles(__FUNCTION__,"No pudo actualizar la ciudad.");
                    }
            }else{
                new LogFiles(__FUNCTION__,"No pudo actualizar la ciudad porque no llegaron valores.");
            }
        }else{
            new LogFiles(__FUNCTION__,"La ciudad debe tener id antes de modificar.");
        }
        return false;
    }


    /**
     * Remove city by id
     * 
     * @param   integer $idCity     Id de la ciudad
     * @return  boolean
     */
    function removeCityById($idCity)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "DELETE FROM city WHERE idCity='$idCity'";

        if($result = $mysqli->query($sqlProcedure))
        {
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo eliminar la ciudad.");
        }
        return false;
    }

     /**
     * List of cities
     * 
     * @return  array(City)
     */
    function getListOfCities()
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM city";

        if($result = $mysqli->query($sqlProcedure))
        {
                $listaCities = array();
                while ($row = $result->fetch_assoc())
                {
                    $listaCities[] = $row;
                }
                return $listaCities;

        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver todos las ciudades");
            header(ERROR_404);
        }
        return null;
    }
}
?>