<?php
include("database.class.php");
class Order {

      private $db;
     
  
      public function __construct() {
  
          $this->db = new Database(); ///obj create

      }
      
  

    public function getAllOrders() {
        $sql="SELECT * FROM Orders ;";
        $query = $this->db->link->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        if (empty($result)){
            throw new Exception("No orders found", 404);
            exit;
        }

        return $result;
    }
    public function orderInsert ($orderID, $id, $shippingfType, $date){
        $sql = "INSERT INTO Orders OrderID, ID, ShippingType, Date VALUES (?,?,?,?,?)";
        $query = $this->db->link->prepare($sql)->execute([$orderID, $id, $shippingfType, $date]);;
     
    }

    public function getAllOrdersByUser($userID) {
            
        try{

            $query = $this->db->link->prepare
            (" SELECT OrderID FROM Orders 
            WHERE Category='$userID';");
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

