<?php
/**
 * Class Address
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
* Clase Direccion
*
*
*/

class Address
{
    public $idAddress;
    public $idLocation;
    public $dir;
    public $postalCode;

    function __construct($idAddress = null, $idLocation = null, $dir = null, $postalCode = null)
    {
        $this->idAddress = $idAddress;
        $this->idLocation = $idLocation;
        $this->dir = $dir;
        $this->postalCode = $postalCode;
    }

    /**
     * Insert one address
     * 
     * @param   integer $idAddress  Id de la direccion
     * @param   integer $idLocation Id de la localidad
     * @param   string  $address    Direccion
     * @param   string  $postalCode    Codigo Postal
     * @return  boolean
     */
    function insertAddress($idLocation, $dir, $postalCode)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "INSERT INTO address (idLocation,dir,postalCode) VALUES ('$idLocation','$dir','$postalCode')";

        if($result = $mysqli->query($sqlProcedure))
        {
            $this->idAddress = $mysqli->insert_id;
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo insertar la direccion.");
        }
        return false;
    }

    /**
     * Find Address by name
     * 
     * @param   string  $nombre Direccion
     * @return  void
     */
    function findAddressByName($nombre)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM address WHERE dir='$nombre' LIMIT 1";
        
        if($result = $mysqli->query($sqlProcedure))
        {
            
            if(mysqli_num_rows($result) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idAddress = $row["idAddress"];
                $this->idLocation = $row["idLocation"];
                $this->dir = $row["dir"];
                $this->postalCode = $row["postalCode"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver la direccion.");
            header(ERROR_404);
        }
    }

     /**
     * Find one address by id
     * 
     * @param   integer $id ID de la direccion
     * @return  void
     */
    function findAddressById($id)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM address WHERE idAddress='$id' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            if(mysqli_num_rows($result) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idAddress = $row["idAddress"];
                $this->idLocation = $row["idLocation"];
                $this->dir = $row["dir"];
                $this->postalCode = $row["postalCode"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver la direccion");
            header(ERROR_404);
        }
    }

     /**
     * Update Address by idAddress
     * 
     * @param   integer $idAddress      Id de la direccion
     * @param   integer $idLocation     Id de la localidad
     * @param   string  $address        Direccion
     * @param   string  $postalCode     Codigo postal
     * 
     * @return  boolean
     */
    /*
    function changeAddressById($idCity = null, $idCountry = null, $name = "")
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
*/

    /**
     * Remove city by id
     * 
     * @param   integer $idAddres     Id de la direccion
     * @return  boolean
     */
    function removeAddressById($idAddress)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "DELETE FROM address WHERE idAddress='$idAddress'";

        if($result = $mysqli->query($sqlProcedure))
        {
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo eliminar la direccion.");
        }
        return false;
    }

     /**
     * List of cities
     * 
     * @return  array(Address)
     */
    function getListOfAddress()
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM address";

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
            new LogFiles(__FUNCTION__,"No puede devolver todos las Direcciones");
            header(ERROR_404);
        }
        return null;
    }
}
?>