<?php
include("database.class.php");
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
        $sql1="INSERT INTO PersonalInfo (ID, FirstName, LastName, Phone, Email, Password)
              VALUES(?,?,?,?,?,?);";
        $query1 = $this->db->link->prepare($sql1)->execute([$id, $firstName, $lastName, $phone, $email, $password]);

        $sql2="INSERT INTO Users (ID, IsAdmin)
                VALUES (?,?);";
        $query2 = $this->db->link->prepare($sql2)->execute([$id, $isAdmin]);
       
      }

  public function logInUser($email,$password){

  }
}

?>