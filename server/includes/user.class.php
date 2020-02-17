<?php
include_once("database.class.php");
class User {

      private $db;
     
  
      public function __construct() {
  
          $this->db = new Database(); 

      }
      
  

    public function getAllUsers() {
        $sql="SELECT * FROM PersonalInfo ;";
        $query = $this->db->link->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

       

        return $result;
    }
    public function insertNewUser($id, $firstName, $lastName, $phone, $email, $password, $isAdmin){
        $sql="INSERT INTO PersonalInfo (ID, FirstName, LastName, Phone, Email, Password)
              VALUES($id, $firstName, $lastName, $phone, $email, $password)
              INSERT INTO Users (ID, IsAdmin)
              VALUES ($id, $isAdmin);";
        $query = $this->database->connection->prepare($sql);
        $result = $query->execute();
        return $result;
      }

      public function logInUser($email, $password){
        echo "<script>console.log('$email','  ','$password' );</script>";

        $sql="SELECT id, firstName from personalInfo
        JOIN  Users USING (id)
        WHERE email='$email' AND password='$password';";
        $query =  $this->db->link->prepare($sql);
        $query->execute();
        //echo "<script>console.log('query','.$query' );</script>";

       
      $result=$query->fetchAll(PDO::FETCH_ASSOC);


      return $result;
    }
  
}

?>
