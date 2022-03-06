<?php
require('Teacher.php');
require_once('Asc_#_Generated.php');
require_once('Users.php');
require_once('CourseChoise.php');
//require_once('CourseChoise.php');
$action = $_POST["action"];


$Teacher_username = $_POST["name"];
$Teacher_phone = $_POST["phone"];
$Teacher_email = $_POST["email"];
$Teacher_password = $_POST["password"];
$Teacher_address = $_POST["address"];

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
$type = 0;
$classes = "";
if(strcmp($action,"Teacher")==0){ 
    $type = 1;
foreach ($_POST['Classes'] as $selected) {
    switch ($selected) {

        case 17:
            $classes .= "All";
            break;
        case 4:
            $classes .= "Mechenical Department.";
            break;
        case 3:
            $classes .= "Civil Departement.";
            break;
        case 2:
            $classes .= "computer science Departement.";
            break;
        case 1:
            $classes .= "Electrical Department.";
            break;
    }
}
} else {
    $type = 2;
   $classes = $classes . $_POST["Classes"];
}

$stat = $_POST["status"];

switch ($stat) {
    case 1:
        $stat = "active";
        break;
    case 2:
        $stat = "Inactive";
        break;
    default:
        $stat = "None";
}

$id = NewId();
$NewPerson = new Person();
$NewPersonSubject = new study_choice();
$newUsers = new Users();


try {
    $NewPerson->AddNewPerson($id, $Teacher_phone, $Teacher_address, $Teacher_username, $Teacher_email);
    $newUsers->AddnewUsers($id, $Teacher_username, $Teacher_password, $Teacher_email, $type);
    $NewPersonSubject->AddNewStudyChoice($id, $group, $classes, $stat);
    if($type == 1)  header("Location: http://localhost/phpD/ADMIN_PAGES/Add_Teacher_admin.php");
  else  header("Location: http://localhost/phpD/ADMIN_PAGES/Add_student_admin.php");
} catch (Exception $e) {
    die("Exception caught");
}