
<?php

Class Database {

    private $dsn = 'mysql:host=localhost;dbname=pizzabox;';
    private $user = "root";
    private $pass = "root";
    private $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
      ];


    public function __construct() {
      $this->link = new PDO($this->dsn, $this-> user, $this->pass);
      $this->link->exec("set names utf8");
      error_log('DB connected!');
    }

}

?>