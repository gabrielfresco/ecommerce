<?php
/**
 * Class Store
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
* Clase Store
*
*
*/

class Store
{

    private $idStore;
    private $idAddress;
    private $name;
    private $telephone;

    /**
     * Find store by name
     * 
     * @param   string  $nombre Nombre de la tienda
     * @return  void
     */
    function findStoreByName($nombre)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM store WHERE name='$nombre' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(count($row) > 0)
            {
                $this->idStore = $row["idStore"];
                $this->idAddress = $row["idAddress"];
                $this->name = $row["name"];
                $this->telephone = $row["telephone"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver la tienda.");
            header(ERROR_404);
        }
    }

     /**
     * Find one store by id
     * 
     * @param   integer $id ID de la tienda
     * @return  void
     */
    function findStoreById($id)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM store WHERE idStore='$id' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            if(count($row) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idStore = $row["idStore"];
                $this->idAddress = $row["idAddress"];
                $this->name = $row["name"];
                $this->telephone = $row["telephone"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver la tienda.");
            header(ERROR_404);
        }
    }

    /**
     * Update store by id
     * 
     * @param   integer $idCity     Id de la tienda
     * @param   integer $idAddress  Id de la direccion
     * @param   string  $name       Nombre de la tienda
     * @param   string  $telphone   telefono
     * @return  boolean
     */
    function changeStoreById($idStore,$idAddress,$name,$telephone)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "UPDATE city SET name='$name', idAddress='$idAddress', telephone='$telephone' WHERE idCity='$idCountry'";

        if($result = $mysqli->query($sqlProcedure))
        {
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo actualizar la tienda.");
        }
        return false;
    }

    /**
     * Get id store
     * @return integer
     */
    function getIdStore()
    {
        return $this->idStore;
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
     * Get store name
     * @return string
     */
    function getName()
    {
        return $this->name;
    }

    /**
     * Get store telephone
     * @return string
     */
    function getTelephone()
    {
        return $this->telephone;
    }
}
?>