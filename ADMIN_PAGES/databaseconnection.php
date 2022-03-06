<?php

class DBconnection {

protected  $conn;
  /**
   * Class constructor.
   */
  public function __construct()
  {
      
    $this->conn = new  mysqli("localhost","root","","e-learning");
    if ( !$this->conn) {
         die( "DB Error:Failed To Start");
      }
  }
  
   /**
    * Class destructor.
    */
   public function __destruct()
   {
       $this->conn->close();
   }

}