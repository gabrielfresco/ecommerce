<?php
/**
 * Class Product
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
* Clase Producto
*
*
*/

// TODO: Cargar imaagen
// http://www.marcorpsa.com/ee/t1525.html
class Product
{
    public $idProduct;
    public $idCategory;
    public $name;
    public $width;
    public $length;
    public $depth;
    public $price;
    public $warranty;

    function __construct($idProduct = null, $idCategory = null, $name = null, $width = null, $length = null, $depth = null, $price = null, $warranty = null)
    {
        $this->idProduct = $idProduct;
        $this->idCategory = $idCategory;
        $this->name = $name;
        $this->width = $width;
        $this->length = $length;
        $this->depth = $depth;
        $this->price = $price;
        $this->warranty = $warranty;
    }


    /**
     * Insert one product
     * 
     * @param   integer $idCategory         Id del la categoria
     * @param   integer $idDescription      Id del descripcion
     * @param   string  $shortDescription   Descripcion
     * @param   float   $price              Precio
     * @param   string  $warranty           Garantia
     * @return  boolean
     */
    function insertProduct($idCategory,$name,$width,$depth,$length,$price,$warranty)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "INSERT INTO product (idCategory, name, width, depth, length, price, warranty) VALUES ('$idCategory','$name','$width','$depth','$length','$price','$warranty')";
        if($result = $mysqli->query($sqlProcedure))
        {
            $this->idCity = $mysqli->insert_id;
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo insertar el producto.");
        }
        return false;
    }

    /**
     * Find product by name
     * 
     * @param   string  $nombre Nombre del producto
     * @return  void
     */
    function findProductByName($nombre)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM product WHERE name='$nombre' LIMIT 1";
        
        if($result = $mysqli->query($sqlProcedure))
        {
            
            if(mysqli_num_rows($result) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idProduct = $row["idProduct"];
                $this->idCategory = $row["idCategory"];
                $this->name = $row["name"];
                $this->width = $row["width"];
                $this->length = $row["length"];
                $this->depth = $row["depth"];
                $this->price = $row["price"];
                $this->warranty = $row["warranty"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver el producto.");
            header(ERROR_404);
        }
    }

     /**
     * Find one product by id
     * 
     * @param   integer $id ID del producto
     * @return  void
     */
    function findProductById($id)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM product WHERE idProduct='$id' LIMIT 1";

        if($result = $mysqli->query($sqlProcedure))
        {
            if(mysqli_num_rows($result) > 0)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->idProduct = $row["idProduct"];
                $this->idCategory = $row["idCategory"];
                $this->name = $row["name"];
                $this->width = $row["width"];
                $this->length = $row["length"];
                $this->depth = $row["depth"];
                $this->price = $row["price"];
                $this->warranty = $row["warranty"];
            }
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver el producto");
            header(ERROR_404);
        }
    }

     /**
     * Update product by idProduct
     * 
     * @param   integer $idProduct      Id del producto
     * @param   integer $idCategory     Id de la categoria
     * @param   string  $name           Nombre del producto
     * @param   float   $width          Ancho del producto
     * @param   float   $heigth         Alto del producto
     * @param   float   $depth           depthundidad del producto
     * @param   float   $price          Precio del producto
     * @param   string  $warranty       Garantia del producto
     * @return  boolean
     */
    function changeProductById($idProduct = null, $idCategory = null, $name = null, $width = null, $length = null, $depth = null, $price = null, $warranty = null)
    {
        if($idProduct != null)
        {
            $queryModified = null;
            // Chequeo que las variables no sean null para ver si hay algo q modificar o no..
            if($idCategory != null)
            {
                $queryModified .= "idCategory='".$idCategory."',";
            }

            if($name!= null)
            {
                $queryModified .= "name='".$name."',";
            }

            if($width!= null)
            {
                $queryModified .= "width='".$width."',";
            }

            if($length!= null)
            {
                $queryModified .= "length='".$length."',";
            }

            if($depth!= null)
            {
                $queryModified .= "depth='".$depth."',";
            }

            if($price!= null)
            {
                $queryModified .= "price='".$price."',";
            }

            if($warranty!= null)
            {
                $queryModified .= "warranty='".$warranty."',";
            }

            
            if($queryModified != null)
            {
                $queryModified = rtrim($queryModified,",");
                $db = Database::getInstance();
                $mysqli = $db->getConnection();
                
                $sqlProcedure = "UPDATE product SET $queryModified WHERE idProduct='$idProduct'";
                
                    if($result = $mysqli->query($sqlProcedure))
                    {
                        return true;
                    }else{
                        # Devuelvo el nombre de la funcion y texto
                        new LogFiles(__FUNCTION__,"No pudo actualizar el producto.");
                    }
            }else{
                new LogFiles(__FUNCTION__,"No pudo actualizar el producto porque no llegaron valores.");
            }
        }else{
            new LogFiles(__FUNCTION__,"El producto debe tener id antes de modificar.");
        }
        return false;
    }


    /**
     * Remove product by id
     * 
     * @param   integer $idProduct     Id del producto
     * @return  boolean
     */
    function removeProductById($idProduct)
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "DELETE FROM product WHERE idProduct='$idProduct'";

        if($result = $mysqli->query($sqlProcedure))
        {
            return true;
        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No pudo eliminar el producto.");
        }
        return false;
    }

     /**
     * List of products
     * 
     * @return  array(Product)
     */
    function getListOfProducts()
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection(); 
        $sqlProcedure = "SELECT * FROM product";

        if($result = $mysqli->query($sqlProcedure))
        {
                $listaProducts = array();
                while ($row = $result->fetch_assoc())
                {
                    $listaProducts[] = $row;
                }
                return $listaProducts;

        }else{
            # Devuelvo el nombre de la funcion y texto
            new LogFiles(__FUNCTION__,"No puede devolver todos los productos");
            header(ERROR_404);
        }
        return null;
    }
}
?>