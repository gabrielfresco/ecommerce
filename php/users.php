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
    const STATE_ACTIVE = 1;
    const STATE_BLOCKED = 2;
    const STATE_DELETED = 3;

    const PRIVILEGE_ADMIN = 1;
    const PRIVILEGE_BUYER = 2;

    private $id;
    private $firstName;
    private $lastName;
    private $password;
    private $email;
    private $state;
    private $privilege;
    private $createdAt;
    private $dni;
    private $idAddressList;

    function __construct() {
        $this->createdAt = new DateTime();
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
        $sqlProcedure = "SELECT * FROM user WHERE id='$id' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            if(count($row) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->id = $row["id"];
                $this->fistName = $row["firstName"];
                $this->lastName = $row["lastName"];
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
        $sqlProcedure = "SELECT * FROM user WHERE email='$email' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(count($row) > 0)
            {
                $this->id = $row["id"];
                $this->fistName = $row["firstName"];
                $this->lastName = $row["lastName"];
                $this->password = $row["password"];
                $this->email = $row["email"];
                $this->state = $row["state"];
                $this->privilege = $row["privilege"];
                $this->createAt = $row["createdAt"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver el usuario. " . $sqlProcedure);
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
     * Find multiples users by state
     * 
     * @param   string  $state Estado del usuario
     * @return void
     */
    function findUsersByState($state)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM user WHERE state='$state'";

        if($result = $mysqli->query($sqlProcedure))
        {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(count($row) > 0)
            {
                $this->id = $row["id"];
                $this->lastName = $row["lastname"];
                $this->firstName = $row["firstname"];
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
     * Get firstname
     * @return string
     */
    function getFirstname()
    {
        return $this->firstName;
    }

       /**
     * Get lastname
     * @return string
     */
     function getLastname()
     {
         return $this->lastName;
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

        /**
     * Get id
     * @return integer
     */
     function setId($id)
     {
         $this->id = $id;
     }
     /**
      * Get firstname
      * @return string
      */
     function setFirstname($firstName)
     {
         $this->firstName = $firstName;
     }
 
        /**
      * Get lastname
      * @return string
      */
      function setLastname($lastname)
      {
          $this->lastName = $lastname;
      }
  
 
     /**
      * Get email
      * @return string
      */
     function setEmail($email)
     {
         $this->email = $email;
     }
 
     /**
      * Get password
      * @return string
      */
     function setPassword($password)
     {
        $this->password = $password;
     }
 
     /**
      * Get state
      * @return string
      */
     function setState($state)
     {
        $this->state = $state;
     }
 
     /**
      * Get privilege
      * @return string
      */
     function setPrivilege($privilege)
     {
        $this->privilege = $privilege;
     }
    
     function insert()
     {
         $date = $this->createdAt->format("y/m/d H:i");
         $db = Database::getInstance();
         $mysqli = $db->getConnection(); 
         $sqlProcedure = "INSERT INTO user (
         email,
         password,
         state,
         privilege,
         createdAt,
         idAddressList,
         dni,
         firstName,
         lastName) VALUES ('$this->email','$this->password',$this->state,$this->privilege, '$date', null,null,'$this->firstName','$this->lastName')";
 
         if($result = $mysqli->query($sqlProcedure))
         {
             $this->id = $mysqli->insert_id;
             return true;
         }else{
             # Devuelvo el nombre de la funcion y texto
             new LogFiles(__FUNCTION__,"No pudo insertar el usuario.");
             new LogFiles(__FUNCTION__, $sqlProcedure);
         }
         return false;
     }
}
?>