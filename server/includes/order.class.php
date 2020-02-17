<?php
include_once("database.class.php");
class Order {

      private $db;
     
  
      public function __construct() {
  
          $this->db = new Database(); 

      }
      
  

    public function getAllOrders() {
        $sql="SELECT * FROM Orders ;";
        $query = $this->db->link->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    public function orderInsert ($orderID, $id, $shippingfType, $date){
        $sql = "INSERT INTO Orders OrderID, ID, ShippingType, Date VALUES (?,?,?,?,?)";
        $query = $this->db->link->prepare($sql)->execute([$orderID, $id, $shippingfType, $date]);;
     
    }

    public function getAllOrdersByUser($userID) {
            
    
            $sql=" SELECT OrderID FROM Orders 
            WHERE Category='$userID';";
            $query = $this->db->link->prepare($sql);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_OBJ);
            $result = $query->fetchAll();
           
            return $result;
    
   
    }
}


$o=new Order();
$result = $o->getAllOrders();

echo json_encode($result);
?>