<?php 
if (isset($_POST['credit'])) {
    $accountNumber = $_POST['accountNumber'];
    $amount = $_POST['amount'];
    $category = 'credit';

    $accQuery = "SELECT * FROM `customer` WHERE `accountNumber` = '$accountNumber'";
    $accResult = $connect->query($accQuery);
    $dta = mysqli_fetch_array($accResult);
    $acc = $dta['accountNumber'];

    if($acc != ""){

        if($amount <= 0){
            $errors[] = "Not enough money to perform this transaction";
        } else{

    $query = "INSERT INTO `transaction` (`accountNumber`, `type`, `employeeId`, `amount`) 
    VALUES ('$accountNumber', '$category', '$id', '$amount')";
    $result = $connect->query($query);

    $creditQuery = "SELECT `mobileNumber` FROM `customer` WHERE `accountNumber` = $accountNumber";
    $creditResult = $connect->query($creditQuery);
    $data = mysqli_fetch_array($creditResult);
    $mobileNumber = $data['mobileNumber'];

    $msg="Dear Customer, Your Account ".$accountNumber." Have been Credited ".$amount." Frw thank you for banking with us!";
    sendMsg("Alpha M Ltd","$mobileNumber","$msg");
    }
   }
    else{
        $errors[] = "Account Number Not Found";
    }
  
}
?>