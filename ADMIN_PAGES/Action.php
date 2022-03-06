<?php
require_once('databaseconnection.php');
require_once('Teacher.php');
require_once('Users.php');
require_once('CourseChoise.php');

session_start();
$ids = $_GET['id'];
$action = $_GET['action'];


try {
    $Users = new Users();
    $person = new Person();
    $subjectinfo = new study_choice();
    switch ($action) {
        case "delete":
            $Users->DeleteUser($ids);
            $person->DeleteUser($ids);
            header("Location:  http://localhost/phpD/ADMIN_PAGES/manage_teacher_admin.php");
            break;
        case "view":
            $personinfo = $person->ViewInfo($ids);
            $subjects = $subjectinfo->ViewInfo($ids);
            $result =  array_merge($personinfo, $subjects);
            $_SESSION["data"] = $result;
            header("Location:  http://localhost/phpD/ADMIN_PAGES/ViewInfo.php");
            break;
        case "edit":
            break;
        default:
            break;
    }
} catch (Exception $e) {
    echo "Exception: caught";
}
