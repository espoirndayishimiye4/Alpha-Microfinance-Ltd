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
    
    <div class="col-lg-12"><h1 style="color:#0B2752;margin-top:20px">Change Password</h1></div>
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
                <div class="col-lg-5 mb-4 mt-4">
                    <label  class="form-label">Enter Old Password</label>
                    <input type="password" name="username" class="form-control"  autocomplete="off" required >
                
                    <label  class="form-label">Enter New Password</label>
                    <input type="password" name="password" class="form-control" required >

                    <label  class="form-label">Comfirm New Password</label>
                    <input type="password" name="password" class="form-control" required >
               <br>
                    <button style="background-color:#0B2752;color:#fff" name="login" type="submit" class="btn btn-primary">Change Password</button> 
                </div>
            </div>
       </form> 
        <br> 
    </div>
</div>
           

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