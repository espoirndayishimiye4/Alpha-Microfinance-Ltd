<?php

$customerQuery = "SELECT * FROM `customer` WHERE status = 1 ";
$customerResult = $connect->query($customerQuery);
$customer = $customerResult->num_rows;



if($type == 2){

    $creditQuery = "SELECT SUM(amount) as credit FROM `transaction` WHERE `type` = 'credit' AND `employeeId` = $id ";
    $creditResult = $connect->query($creditQuery);
    $data = mysqli_fetch_array($creditResult);
    $credit = $data['credit'];

    if($credit == ""){
        $credit = 0;
    }

    $debitQuery = "SELECT SUM(amount) as debit FROM `transaction` WHERE `type` = 'debit' AND `employeeId` = $id ";
    $debitResult = $connect->query($debitQuery);
    $data = mysqli_fetch_array($debitResult);
    $debit = $data['debit'];

    if($debit == ""){
        $debit = 0;
    }

    $transactionQuery = "SELECT * FROM `transaction` WHERE `employeeId` = $id ";
    $transactionResult = $connect->query($transactionQuery);
    $transaction = $transactionResult->num_rows;

}
else{
    $transactionQuery = "SELECT * FROM `transaction`";
    $transactionResult = $connect->query($transactionQuery);
    $transaction = $transactionResult->num_rows;

    $tellerQuery = "SELECT * FROM `employee` WHERE type = 2";
    $tellerResult = $connect->query($tellerQuery);
    $teller = $tellerResult->num_rows;

    $creditQuery = "SELECT SUM(amount) as credit FROM `transaction` WHERE `type` = 'credit' ";
    $creditResult = $connect->query($creditQuery);
    $data = mysqli_fetch_array($creditResult);
    $credit = $data['credit'];

    $debitQuery = "SELECT SUM(amount) as debit FROM `transaction` WHERE `type` = 'debit' ";
    $debitResult = $connect->query($debitQuery);
    $data = mysqli_fetch_array($debitResult);
    $debit = $data['debit'];
}
?>