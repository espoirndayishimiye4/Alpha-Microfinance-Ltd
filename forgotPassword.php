<?php
include 'backend/connection.php';
include 'backend/messaging.php';
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Alpha Microfinance Ltd</title>
    <link rel = "icon" href ="images/logo1.png" "image/x-icon">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-2"> <CENTER><img src="images/logo1.png" alt="logo" srcset=""></CENTER> </div>
    <div class="col-lg-8"><CENTER><h1 style="color:#0B2752;margin-top:30px">BANKING SYSTEM</h1></CENTER></div>
  </div>
</div><br>
<?php foreach ($errors as $key => $value) {
  echo '<div class="alert alert-warning" role="alert">
  <i class="glyphicon glyphicon-exclamation-sign"></i>
  '.$value.'</div>';                    
  }
 ?>
<br>
<div class="container" style="background-color:#0B2752;color:#fff">
 <div class="row">
    <div class="col-md-6 mx-auto" style="border:2px">
        <form action="#" method="POST">
        <div class="mb-4 mt-4">
            <label for="exampleInputEmail1" class="form-label">Enter Your Phone Number To Reset Password</label>
            <input type="number" name="phoneNumber" class="form-control" placeholder="Ex: 078..." autocomplete="off" required>
          
        </div>
        
      
         <button style="background-color:#fff;color:#0B2752" name="confirm" type="submit" class="btn btn-primary">Send SMS</button> 

      </form> 
        <br> 
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>