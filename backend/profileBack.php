<?php
if (isset($_GET['accNumber'])) {
    $accNumber=$_GET['accNumber'];
    $accQuery = "SELECT * FROM `customer` WHERE accountNumber = $accNumber";
    $accResult = $connect->query($accQuery);
    $data = mysqli_fetch_array($accResult);

    $accountNumber = $data['accountNumber'];
    $dateOfBirth = $data['dateOfBirth'];
    $fName = $data['firstName'];
    $lName = $data['lastName'];
    $nationalId = $data['nationalId'];
    $mobileNumber = $data['mobileNumber'];
    $address = $data['address'];
    $photo = $data['photo'];

    $crQuery = "SELECT SUM(`amount`) as credit FROM `transaction` WHERE `type` = 'credit' AND `accountNumber` = '$accNumber'";
    $crResult = $connect->query($crQuery);
    $data = mysqli_fetch_array($crResult);
    $credit = $data['credit'];
    
    $debQuery = "SELECT SUM(`amount`) as debit FROM `transaction` WHERE `type` = 'debit' AND `accountNumber` = '$accNumber'";
    $debResult = $connect->query($debQuery);
    $data = mysqli_fetch_array($debResult);
    $debit = $data['debit'];
    }
?>