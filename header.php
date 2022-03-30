
<?php
include 'backend/connection.php';
include 'backend/messaging.php';
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$username = $_SESSION['username'];
$type = $_SESSION['type'];
$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha Microfinance Ltd</title>
    <link rel = "icon" href ="images/logo1.png" "image/x-icon">
    <link rel="stylesheet" href="css/styley.css">
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/assets/css/style.css" rel="stylesheet" />
</head>
<body>
  
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                    <img src="images/logo2.png" alt="logo" srcset="">
                    </a> 
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon> </span>
                        <span class="title">Dashboard</span>
                    </a> 
               </li>
                <li>
                    <a href="customer.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon> </span>
                        <span class="title">Customer</span>
                     </a> 
               </li>
               <?php if($type == 2){ ?>
                <li>
                    <a href="credit.php">
                        <span class="icon"> <ion-icon name="wallet-outline"></ion-icon></span>
                        <span class="title">Credit</span>
                    </a> 
               </li>
               <li>
                    <a href="debit.php">
                       <span class="icon"><ion-icon name="wallet-outline"></ion-icon> </span>
                       <span class="title">Debit</span>
                    </a> 
               </li>
               
               <?php }
               if($type == 1){
               ?>
                <li>
                    <a href="teller.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon> </span>
                        <span class="title">Teller</span>
                     </a> 
               </li>
                
                <?php } ?>
               <li>
                    <a href="report.php">
                        <span class="icon"><ion-icon name="list-outline"></ion-icon> </span>
                        <span class="title">Report</span>
                    </a> 
               </li>
                <li>
                    <a href="password.php">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon> </span>
                        <span class="title">Change Password</span>
                    </a> 
               </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"> <ion-icon name="log-out-outline"></ion-icon></span>
                         <span class="title">Sign-Out</span>
                    </a> 
                </li>
            </ul>
    
        </div>