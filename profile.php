<?php
 session_start();
 
 if($_SESSION['username'] == '')
   { 
 header('location:index.php');
 }
 else{
?>
<?php
include 'header.php';
include 'backend/profileBack.php';
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
    
    <div class="col-lg-12"><h1 style="color:#0B2752;margin-top:20px">Customer Profile</h1></div>
  </div>
</div><br>

<?php /*foreach ($errors as $key => $value) {
  echo '<div class="alert alert-warning" role="alert">
  <i class="glyphicon glyphicon-exclamation-sign"></i>
  '.$value.'</div>';                   
  }*/
 ?>

<br>

 <div class="row">
    <div class="col-lg-12 mx-auto" style="border:2px">
        <form action="#" method="POST">
            <div class="row">
                <div class="col-lg-2 mb-4 mt-4">
                </div>
                <div class="col-lg-3 mb-4 mt-4">
                <div class="card">
                    <img src="images/<?php echo $photo; ?>" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b><?php echo $fName." ".$lName; ?></b></h4>
                        <p>Customer</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 ">
                        <h4><b>Account Number</b></h4> <hr>
                        <h4><b>Date Of Birth</b></h4> <hr>
                        <h4><b>National Id</b></h4> <hr>
                        <h4><b>Address</b></h4> <hr>
                        <h4><b>Mobile Number</b></h4> <hr>
                        <h4><b>Balance</b></h4> 
                       
                </div>
                <div class="col-lg-3 ">
                        <h4><?php echo $accNumber; ?></h4> <hr>
                        <h4><?php echo $dateOfBirth; ?></h4> <hr>
                        <h4><?php echo $nationalId; ?></h4> <hr>
                        <h4><?php echo $address; ?></h4> <hr>
                        <h4><?php echo $mobileNumber; ?></h4> <hr>
                        <h4><?php echo $credit - $debit; ?></h4>  
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
                                    Customer
                                </div>
                                <div class="col-lg-2">
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
                                        <th > First Name</th>
                                        <th > Last Name</th>
                                        <th > National Id</th>
                                        <th > Phone Number</th>
                                        <th >Date</th>
                                        <th></th>

                                       
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                <?php   $number =1;
                                        $customersQuery = "SELECT * FROM `customer`";
                                        $customersResult = $connect->query($customersQuery);
                                        while( $data = mysqli_fetch_array($customersResult)){
                                        $accountNumber = $data['accountNumber'];
                                        $firstName = $data['firstName'];
                                        $lastName = $data['lastName'];
                                        $nationalId = $data['nationalId'];
                                        $mobileNumber = $data['mobileNumber'];
                                        $dateTime = $data['dateTime'];
                                        ?>
                                    <a href="profile.php?accNumber=<?php echo $accountNumber;?>">
                                        <tr>
                                            <td><?php echo $number ?></td>
                                            <td><?php echo $accountNumber ?></td>
                                            <td><?php echo $firstName ?></td>
                                            <td><?php echo $lastName ?></td>
                                            <td ><?php echo $nationalId ?></td>
                                            <td><?php echo $mobileNumber ?></td>
                                            <td><?php echo $dateTime ?></td>
                                            <td> 
                                            <a href="profile.php?accNumber=<?php echo $accountNumber;?>">
                                                <div class="iconBx">
                                                    <ion-icon style="font-size:25px" name="eye-outline"></ion-icon>
                                                </div>
                                            </a>
                                            </td>
                                        </tr>
                                    </a>
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