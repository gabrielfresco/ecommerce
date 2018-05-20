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

require_once("mysql.php");
require_once("logFiles.php");

/*
*
* Clase City
*
*
*/

class City
{

    private $idCity;
    private $idCountry;
    private $name;
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
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(count($row) > 0)
            {
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
            if(count($row) > 0)
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
     * Update country by id
     * 
     * @param   integer $idCity     Id de la ciudad
     * @param   integer $idCountry  Id del pais
     * @param   string  $name       Nombre del pais
     * @return  boolean
     */
    function changeCityById($idCity,$idCountry,$name)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "UPDATE city SET name='$name', idCountry='$idCountry' WHERE idCity='$idCountry'";

        if($result = $mysqli->query($sqlProcedure))
        {
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo actualizar la ciudad.");
        }
        return false;
    }

    /**
     * Get id city
     * @return integer
     */
    function getIdCity()
    {
        return $this->idCity;
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
     * Get city name
     * @return string
     */
    function getName()
    {
        return $this->name;
    }
}
?>