<?php
/**
 * Class Location
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
* Clase Location
*
*
*/

class Location
{
    public $idLocation;
    public $idCity;
    public $name;

    function __construct($idLocation = null, $idCity = null, $name = null)
    {
        $this->idLocation = $idLocation;
        $this->idCity = $idCity;
        $this->name = $name;
    }


    /**
     * Insert one location
     * 
     * @param   integer $idCity     Id de la ciudad
     * @param   string  $name       Nombre de la localidad
     * @return  boolean
     */
    function insertLocation($idCity,$name)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "INSERT INTO location (idCity,name) VALUES ('$idCity','$name')";

        if($result = $mysqli->query($sqlProcedure))
        {
            $this->idLocation = $mysqli->insert_id;
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo insertar la localidad.");
        }
        return false;
    }

    /**
     * Find location by name
     * 
     * @param   string  $nombre Nombre de la localidad
     * @return  void
     */
    function findLocationByName($nombre)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM location WHERE name='$nombre' LIMIT 1";
        
        if($result = $mysqli->query($sqlProcedure))
        {
            
            if(mysqli_num_rows($result) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idLocation = $row["idLocation"];
                $this->idCity = $row["idCity"];
                $this->name = $row["name"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver la localidad");
            header(ERROR_404);
        }
    }

     /**
     * Find one location by id
     * 
     * @param   integer $id ID de la location
     * @return  void
     */
    function findLocationById($id)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM location WHERE idLocation='$id' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            
            if(mysqli_num_rows($result) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idLocation = $row["idLocation"];
                $this->idCity = $row["idCity"];
                $this->name = $row["name"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver la localidad");
            header(ERROR_404);
        }
    }

     /**
     * Update location by idLocation
     * 
     * @param   integer $idLocation     Id de la localidad
     * @param   integer $idCity  Id de la ciudad
     * @param   string  $name       Nombre de la localidad
     * @return  boolean
     */
    function changeLocationById($idLocation = null, $idCity = null, $name = "")
    {
        if($idLocation != null)
        {
            $queryModified = null;
            // Chequeo que las variables no sean null para ver si hay algo q modificar o no..
            if($name != "")
            {
                $queryModified .= "name='".$name."',";
            }

            if($idCity != null)
            {
                $queryModified .= "idCity='".$idCity."',";
            }

            $queryModified = rtrim($queryModified,",");
            if($queryModified != null)
            {
                $db = Database::getInstance();
                $mysqli = $db->getConnection();
                
                $sqlProcedure = "UPDATE location SET $queryModified WHERE idLocation='$idLocation'";
                var_dump($sqlProcedure);
                    if($result = $mysqli->query($sqlProcedure))
                    {
                        return true;
                    }else{
                        # Devuelvo el nombre de la funcion y texto
                        new LogFiles(__FUNCTION__,"No pudo actualizar la localidad.");
                    }
            }else{
                new LogFiles(__FUNCTION__,"No pudo actualizar la localidad porque no llegaron valores.");
            }
        }else{
            new LogFiles(__FUNCTION__,"La localidad debe tener id antes de modificar.");
        }
        return false;
    }


    /**
     * Remove location by id
     * 
     * @param   integer $idLocation     Id de la localidad
     * @return  boolean
     */
    function removeLocationById($idLocation)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "DELETE FROM location WHERE idLocation='$idLocation'";

        if($result = $mysqli->query($sqlProcedure))
        {
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo eliminar la localidad.");
        }
        return false;
    }

     /**
     * List of cities
     * 
     * @return  array(Location)
     */
    function getListOfLocations()
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM location";

        if($result = $mysqli->query($sqlProcedure))
        {
                $listaLocations = array();
                while ($row = $result->fetch_assoc())
                {
                    $listaLocations[] = $row;
                }
                return $listaLocations;

        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver todos las localidades");
            header(ERROR_404);
        }
        return null;
    }
}
?>