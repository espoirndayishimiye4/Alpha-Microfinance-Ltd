<?php
 session_start();
 $errors = array();
 if($_SESSION['username'] == '')
   { 
 header('location:index.php');
 }
 else{
?>
<?php
include 'header.php';
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


<div class="main">
 

    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        
        <div class="user">
            <img src="images/user.png"style="width:60px;height:70px;"/>
            
        </div>
       <?php echo $firstName." ".$lastName ?>
     </div>

     <div class="container">
  <div class="row">
    
    <div class="col-lg-12"><h1 style="color:#0B2752;margin-top:20px">Debit Account (withdraw)</h1></div>
  </div>
</div><br>

<?php foreach ($errors as $key => $value) {
  echo '<div class="alert alert-warning" role="alert  ">
  <center>
  '.$value.'</center></div>';                    
  }
 ?>

<br>

 <div class="row">
    <div class="col-lg-12 mx-auto" style="border:2px">
        <form action="#" method="POST">
            <div class="row">
                <div class="col-lg-5 mb-4 mt-4">
                    <label  class="form-label">Account Number</label>
                    <input type="number" name="accountNumber" class="form-control"  autocomplete="off" required placeholder="Ex: 12345">
                </div>
                <div class="col-lg-5 mb-3">
                    <label  class="form-label">Amount (Frw)</label>
                    <input type="number" name="amount" class="form-control" required placeholder="Ex: 10000">
                </div>
            <br>
                <div class="col-lg-2"> 
                    <button style="background-color:#0B2752;color:#fff" name="credit" type="submit" class="btn btn-primary">Debit</button> 
                </div>
            </div>
       </form> 
        <br> 
    </div>
</div>


        <!-- Advanced Tables -->
 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-10">
                                    Customers
                                </div>
                            
                            </div>   
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                               
                                    <tr>
                                        <th >#</th>
                                        <th> Account Number</th>
                                        <th > Transaction</th>
                                        <th > Amout</th>
                                        <th >Date</th>
                                        

                                       
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                <?php   $number =1;
                                        $creQuery = "SELECT * FROM `transaction` ORDER BY `dateTime` DESC;";
                                        $creResult = $connect->query($creQuery);
                                        while( $data = mysqli_fetch_array($creResult)){
                                        $accountNumber = $data['accountNumber'];
                                        $transaction = $data['type'];
                                        $amount = $data['amount'];
                                        $dateTime = $data['dateTime'];
                                        
                                        ?>
                                    
                                        <tr>
                                            <td><?php echo $number ?></td>
                                            <td><?php echo $accountNumber ?></td>
                                            <td><?php echo $transaction ?></td>
                                            <td><?php echo $amount ?></td>
                                            <td ><?php echo $dateTime ?></td>
                                             
                                            
                                        </tr>
                                    
                                 <?php $number++; } ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
           

     </div>

    

     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    
     <script>
           // MenuToggle

         let toggle = document.querySelector('.toggle');
         let navigation = document.querySelector('.navigation');
         let main = document.querySelector('.main');
         
         toggle.onclick = function(){
             navigation.classList.toggle('active');
             main.classList.toggle('active')

         }

     </script>

  <script>
      /* add hovered class in selected list*/

      let list= document.querySelectorAll('.navigation li');
    function activeLink(){
        list.forEach((item) =>
        item.classList.remove('hovered'));
        this.classList.add('hovered');
    }
      list.forEach((item) =>
      item.addEventListener('mouseover',activeLink))
 

 

 </script>




</body>
<script src="assets/js/codebase.core.min.js"></script>

<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="assets/js/codebase.app.min.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>
<!-- datatable js -->
<script src="assets/assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/assets/js/dataTables/dataTables.bootstrap.js"></script>

<script>
$(document).ready(function(){
    $('#dataTables-example').dataTable();
})
</script>

<!-- Page JS Code -->
<script src="assets/js/pages/db_pop.min.js"></script>
</html>
<?php } ?>