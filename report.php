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

     <div class="row">
    
    <div class="col-lg-12"><h1 style="color:#0B2752;margin-top:20px">System Report</h1></div>
  </div>
       
        <!-- Advanced Tables -->
 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-10">
                                    Transactions
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
                                        <?php
                                        if($type == 1){?>
                                            <th >Perfomed By</th>
                                        <?php } ?>
                                        

                                       
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                <?php   $number =1;
                                        $creQuery = "SELECT * FROM `transaction` ORDER BY `dateTime` DESC";
                                        $creResult = $connect->query($creQuery);
                                        while( $data = mysqli_fetch_array($creResult)){
                                        $accountNumber = $data['accountNumber'];
                                        $transaction = $data['type'];
                                        $amount = $data['amount'];
                                        $dateTime = $data['dateTime'];
                                        $employeeId = $data['employeeId'];

                                        $idQuery = "SELECT `firstName`,`lastName` FROM `employee` WHERE `id` = $employeeId";
                                        $idResult = $connect->query($idQuery);
                                        $dt = mysqli_fetch_array($idResult);
                                        $fName = $dt['firstName'];
                                        $lName = $dt['lastName'];

                                        ?>
                                        
                                    
                                        <tr>
                                            <td><?php echo $number ?></td>
                                            <td><?php echo $accountNumber ?></td>
                                            <td><?php echo $transaction ?></td>
                                            <td><?php echo $amount ?></td>
                                            <td ><?php echo $dateTime ?></td>
                                            <?php if($type == 1){ ?>
                                            <td ><?php echo $fName." ".$lName; ?></td>
                                            <?php } ?>
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