<?php

require_once('databaseconnection.php');
class Users extends DBconnection
{
    protected $UserId, $Username, $user_pwd, $user_type, $email;
    public function __construct()
    {

        parent::__construct();
    }
    public function __destruct()
    {
        parent::__destruct();
    }

    public  function AddnewUsers($Userid, $username, $user_pwd, $email, $user_type)
    {
        $this->UserId = $Userid;
        $this->Username = $username;
        $this->user_pwd = $user_pwd;
        $this->user_type = $user_type;
        $this->email = $email;
        $query = "INSERT INTO users(USerId,Username,user_pwd,email,user_type)values(?,?,?,?,?)";

        $FinalExcution = $this->conn->prepare($query);

        if ($FinalExcution) {
            $FinalExcution->bind_param("ssssi", $this->UserId,$this->Username,$this->user_pwd, $this->email,  $this->user_type);
            $FinalExcution->execute();
        } else {
           echo"Nope";
        }
    }
    public  function DeleteUser($Userid)
    {

        $query = "delete from users where UserId = '$Userid'";
        $this->conn->query($query);
        if ($this->conn->query($query)) {
            echo "Success";
        } else {
            echo "Failure";
        }
    }

    public function CurrentUsers($type) {

        $sql = "select UserId,Username,email from users where user_type = $type";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["UserId"] . "</td>";
                echo "<td>" . $row['Username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td> 
             <a ><button class=\"btn btn-info btn-xs\"><i class=\"glyphicon glyphicon-eye-open\"></i>        view </button></a>
              <a><button class=\"btn btn-primary btn-xs\"><i class=\"glyphicon glyphicon-pencil\"></i>     edit </button></a>
            <a><button class=\"btn btn-danger btn-xs\"\"><i class=\"glyphicon glyphicon-remove\"></i> delete </button></a>
                </td> ";
                echo "</tr>";
            }
        } else {
            echo "NO result";
        }

    }
    public function AddTutorial() {

    }

}
?>
