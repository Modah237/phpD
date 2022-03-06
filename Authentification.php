<?php
// used for the Login Processus

abstract class Identity{
    protected  $email;
    protected $password;

    protected function getEmail(){
        return $this->email;
    }
    protected function getPassword(){
        return $this->password;
    }
    public function __construct($email,$password){
        $this->email = $email;
        $this->password = $password;
    }
}

class Login extends Identity{

private  const hostname = "localhost";

private const username = "root";

private const password = "";

private const db_name = "mysql";

private function Check_Login(){
     $form_email = $_POST["username"];
     $form_password =$_POST["password"];  

// $conn = new mysqli(self::hostname,self::username,self::password,self::db_name);
// if (mysqli_connect_errno()) {
//     die ("Failed to connect to MySQL: " .mysqli_connect_error());
//     return false;
//   }

  // return true for succefful query
 // else {
    //   $this->email = $form_email;
    //   $query = "select *from `admin` where email = '$form_email' and password = '$form_password'";
    //   if ($result = $conn->query($query)) {
    //     // $row = $result->fetch_assoc(); In case you want to show the specific user
    //    if($result->num_rows > 0)  return true;
    if(strcmp($this->email,"Abba") === 0 && strcmp($this->password,"Haha") === 0) return true;
      else return false;
  //}
//}
}

public function Validate_And_Redirect(){
    if($this->Check_Login() === true){
        echo '<script type="text/JavaScript"> 
            let email = document.get
     </script>'
;
    } else{
        echo "You Idiot";
    }
}
}

$Log = new Login("Abba","Haha");
$Log->Validate_And_Redirect();
?>