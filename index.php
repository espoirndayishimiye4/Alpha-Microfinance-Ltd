<?php
include 'messaging.php';
//sendMsg("KWEENS Ltd","0787958407","Hello");
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
</div><br><br>
<div class="container" style="background-color:#0B2752;color:#fff">
 <div class="row">
    <div class="col-md-6 mx-auto" style="border:2px">
        <form action="#" method="POST">
        <div class="mb-4 mt-4">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required>
          
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"required>
        </div>
        <div class="row">
        <div class="col-lg-2"> <button style="background-color:#fff;color:#0B2752" type="submit" class="btn btn-primary">Login</button> </div>
        <div class="col-lg-4"> <a href="forgotPassword.php" style="color:#fff"> Forgot Password? </a></div>
        </div>
      </form> 
        <br> 
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>