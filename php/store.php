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
* Clase Store
*
*
*/

class Store
{
    public $idStore;
    public $idAddress;
    public $name;
    public $telephone;
    public $available;
    public $email;

    function __construct($idStore = null, $idAddress = null, $name = null, $telephone = null, $available = null, $email = null)
    {
        $this->idStore = $idStore;
        $this->idAddress = $idAddress;
        $this->name = $name;
        $this->available = $available;
        $this->email = $email;
    }


    /**
     * Insert one store
     * 
     * @param   string  $idAddress  Id de la direccion
     * @param   string  $name       Nombre de la sucursal
     * @param   string  $telephone  telefono de la sucursal
     * @param   string  $available  disponibilidad de la sucursal
     * @param   string  $email      email de la sucursal
     * @return  boolean
     */
    function insertStore($idAddress,$name,$telephone,$available,$email)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "INSERT INTO store (idAddress,name,telephone,available,email) VALUES ('$idAddress','$name','$telephone','$available','$email')";

        if($result = $mysqli->query($sqlProcedure))
        {
            $this->idStore = $mysqli->insert_id;
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo insertar la sucursal.");
        }
        return false;
    }

    /**
     * Find store by name
     * 
     * @param   string  $nombre Nombre de la sucursal
     * @return  void
     */
    function findStoreByName($nombre)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM store WHERE name='$nombre' LIMIT 1";
        
        if($result = $mysqli->query($sqlProcedure))
        {
            
            if(mysqli_num_rows($result) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idStore = $row["idStore"];
                $this->idAddress = $row["idAddress"];
                $this->name = $row["name"];
                $this->telephone = $row["telephone"];
                $this->available = $row["available"];
                $this->email = $row["email"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver la sucursal.");
            header(ERROR_404);
        }
    }

     /**
     * Find one store by id
     * 
     * @param   integer $id ID de la sucursal
     * @return  void
     */
    function findStoreById($id)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM store WHERE idStore='$id' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            if(mysqli_num_rows($result) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idStore = $row["idStore"];
                $this->idAddress = $row["idAddress"];
                $this->name = $row["name"];
                $this->telephone = $row["telephone"];
                $this->available = $row["available"];
                $this->email = $row["email"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver la sucursal");
            header(ERROR_404);
        }
    }

     /**
     * Update city by idStore
     * 
     * @param   integer $idStore    Id de la sucursal
     * @param   integer $idAddress  Id de la direccion
     * @param   string  $name       Nombre de la sucursal
     * @param   string  $telephone  Telefono de la sucursal
     * @return  boolean
     */
    function changeStoreById($idStore = null, $idAddress = null, $name = "", $telephone = "", $available = "", $email = "")
    {
        if($idStore != null)
        {
            $queryModified = null;
            // Chequeo que las variables no sean null para ver si hay algo q modificar o no..
            if($name != "")
            {
                $queryModified .= "name='".$name."',";
            }

            if($telephone != "")
            {
                $queryModified .= "telephone='".$telephone."',";
            }

            if($email != "")
            {
                $queryModified .= "email='".$email."',";
            }

            if($available != "")
            {
                $queryModified .= "available='".$available."',";
            }



            
            if($queryModified != null)
            {
                $queryModified = rtrim($queryModified,",");
                $db = Database::getInstance();
                $mysqli = $db->getConnection();
                
                $sqlProcedure = "UPDATE store SET $queryModified WHERE idStore='$idStore'";
                
                    if($result = $mysqli->query($sqlProcedure))
                    {
                        return true;
                    }else{
                        # Devuelvo el nombre de la funcion y texto
                        new LogFiles(__FUNCTION__,"No pudo actualizar la sucursal.");
                    }
            }else{
                new LogFiles(__FUNCTION__,"No pudo actualizar la sucursal porque no llegaron valores.");
            }
        }else{
            new LogFiles(__FUNCTION__,"La sucursal debe tener id antes de modificar.");
        }
        return false;
    }


    /**
     * Remove store by id
     * 
     * @param   integer $idStore     Id de la sucursal
     * @return  boolean
     */
    function removeStoreById($idStore)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "DELETE FROM store WHERE idStore='$idStore'";

        if($result = $mysqli->query($sqlProcedure))
        {
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo eliminar la sucursal.");
        }
        return false;
    }

     /**
     * List of stores
     * 
     * @return  array(Store)
     */
    function getListOfStores()
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM store";

        if($result = $mysqli->query($sqlProcedure))
        {
                $listaStores = array();
                while ($row = $result->fetch_assoc())
                {
                    $listaStores[] = $row;
                }
                return $listaStores;

        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver todos las sucursales");
            header(ERROR_404);
        }
        return null;
    }
}
?>