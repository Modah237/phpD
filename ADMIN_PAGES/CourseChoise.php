<?php

require_once("databaseconnection.php");
session_start();
class study_choice extends DBconnection
{


    protected $subject;

    protected $UserId;

    protected $department;

    protected $stat;


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
        parent::__construct();
    }

    public function AddNewStudyChoice($userid, $subject, $department, $stat)
    {

        $this->stat =  $stat;
        $this->department = $department;
        $this->subject = $subject;
        $this->UserId = $userid;

        $query = "INSERT INTO  courseinfo(UserId,subjects,person_dpmnt,statuss)values(?,?,?,?)";

        $get_ready = $this->conn->prepare($query);

        if ($get_ready) {
            $_SESSION["Success"] = "Success";
            $get_ready->bind_param("ssss", $this->UserId, $this->subject, $this->department, $this->stat);
            $get_ready->execute();
            //   return true;
        } else {
            $_SESSION["Failure"] = 'Failure';
            throw "DB Error";
        }
        $get_ready->close();
    }

    public function ViewInfo($Userid)
    {

        $query = "select subjects,person_dpmnt,statuss from courseinfo where UserId = '$Userid'";

        $result = $this->conn->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            if ($result->num_rows > 0) {
                $this->stat = $row["statuss"];
                $this->subject = $row["subjects"];
                $this->department = $row["person_dpmnt"];
                return [$this->subject, $this->department, $this->stat];
            } else {
                throw "Fetch Error";
            }
        }
    }
}
session_destroy();
?>

?>