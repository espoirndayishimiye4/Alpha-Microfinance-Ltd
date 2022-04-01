<?php
if (isset($_POST['account'])) {
   
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $mobileNumber = $_POST['mobileNumber'];

    $password = rand(100000,999999);
    $passwordencry = md5($password);

    $query = "INSERT INTO `employee` (`firstName`, `lastName`, `username`, `password`, `type`, `phoneNumber`) 
    VALUES ('$firstName', '$lastName', '$username', '$passwordencry', '2', '$mobileNumber')";
    $result = $connect->query($query);

    $msg="Dear Employee Your Username is: ".$username." Your Password is ".$password." Thank You!";
    sendMsg("Alpha M Ltd","$mobileNumber","$msg");
    
}
?>