<?php
/**
 * Class Category
 *
 * @package     Myapp
 * @subpackage  User
 * @author      Rodrigo Juan Martinez <mirodrigom@gmail.com>
 * @version     v.1.0 (03/06/2018)
 * @copyright   Copyright (c) 2016, Rodrigo Martinez
 */

require_once(dirname(__FILE__) . "/mysql.php");
require_once(dirname(__FILE__) . "/logFiles.php");

/*
*
* Clase Categoria
*
*
*/

class Category
{
    public $idCategory;
    public $idSuperCategory;
    public $name;

    function __construct($idCategory = null, $idSuperCategory = null, $name = null)
    {
        $this->idCategory = $idCategory;
        $this->idSuperCategory = $idSuperCategory;
        $this->name = $name;
    }


    /**
     * Insert one category
     * 
     * @param   integer $idCategory  Id de la categoria
     * @param   string  $name       Nombre de la categoria
     * @return  boolean
     */
    function insertCategory($idSuperCategory, $name)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "INSERT INTO category (idSuperCategory, name) VALUES ('$idSuperCategory', '$name')";

        if($result = $mysqli->query($sqlProcedure))
        {
            $this->idCategory = $mysqli->insert_id;
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo insertar la categoria.");
        }
        return false;
    }

    /**
     * Find category by name
     * 
     * @param   string  $nombre Nombre de la categoria
     * @return  void
     */
    function findCategoryByName($nombre)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM category WHERE name='$nombre' LIMIT 1";
        
        if($result = $mysqli->query($sqlProcedure))
        {
            
            if(mysqli_num_rows($result) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idCategory = $row["idCategory"];
                $this->idSuperCategory = $row["idSuperCategory"];
                $this->name = $row["name"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver la categoria.");
            header(ERROR_404);
        }
    }

     /**
     * Find one category by id
     * 
     * @param   integer $id ID de la categoria
     * @return  void
     */
    function findCategoryById($id)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM category WHERE idCategory='$id' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            if(mysqli_num_rows($result) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idCategory = $row["idCategory"];
                $this->idSuperCategory = $row["idSuperCategory"];
                $this->name = $row["name"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver la categoria");
            header(ERROR_404);
        }
    }

     /**
     * Update city by idCity
     * 
     * @param   integer $idCategory     Id de la categoria
     * @param   integer $idSuperCategory  Id de la categoria padre
     * @param   string  $name       Nombre de la categoria
     * @return  boolean
     */
    function changeCategoryById($idCategory = null, $idSuperCategory = null, $name = "")
    {
        if($idCategory != null)
        {
            $queryModified = null;
            // Chequeo que las variables no sean null para ver si hay algo q modificar o no..
            if($name != "")
            {
                $queryModified .= "name='".$name."',";
            }

            if($idSuperCategory != null)
            {
                $queryModified .= "idCountry='".$idSuperCategory."',";
            }

            
            if($queryModified != null)
            {
                $queryModified = rtrim($queryModified,",");
                $db = Database::getInstance();
                $mysqli = $db->getConnection();
                
                $sqlProcedure = "UPDATE category SET $queryModified WHERE idCategory='$idCategory'";
                
                    if($result = $mysqli->query($sqlProcedure))
                    {
                        return true;
                    }else{
                        # Devuelvo el nombre de la funcion y texto
                        new LogFiles(__FUNCTION__,"No pudo actualizar la categoria.");
                    }
            }else{
                new LogFiles(__FUNCTION__,"No pudo actualizar la categoria porque no llegaron valores.");
            }
        }else{
            new LogFiles(__FUNCTION__,"La categoria debe tener id antes de modificar.");
        }
        return false;
    }


    /**
     * Remove category by id
     * 
     * @param   integer $idCategory     Id de la categoria
     * @return  boolean
     */
    function removeCategoryById($idCategory)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "DELETE FROM category WHERE idCategory='$idCategory'";

        if($result = $mysqli->query($sqlProcedure))
        {
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo eliminar la categoria.");
        }
        return false;
    }

     /**
     * List of cities
     * 
     * @return  array(Category)
     */
    function getListOfSuperCategories()
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM category WHERE idSuperCategory = '0'";

        if($result = $mysqli->query($sqlProcedure))
        {
                $listaSuperCategories = array();
                while ($row = $result->fetch_assoc())
                {
                    $listaSuperCategories[] = $row;
                }
                return $listaSuperCategories;

        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver todos las categorias");
            header(ERROR_404);
        }
        return null;
    }

     /**
     * List of subcategories
     * 
     * @return  array(Category)
     */
    function getListOfCategories()
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM category WHERE NOT idSuperCategory = '0'";

        if($result = $mysqli->query($sqlProcedure))
        {
                $listaSubCategories = array();
                while ($row = $result->fetch_assoc())
                {
                    $listaSubCategories[] = $row;
                }
                return $listaSubCategories;

        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver todos las categorias");
            header(ERROR_404);
        }
        return null;
    }
}
?>