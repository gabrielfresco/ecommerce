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

require_once("mysql.php");
require_once("logFiles.php");

/*
*
* Clase Address
*
*
*/

class Address
{

    private $idAddress;
    private $idLocation;
    private $address1;
    private $address2;
    private $postalCode;
    /**
     * Find addres by name
     * 
     * @param   string  $nombre Nombre del la direccion
     * @return  void
     */
    function findAddresByName($nombre)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM address WHERE address1='$nombre' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(count($row) > 0)
            {
                $this->idAddress = $row["idAddress"];
                $this->idLocation = $row["idLocation"];
                $this->address1 = $row["address1"];
                $this->address2 = $row["address2"];
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
            if(count($row) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idAddress = $row["idAddress"];
                $this->idLocation = $row["idLocation"];
                $this->address1 = $row["address1"];
                $this->address2 = $row["address2"];
                $this->postalCode = $row["postalCode"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver la direccion.");
            header(ERROR_404);
        }
    }

    /**
     * Update state by id
     * 
     * @param   integer  $idAddress Id del usuario
     * @param   integer  $idLocation  Id de la localidad
     * @param   string  $address1  direccion 1
     * @param   string  $address2  direccion 2
     * @param   integer  $postalCode  codigo postal
     * @return  boolean
     */
    function changeAddressById($idAddress,$idLocation,$address1,$address2,$postalCode)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "UPDATE address SET idLocation='$idLocation', address1='$address1', address2='$address2', postalCode='$postalCode' WHERE idAddress='$idAddress'";

        if($result = $mysqli->query($sqlProcedure))
        {
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo actualizar la direccion.");
        }
        return false;
    }

    /**
     * Get id address
     * @return integer
     */
    function getIdAddress()
    {
        return $this->idAddress;
    }
    /**
     * Get id location
     * @return string
     */
    function getIdLocalidad()
    {
        return $this->idLocation;
    }

    /**
     * Get first address
     * @return string
     */
    function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Get second address
     * @return string
     */
    function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Get postal code
     * @return string
     */
    function getPostalCode()
    {
        return $this->postalCode;
    }
}

?>