<?php
if(isset($_POST["subject"]) && isset($_POST["class"]) && isset($_POST["title"]) &&
 isset($_POST["description"]) && isset($_POST["upload_files"]) && isset($_POST["urls"]))
 {

$subject = $_POST["subject"];

$class = $_POST["class"];

$title = $_POST["title"];

$description = $_POST["description"];

$file = $_FILES["upload_files"];

$url = $_POST["urls"];
$errors= false;
$file_name = $_FILES['upload_files']['name'];
      $file_size = $_FILES['upload_files']['size'];
      $file_tmp = $_FILES['upload_files']['tmp_name'];
      $file_type = $_FILES['upload_files']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['upload_files']['name'])));
      
      $extensions= array("pdf","ppt","word");
       
      if(in_array($file_ext,$extensions)=== false)  $errors[]= true;

      if(empty($errors)==true) {
        move_uploaded_file($file_tmp,"C:/xampp/htdocs/Dairou/ADMIN_PAGES/".$file_name);
        echo "Success";
     }else{
        if(!$errors) echo "Failed To upload the file";
     }

     $Tutorial = array("Subject"=> $subject,"Class" => $class,"Title" => $title,
     "Description" => $description,"Filename"=>$file_name,"Url"=>$url);
     $Data = json_encode($Tutorial);
      echo $Data;
 }else {
     echo "Problem";
 }

 ?>