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
            throw new Exception("No products found", 404);
            exit;
        }

        return $result;
    }
    public function insertProduct ($productID, $productName, $description, $unitPrice, $category, $unitsInStock,$image){
        $sql = "INSERT INTO Products (ProductID, ProductName, Description, UnitPrice, Category, UnitsInStock, Image) VALUES (?,?,?,?,?,?,?)";
        $query = $this->db->link->prepare($sql)->execute([$productID, $productName, $description, $unitPrice, $category, $unitsInStock, $image]);;
     
    }

    public function getAllOfThisCategory($catergoryChoosen) {
            
        try{

            $query = $this->db->link->prepare
            (" SELECT ProductID FROM Products 
            WHERE Category='$catergoryChoosen';");
            $query->execute();
            $query->setFetchMode(PDO::FETCH_OBJ);
            $result = $query->fetchAll();
            if (empty($result)) {
                return false;
            }
            return $result;
    
        }catch(Exception $e) {
            echo $e->getMessage();
    
        }
    }
}











$w=new Product;

$result = $w->getAllProducts();

echo json_encode($result);

//$w->productInsert(2,2,2,2,2,2,2);

$r=$w->getAllOfThisCategory("Pizza");
echo json_encode($r);
?>

