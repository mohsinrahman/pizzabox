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
          $q = "SELECT FirstName,isAdmin FROM user WHERE Email= :email  AND Password= :password AND isAdmin = :isAdmin ";
          $query = $this->db->link->prepare($q);
          error_log($query);
          $query->bindParam(":email", $email);
          $query->bindParam(":password", $hash_password);
          $query->bindParam(":isAdmin", $isAdmin);
          
          $query->execute();
          error_log($query);
          $count=$query->rowCount();
          error_log($count);
          $data=$query->fetch(PDO::FETCH_OBJ);
          error_log($data);
          
          if($count)
          {
           $_SESSION['FirstName']=  $data->FirstName; 
           $_SESSION['isAdmin']=  $data->isAdmin; 
               
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
    public function insertNewUser( $isAdmin, $firstName, $lastName, $email, $password){
      $hash_password= md5($password);
        $sql1="INSERT INTO user (IsAdmin, FirstName, LastName, Email, Password)
              VALUES(?,?,?,?,?);";
        $query1 = $this->db->link->prepare($sql1)->execute([ $isAdmin, $firstName, $lastName, $email, $hash_password]);
      
       
      }

      public function newsLetterEmail($email,$name) {

        $querysqlNewsLetter = "INSERT INTO newsletter(FullName,Email) VALUES ('$name','$email')";
        $this->db->link->exec($querysqlNewsLetter);

        return("Sent successfully");
        
 
      } 

  
}

?>