<?php 

abstract class User{

protected $user_name;

protected $user_email;

protected $user_password;

protected $user_address;

protected $user_courses;

protected $user_login_status;

protected $user_registration_date;

protected function getUserName(){
  return $this->user_name;
}
protected function getUserEmail(){

    return $this->email;
}
protected function getUserPassword(){
    return $this->password;
}
protected function getUserAddress(){
  return $this->user_address;
}

}

?>