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
* Clase user
*
*
*/
class User
{

    private $id;
    private $username;
    private $password;
    private $email;
    private $state;
    private $privilege;

    /**
     * Find one user by name
     * 
     * @param   string  $nombre Nombre del usuario
     * @return  void
     */
    function findUserByName($nombre)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM users WHERE username='$nombre' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            if(count($row) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->id = $row["id"];
                $this->username = $row["username"];
                $this->password = $row["password"];
                $this->email = $row["email"];
                $this->state = $row["state"];
                $this->privilege = $row["privilege"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver el usuario.");
            header(ERROR_404);
        }
    }

     /**
     * Find one user by id
     * 
     * @param   integer $id ID del usuario
     * @return  void
     */
    function findUserById($id)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM users WHERE id='$id' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            if(count($row) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->id = $row["id"];
                $this->username = $row["username"];
                $this->password = $row["password"];
                $this->email = $row["email"];
                $this->state = $row["state"];
                $this->privilege = $row["privilege"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver el usuario.");
            header(ERROR_404);
        }
    }

     /**
     * Find one user by email
     * 
     * @param   string  $email  Email del usuario
     * @return  void
     */
    function findUserByEmail($email)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM users WHERE email='$email' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(count($row) > 0)
            {
                $this->id = $row["id"];
                $this->username = $row["username"];
                $this->password = $row["password"];
                $this->email = $row["email"];
                $this->state = $row["state"];
                $this->privilege = $row["privilege"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver el usuario.");
            header(ERROR_404);
        }
    }

    /**
     * Update state by email
     * 
     * @param   string  $email  Email del usuario
     * @param   string  $state  Nuevo estado
     * @return  boolean
     */
    function changeStateByEmail($email,$state)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "UPDATE users SET state='$state' WHERE email='$email'";

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
     * Update state by id
     * 
     * @param   string  $id Id del usuario
     * @param   string  $state  Nuevo estado
     * @return  boolean
     */
    function changeStateById($id,$state)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "UPDATE users SET state='$state' WHERE id='$id'";

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
     * Update state by username
     * 
     * @param string $username  Nombre del usuario
     * @param string $state Nuevo estado
     * @return boolean
     */
    function changeStateByUsername($username,$state)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "UPDATE users SET state='$state' WHERE usename='$username'";

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
     * Find multiples users by state
     * 
     * @param   string  $state Estado del usuario
     * @return void
     */
    function findUsersByEmail($state)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM users WHERE state='$state'";

        if($result = $mysqli->query($sqlProcedure))
        {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(count($row) > 0)
            {
                $this->id = $row["id"];
                $this->username = $row["username"];
                $this->password = $row["password"];
                $this->email = $row["email"];
                $this->state = $row["state"];
                $this->privilege = $row["privilege"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver usuarios.");
            header(ERROR_404);
        }
    }



    /**
     * Get id
     * @return integer
     */
    function getId()
    {
        return $this->id;
    }
    /**
     * Get username
     * @return string
     */
    function getUsername()
    {
        return $this->username;
    }

    /**
     * Get email
     * @return string
     */
    function getEmail()
    {
        return $this->email;
    }

    /**
     * Get password
     * @return string
     */
    function getPassword()
    {
        return $this->password;
    }

    /**
     * Get state
     * @return string
     */
    function getState()
    {
        return $this->state;
    }

    /**
     * Get privilege
     * @return string
     */
    function getPrivilege()
    {
        return $this->privilege;
    }
}

//Test:
$us = new User();
//var_dump($us);
$us->findUserByName("rodrigo");
echo $us->getUsername();
?>