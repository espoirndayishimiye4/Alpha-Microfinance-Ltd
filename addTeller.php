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

if (isset($_POST['account'])) {
   
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $mobileNumber = $_POST['mobileNumber'];

    $password = rand(100000,999999);
    $passwordencry = md5($password);

    $query = "INSERT INTO `employee` (`firstName`, `lastName`, `username`, `password`, `type`, `phoneNumber`) 
    VALUES ('$firstName', '$lastName', '$username', '$passwordencry', '2', '$mobileNumber')";
    $result = $connect->query($query);

    $msg="Dear Employee Your Username is: ".$username." Your Password is ".$password." Thank You!";
    sendMsg("Alpha M Ltd","$mobileNumber","$msg");
    
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
    
    <div class="col-lg-12"><h1 style="color:#0B2752;margin-top:20px">Add Teller</h1></div>
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
                <div class="col-lg-4 ">
                    <label  class="form-label">First Name</label>
                    <input type="text" name="firstName" class="form-control"  autocomplete="off" required placeholder="Ex:Kagabo">
                </div>
                <div class="col-lg-4 ">
                    <label  class="form-label">Last Name</label>
                    <input type="text" name="lastName" class="form-control" required placeholder="Ex:Ivan">
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4 ">
                    <label  class="form-label">Email</label>
                    <input type="email" name="username" class="form-control"  autocomplete="off" required placeholder="Ex: name@gmail.com">
                </div>
                <div class="col-lg-4 ">
                    <label  class="form-label">Mobile Number</label>
                    <input type="number" name="mobileNumber" class="form-control"  autocomplete="off" required placeholder="Ex: 078...">
                </div>

            </div>
            
            <div class="row">
                <br>
                <div class="col-lg-4"> 
                    <button style="background-color:#0B2752;color:#fff" name="account" type="submit" class="btn btn-primary">Save</button> 
                </div>

            </div>
       </form> 
        <br> 
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
                                    Tellers
                                </div>
                                <div class="col-lg-2">
                                <a href="addTeller.php"> <button style="background-color:#0B2752;color:#fff" name="login" type="submit" class="btn btn-primary">Add Teller</button> </a>
                                </div> 
                            </div>   
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                               
                                    <tr>
                                        <th >#</th>
                                        <th > First Name</th>
                                        <th > Last Name</th>
                                        <th > Phone Number</th>
                                        <th >Date</th>
                                        

                                       
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                <?php   $number =1;
                                        $tellerQuery = "SELECT * FROM `employee` WHERE type = 2";
                                        $tellerResult = $connect->query($tellerQuery);
                                        while( $data = mysqli_fetch_array($tellerResult)){
                                        
                                        $firstName = $data['firstName'];
                                        $lastName = $data['lastName'];
                                        $phoneNumber = $data['phoneNumber'];
                                        $dateTime = $data['dateTime'];
                                        ?>
                                    
                                        <tr>
                                            <td><?php echo $number ?></td>
                                            <td><?php echo $firstName ?></td>
                                            <td><?php echo $lastName ?></td>
                                            <td><?php echo $phoneNumber	 ?></td>
                                            <td><?php echo $dateTime ?></td>
                                       
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