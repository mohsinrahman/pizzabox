<?php
include("database.class.php");
class Product {

      private $db;
     
  
      public function __construct() {
  
          $this->db = new Database(); 

      }
      
  

    public function getAllProducts() {
        $sql="SELECT * FROM Products ";
        $query = $this->db->link->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }                         
    public function addProduct($productCategoryId,$productName,$productDescription,$productPrice,$productCategory, $productUnitInStock, $productImage){
        try{
        $this->db->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO Products (CategoryID, ProductName, ProductDescription, UnitPrice, Category, UnitsInStock, ProductImage) 
                            VALUES ('$productCategoryId','$productName','$productDescription','$productPrice','$productCategory', '$productUnitInStock', '$productImage')";
        /* $query = $this->db->link->prepare($sql) */
        $this->db->link->exec($sql);
            
        return "New product created successfully";
        }
        catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    $this->db->link = null;
    }

    public function getAllOfThisCategory($catergoryChoosen) {
            $sql=" SELECT ProductID FROM Products 
            WHERE Category='$catergoryChoosen';";
            $query = $this->db->link->prepare($sql);
            $query->execute();

            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            return $result;
    
      
}    
}

?>

