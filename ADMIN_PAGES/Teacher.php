<?php
require_once("databaseconnection.php");

session_start();

class Person extends DBconnection
{

    protected $username;
    protected $email;
    protected $phoneNumber;
    protected $address;
    protected $password;
    protected $Userid;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        
        parent::__construct();
    }

  /**
   * Class destructor.
   */
  public function __destruct()
  {
      parent::__destruct();
  }

    public function AddNewPerson($userid,$phone,$address,$username,$email)
    {
        $this->UserId = $userid;
        $this->username = $username;
        $this->email = $email;
        $this->phoneNumber = $phone;
        $this->address = $address;
        if (
            $this->username == " " || $this->email == " " ||
            $this->phoneNumber == " " || $this->address == " ") {
            throw "Empty Field Detected...";
        }


        $query = "INSERT INTO person(user_ids,phone,user_address,username,email)values(?,?,?,?,?)";
        $get_ready = $this->conn->prepare($query);
        if ($get_ready) {
        // echo $this->username;
            $_SESSION["Success"] = "Success";
           // 
            $get_ready->bind_param("sisss",$this->UserId, $this->phoneNumber, $this->address, $this->username, $this->email);
            $get_ready->execute();
            echo '<br>'.$this->address.'<br>';
           // return true;
        } else {
            $_SESSION["Failure"] = 'Failure';
            throw "DB Error";
        }
        $get_ready->close();
    }

    public function ViewInfo($Userid)
    {

        $query = "select username,email,user_address,phone from person where user_ids = '$Userid'";

        $result = $this->conn->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            if ($result->num_rows > 0) {
                $this->username = $row["username"];
                $this->phoneNumber = $row["phone"];
                $this->email = $row["email"];
                $this->address = $row["user_address"];
                return [$this->username,$this->phoneNumber,$this->email,$this->address];
            } else {
                throw "Fetch Error";
            }
        }
    }
    public  function DeleteUser($Userid)
    {
        
        $query = "delete from person where user_ids = '$Userid'";
        $this->conn->query($query);
        if ($this->conn->query($query)) {
            $_SESSION["Success"] =  "Success";
          
        } else {
            $_SESSION["Failure"] = "Failure";
        }
    }
    
}
session_destroy();
?>