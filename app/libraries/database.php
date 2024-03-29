<?php


  /*
   * PDO Database Class
   * Connect to database
   * Create prepared statements
   * Bind values
   * Return rows and results
   */
  class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
  
    private $dbname = DB_NAME;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct(){
      // Set DSN
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
    

      // Create PDO instance
      try{
        $this->dbh = new PDO($dsn, $this->user);
      } catch(PDOException $e){
        $this->error = $e->getMessage();
        echo $this->error;
      }
    }
  }