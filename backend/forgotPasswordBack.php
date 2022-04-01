<?php

session_start();
$errors = array();

if (isset($_POST['confirm'])) {

  $phoneNumber = $_POST['phoneNumber'];
  $query = "SELECT * FROM `employee` WHERE phoneNumber = '$phoneNumber' AND status = 1 ";
  $result = $connect->query($query);
  
  if($result->num_rows == 1) {
    $random_password = rand(100000,999999);
		$new_pass = md5($random_password);

    $query2 = "UPDATE `employee` SET `password` = '$new_pass' WHERE `employee`.`phoneNumber` = '$phoneNumber' ";
    $result2 = $connect->query($query2);

    $msg="Your reset password is ".$random_password." You better Change it for Security";
    sendMsg("Alpha M Ltd","$phoneNumber","$msg");

    header('location:index.php');
  }
  else{
    $errors[] = "Phone Number does not exists in Our System";
  }
}
?>