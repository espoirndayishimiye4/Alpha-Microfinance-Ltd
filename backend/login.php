<?php
session_start();
$errors = array();

if (isset($_POST['login'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM `employee` WHERE username = '$username' AND status = 1 ";
  $result = $connect->query($query);
  
  if($result->num_rows == 1) {

  $password = md5($password);
  $query2 = "SELECT * FROM `employee` WHERE username = '$username' AND password = '$password'  AND status = 1";
  $result2 = $connect->query($query2);



  if($result2->num_rows == 1) {

    $data = mysqli_fetch_array($result2);
    $firstName = $data['firstName'];
    $lastName = $data['lastName'];
    $username = $data['username'];
    $type = $data['type']; 
    $id = $data['id']; 

    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['username'] = $username;
    $_SESSION['type'] = $type;
    $_SESSION['id'] = $id;

  header('location:dashboard.php');
  }
  else{
    $errors[] = "Incorrect username/password combination";
  }
  }
  else{
    $errors[] = "Username doesnot exists";
  }
}

?>