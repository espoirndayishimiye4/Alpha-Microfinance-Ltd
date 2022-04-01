<?php
if (isset($_POST['password'])) {
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $password3 = $_POST['password3'];

  
        $password = md5($password1);
        $passwordencry = md5($password2);
        $query = "SELECT * FROM `employee` WHERE password = '$password' ";
        $result = $connect->query($query);

        if($result->num_rows >= 1) {

            $query = "UPDATE `employee` SET `password` = '$passwordencry' WHERE `employee`.`id` = '$id' ";
            $result = $connect->query($query);
            $errors[] = "Password Changed correctly";
        }
        else{
            $errors[] = "Password not found";
        }
    
}
?>