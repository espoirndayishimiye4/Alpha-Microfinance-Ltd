<?php
error_reporting(0);
if (isset($_POST['credit'])) {
    $accountNumber = $_POST['accountNumber'];
    $amount = $_POST['amount'];
    $category = 'debit';

    $accQuery = "SELECT * FROM `customer` WHERE `accountNumber` = '$accountNumber'";
    $accResult = $connect->query($accQuery);
    $dta = mysqli_fetch_array($accResult);
    $acc = $dta['accountNumber'];

    if($acc != ""){

    $crQuery = "SELECT SUM(`amount`) as credit FROM `transaction` WHERE `type` = 'credit' AND `accountNumber` = '$accountNumber'";
    $crResult = $connect->query($crQuery);
    $data = mysqli_fetch_array($crResult);
    $credit = $data['credit'];
    
    $debQuery = "SELECT SUM(`amount`) as debit FROM `transaction` WHERE `type` = 'debit' AND `accountNumber` = '$accountNumber'";
    $debResult = $connect->query($debQuery);
    $data = mysqli_fetch_array($debResult);
    $debit = $data['debit'];

    $balance = $credit - $debit;

    if($balance > $amount){

    $query = "INSERT INTO `transaction` (`accountNumber`, `type`, `employeeId`, `amount`) 
    VALUES ('$accountNumber', '$category', '$id', '$amount')";
    $result = $connect->query($query);

    $creditQuery = "SELECT `mobileNumber` FROM `customer` WHERE `accountNumber` = $accountNumber";
    $creditResult = $connect->query($creditQuery);
    $data = mysqli_fetch_array($creditResult);
    $mobileNumber = $data['mobileNumber'];

    $msg="Dear Customer, Your Account ".$accountNumber." Have been Debited ".$amount." Frw thank you for banking with us!";
    sendMsg("Alpha M Ltd","$mobileNumber","$msg");
}else{
    $errors[] = "Not Enough Balance to perform this transaction";
}
}
else{
    $errors[] = "Account Number Not Found";
}
}
?>