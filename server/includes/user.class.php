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
          error_log($hash_password); //507f513353702b50c145d5b7d138095c
          echo "<script>console.log('.$hash_password')</script>";
          $q = "SELECT FirstName,isAdmin FROM user WHERE Email= '$email'  AND Password= '$hash_password' AND isAdmin = 'Yes' ";
          $query = $this->db->link->prepare($q);
          error_log($query);
          //$query->bindParam("Email", 'amir@gmail.com',PDO::PARAM_STR);
          //$query->bindParam("password",hash_password ,PDO::PARAM_STR);  //,PDO::PARAM_STR  */
          $query->execute();
          error_log($query);
          $count=$query->rowCount();
          error_log($count);
          $data=$query->fetchAll(PDO::FETCH_OBJ);
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
    public function insertNewUser($id, $firstName, $lastName, $phone, $email, $password, $isAdmin){
        $sql1="INSERT INTO PersonalInfo (ID, FirstName, LastName, Phone, Email, Password)
              VALUES(?,?,?,?,?,?);";
        $query1 = $this->db->link->prepare($sql1)->execute([$id, $firstName, $lastName, $phone, $email, $password]);

        $sql2="INSERT INTO Users (ID, IsAdmin)
                VALUES (?,?);";
        $query2 = $this->db->link->prepare($sql2)->execute([$id, $isAdmin]);
       
      }

  
}

?>