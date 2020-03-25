<?php
include("database.class.php");
class User {

       private $db;
     
  
      public function __construct() {
  
          $this->db = new Database(); 

      }

      public function logInUser($email,$password, $isAdmin){

        try{


          $hash_password= md5($password); //Password encryption
          $q = "SELECT FirstName,isAdmin,Id FROM user WHERE Email= :email  AND Password= :password AND isAdmin = :isAdmin ";
          $query = $this->db->link->prepare($q);
          $query->bindParam(":email", $email);
          $query->bindParam(":password", $hash_password);
          $query->bindParam(":isAdmin", $isAdmin);
          
          $query->execute();
          error_log(json_encode($query));
          $count=$query->rowCount();
          error_log(json_encode($count));
          $data=$query->fetch(PDO::FETCH_OBJ);
          error_log(json_encode($data->Id));
          
          if($count)
          {
           $_SESSION['FirstName']=  $data->FirstName; 
           $_SESSION['isAdmin']=  $data->isAdmin;
           $_SESSION['uId']=  $data->Id; 
               
             // Storing user session value
          return ($data) ;
          }
          else
          {
          return false;
          }
          }
          catch(PDOException $e) {
          echo '{"error":{"text":'. $e->getMessage() .'}}';
          }
    
      }
      
  

    public function getAllUsers() {
        $sql="SELECT * FROM PersonalInfo ;";
        $query = $this->db->link->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);     

        return $result;
    }
    public function insertNewUser($id, $firstName, $lastName, $phone, $email, $password, $isAdmin){
        $sql1="INSERT INTO PersonalInfo (ID, FirstName, LastName, Phone, Email, Password)
              VALUES(?,?,?,?,?,?);";
        $query1 = $this->db->link->prepare($sql1)->execute([$id, $firstName, $lastName, $phone, $email, $password]);

        $sql2="INSERT INTO Users (ID, IsAdmin)
                VALUES (?,?);";
        $query2 = $this->db->link->prepare($sql2)->execute([$id, $isAdmin]);
    /* public function insertNewUser( $isAdmin, $firstName, $lastName, $email, $password){
      $hash_password= md5($password);
        $sql1="INSERT INTO user (IsAdmin, FirstName, LastName, Email, Password)
              VALUES(?,?,?,?,?);";
        $query1 = $this->db->link->prepare($sql1)->execute([ $isAdmin, $firstName, $lastName, $email, $hash_password]);
      return $this->db->link->lastInsertId(); */
       
      }

      public function newsLetterEmail($email,$name) {

        $querysqlNewsLetter = "INSERT INTO newsletter (FullName,Email) VALUES ('$name','$email')";
        $this->db->link->exec($querysqlNewsLetter);

        return("Sent successfully");
        
 
      }
      
      public function getListNewsletter() {
        $sqlnewsletter="SELECT * FROM newsletter ";
        $querynewsletter = $this->db->link->prepare($sqlnewsletter);
        $querynewsletter->execute();
        $resultnewsletter = $querynewsletter->fetchAll(PDO::FETCH_ASSOC);
        return $resultnewsletter;
    } 


    public function getSingleCustomerOrders() {
        $uid = $_SESSION['uId'];
        error_log(json_encode($uid));
      $sqlSingleCustomer="SELECT DISTINCT * FROM orders INNER JOIN orderdetails where orders.ID = $uid AND orders.OrderID = orderdetails.OrderID ";
      $querySingleCustomer = $this->db->link->prepare($sqlSingleCustomer);
      $querySingleCustomer->execute();
      $resultSingleCustomer = $querySingleCustomer->fetchAll(PDO::FETCH_ASSOC);
      error_log(json_encode($resultSingleCustomer));
      return $resultSingleCustomer;
  } 
  
}

?>