<?php
include("database.class.php");
class Product {

      private $db;
     
  
      public function __construct() {
  
          $this->db = new Database(); 

      }
      
  

    public function getAllProducts() {
        $sql="SELECT * FROM Products ;";
        $query = $this->db->link->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function insertProduct ($productID, $productName, $description, $unitPrice, $category, $unitsInStock,$image){
        $sql = "INSERT INTO Products (ProductID, ProductName, Description, UnitPrice, Category, UnitsInStock, Image) VALUES (?,?,?,?,?,?,?)";
        $query = $this->db->link->prepare($sql)->execute([$productID, $productName, $description, $unitPrice, $category, $unitsInStock, $image]);
        $result=$query;

        return $result;
     
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

