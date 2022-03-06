<?php


session_start();

$name = $_POST["Username"];
$password = $_POST["Password"];
$conn = new  mysqli("localhost","root","","e-learning");
$failed = "";
 if(isset($_POST["Username"]) && $name == "") {
   $failed = "Email is required";
  $_SESSION["error"] = $failed;
  header("location:login.php?error=1");
 }
  elseif(isset($_POST["Password"]) && empty($_POST["Password"])) {
    $failed = "Password is required";
   $_SESSION["error"] = $failed;
   header("location:login.php?error=1");
  }


 else {
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " .mysqli_connect_error();
  exit();
}
$sql = "SELECT * FROM `users`  where Username = '$name' and user_pwd ='$password'";

//$result = $conn->query($sql);
if ($result = $conn->query($sql)) {
     $row = $result->fetch_assoc();
    if($result->num_rows > 0){
      if($row["user_type"]==0)
       header("Location: http://localhost/phpD/ADMIN_PAGES/Main_admin_interface.php");
       elseif($row["user_type"]==1){
        header("Location: http://localhost/phpD/TEACHER_PAGES/Teacher_dashboard.php");
       }else{
        header("Location: http://localhost/phpD/STUDENT_PAGES/main_student_interface.php");
       }
           //exit();
    } else{
      $failed = "Wrong Username Or Password";
      $_SESSION["error"] = $failed;
      header("location:login.php?error=1");
    }
} 
// if (!empty($result) && $result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {  
//   }
else {
  echo "0 results";
}
$conn->close();
 }

 ?>