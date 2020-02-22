<?php
include("database.class.php");
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
    public function orderInsert ($orderID, $id, $shippingType, $date){
        $sql = "INSERT INTO Orders OrderID, ID, ShippingType, Date VALUES (?,?,?,?,?)";
        $query = $this->db->link->prepare($sql)->execute([$orderID, $id, $shippingType, $date]);;
     
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

    public function newOrder($id,$selectShipping,$date,$products,$street,$postcode,$city,$mobile){
       
        $sql1="INSERT INTO orders (ID,ShippingType,Date) VALUES ('$id','$selectShipping','$date')
      ;";
        $query = $this->db->link->prepare($sql1);
        $query->execute();
        $last=$this->db->link->lastInsertId();
       $sql2="INSERT INTO orderdetails (OrderID,ProductID,Quantity) VALUES (?,?,?)
      ;";
       for($i=0;$i<count($products);$i++){
        $query = $this->db->link->prepare($sql2);
        $query->execute([$last,(int)($products[$i]['ProductID']),(int)($products[$i]['qty'])]);
    }
    $sql3="INSERT INTO address (ID,Street,Apartment,City) VALUES ('$id','$street','$postcode','$city')
    ;";
    $query = $this->db->link->prepare($sql3);
    $query->execute();
    }
}





?>