<?php

$Teacher_name = $_POST["name"];

$Teacher_Phone = $_POST["phone"];

$Teacher_Email = $_POST["email"];

$Teacher_password = $_POST["password"];

$address = $_POST["address"];
  
$group = "";
foreach ($_POST['Subjects'] as $selected) {
  if ($selected == 0) {
    $group .= "All";
  } elseif ($selected == 5) {
    $group .= "Web Programming.";
  } elseif ($selected == 4) {
    $group .= "OS.";
  } elseif ($selected == 3)
    $group .= "system software.";
  elseif ($selected == 2) {
    $group .= "Networking.";
  } elseif ($selected == 1) {
    $group .= "Microprocessor.";
  }
}
//echo $group;


$classes = "";
foreach ($_POST['Classes'] as $selected) {
  if ($selected == 16) {
    $classes .= "All";
  } elseif ($selected == 13) {
    $classes .= "Mechenical Department.";
  } elseif ($selected == 12) {
    $classes .= "Civil Departement.";
  } elseif ($selected == 11)
    $classes .= "computer science Departement.";
  elseif ($selected == 10) {
    $classes .= "Electrical Department.";
  }
}


$Type =  1;
// Database Connection 

$conn = new  mysqli("localhost", "root", "", "mysql");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// here is what everything happen 
/* we use prepared statement as it's more secure for sql injection */ else {
  // $query =  "INSERT INTO teacher (username ,email, passwords,phone , addresss , types) VALUES (?, ?, ?,?,?,?)";

  $stmt = "INSERT INTO teacher (T_name ,T_phone, T_email,addresss,T_password,subjects,class) VALUES (?, ?, ?,?,?,?,?)";

  $logst = $conn->prepare($stmt);

  //$stmt->bind_param("sisisss", $Teacher_name, $Teacher_Phone, $Teacher_Email, $Teacher_password, $Teacher_address);

  //$stmt->execute();

  $logst->bind_param("sisssss", $Teacher_name, $Teacher_Phone, $Teacher_Email, $address, $Teacher_password, $group, $classes);

  $logst->execute();

  echo "<br>ok";

  //header("Location: http://localhost/phpD/ADMIN_PAGES/Add_Teacher_admin.php");
}
$conn->close();
//$stmt->close();
$logst->close();
