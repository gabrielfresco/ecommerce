<?php
/**
 * Class User
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
* Clase Location
*
*
*/


class Location
{

    private $name;
    private $idLocation;
    private $idCity;

    /**
     * Find one user by name
     * 
     * @param   string  $nombre Nombre del usuario
     * @return  void
     */
    function findLocationByName($name)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM location WHERE name='$name' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(count($row) > 0)
            {
                
                $this->idLocation = $row["idLocation"];
                $this->idCity = $row["idCity"];
                $this->name = $row["name"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver el nombre de localidad.");
            header(ERROR_404);
        }
    }

     /**
     * Find one location by id
     * 
     * @param   integer $id ID de la localidad
     * @return  void
     */
    function findLocationById($id)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM location WHERE idLocation='$id' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            if(count($row) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idLocation = $row["idLocation"];
                $this->idCity = $row["idCity"];
                $this->name = $row["name"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver la localidad.");
            header(ERROR_404);
        }
    }

    /**
     * Update name by id
     * 
     * @param   string  $name   Nombre de la localidad del usuario
     * @param   string  $id     Id de la localidad
     * @return  boolean
     */   
    function changeNameById($name,$id)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "UPDATE location SET name='$name' WHERE idLocation='$id'";

        if($result = $mysqli->query($sqlProcedure))
        {
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver el usuario.");
        }
        return false;
    }

    /**
     * Update idLocation by id
     * 
     * @param   string  $idLocation Id de la localidad
     * @param   string  $idCity     Id de la ciudad
     * @return  boolean
     */
    function changeIdCityByIdLocation($idLocation,$idCity)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "UPDATE location SET idCity='idCity' WHERE idLocation='$idLocation'";

        if($result = $mysqli->query($sqlProcedure))
        {
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver el usuario.");
        }
        return false;
    }

    /**
     * Get id
     * @return integer
     */
    function getIdLocation()
    {
        return $this->idLocation;
    }
    /**
     * Get Location name
     * @return string
     */
    function getLocation()
    {
        return $this->name;
    }

    /**
     * Get id
     * @return string
     */
    function getIdCity()
    {
        return $this->idCity;
    }
}

//Test:
$location = new Location();
//var_dump($us);
$location->findLocationByName("Mar del plata");
echo $location->getUsername();
?>