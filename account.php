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

     <div class="container">
  <div class="row">
    
    <div class="col-lg-12"><h1 style="color:#0B2752;margin-top:20px">Create Account</h1></div>
  </div>
</div>

<?php /*foreach ($errors as $key => $value) {
  echo '<div class="alert alert-warning" role="alert">
  <i class="glyphicon glyphicon-exclamation-sign"></i>
  '.$value.'</div>';                   
  }*/
 ?>

<div class="container" style="background-color:#0B2752;color:#fff">
 <div class="row">
    <div class="col-md-6 mx-auto" style="border:2px">
        <form action="#" method="POST">
        <div class="mb-4 mt-4">
            <label for="exampleInputEmail1" class="form-label">Account Number</label>
            <input type="email" name="username" class="form-control"   autocomplete="off" required>
          
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Amount</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-4 mt-4">
            <label for="exampleInputEmail1" class="form-label">Account Number</label>
            <input type="email" name="username" class="form-control"   autocomplete="off" required>
          
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Amount</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-4 mt-4">
            <label for="exampleInputEmail1" class="form-label">Account Number</label>
            <input type="email" name="username" class="form-control"   autocomplete="off" required>
          
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Amount</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-4 mt-4">
            <label for="exampleInputEmail1" class="form-label">Account Number</label>
            <input type="email" name="username" class="form-control"   autocomplete="off" required>
          
        </div>
        <br>
        <div class="row">
        <div class="col-lg-2"> <button style="background-color:#fff;color:#0B2752" name="login" type="submit" class="btn btn-primary">Create</button> </div>
        </div>
      </form> 
        <br> 
    </div>
</div>
</div>

       <!-- Advanced Tables -->
 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Customers
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

                                       
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                   
                                    <tr>
                                        <td class="text-center">a</td>
                                        <td class="text-center">a  </td>
                                        <td class="text-center">a</td>
                                        <td class="text-center">a</td>
                                        <td class="text-center">a</td>
                                        <td class="text-center">a</td>
                                        <td class="text-center">a</td>

                                      
                                    </tr>
                                 
                                </tbody>
                                </table>
                            </div>
<input type="submit" class="btn btn-info" name="print" value="Print" onclick="window.print()">
                            
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