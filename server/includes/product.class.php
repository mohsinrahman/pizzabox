<?php
include("database.class.php");
class Product {

      private $db;
     
  
      public function __construct() {
  
          $this->db = new Database(); ///obj create

      }
      
  

    public function getAllProducts() {
        $sql="SELECT * FROM Products ;";
        $query = $this->db->link->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        if (empty($result)){
            throw new Exception("No students found", 404);
            exit;
        }

        return $result;
    }
    public function productInserts ($productID, $productName, $description, $unitPrice, $category, $unitsInStock,$image){
        $sql = "INSERT INTO Products (ProductID, ProductName, Description, UnitPrice, Category, UnitsInStock, Image) VALUES (?,?,?,?,?,?,?)";
        $query = $this->db->link->prepare($sql)->execute([$productID, $productName, $description, $unitPrice, $category, $unitsInStock, $image]);;
     
    }
}











$w=new Product;

$result = $w->getAllProducts();

echo json_encode($result);

$w->productInserts(2,2,2,2,2,2,2);



?>

