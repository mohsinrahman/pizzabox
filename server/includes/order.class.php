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

    public function newOrder($id,$selectAdmin,$date,$products){
        $sql1="INSERT INTO orders (ID,ShippingType,Date) VALUES ('$id','$selectAdmin','$date')
      ;";
        $query = $this->db->link->prepare($sql1);
        $query->execute();
        $id=$this->db->link->lastInsertId();
       print_r($products);
       $sql2="INSERT INTO orderditails (OrderID,ProductID,Quantity) VALUES (?,?,?)
      ;";
       for($i=0;$i<count($products);$i++){
        $query = $this->db->link->prepare($sql2);
        $query->execute([++$id,($products[$i]['ProductID']),($products[$i]['qty'])]);
       }
       
    }
}





$o=new Order();
$result = $o->newOrder(1,1,'11.11.11',$_SESSION['cart']);

echo ($result);
?>