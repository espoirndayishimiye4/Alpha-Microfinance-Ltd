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

    <!-- Main Container -->
<main id="main-container">
                   <!-- Page Content -->
                <div class="content">
                     
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Subscribe -->
                            
                            <!-- END Subscribe -->

                            <!-- Instructor -->
                            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">
                                        <i class="fa fa-fw fa-user"></i>
                                        GBU Menber
                                    </h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="push">
                                        <img class="img-avatar" src="../assets/media/avatars/avatar10.jpg" alt="">
                                    </div>
                                    <div class="font-w600 mb-5">Emmy Karangwa</div>
                                    <div class="text-muted">0786639530</div>
                                </div>
                            </a>
                            <!-- END Instructor -->

                            
                            <!-- END Course Info -->
                        </div>
                        <div class="col-xl-8">
                             <!-- Page Content -->
                <div class="content">
                    

                    <!-- Results -->
                    <div class="block">
                        <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#search-classic">Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#search-photos">Connected Service</a>
                            </li>
                           
                        </ul>
                        <div class="block-content block-content-full tab-content overflow-hidden">
                            <!-- Classic -->
                            <div class="tab-pane fade show active" id="search-classic" role="tabpanel">
                                
                                <div class="row items-push">
                                 <div class="col-12">
                                
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Emmy Karangwa
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Birth Date</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                March 22, 1994.
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email Address</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Emmy Karangwa@gamil.com
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Something</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Something
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Something</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Something
                                            </div>
                                        </div>
                                        <hr />

                                    </div>
                                    
                                </div>
                            </div>
                             
                                </div>
                                                   <div class="col-md-6 col-offset-6">
        <button type="submit" class="btn btn-primary"><a href="GUB-memberform.php" style="color: white">Update Info</a> </button>
   </div>
           
                            </div>
                            <!-- END Classic -->

                            <!-- Photos -->
                            <div class="tab-pane fade" id="search-photos" role="tabpanel">
                                <div class="font-size-h3 font-w600 py-30 mb-20 text-center border-b">
                                    <span class="text-primary font-w700">1</span> service found for 
                                </div>
                                <div class="row gutters-tiny">
                                    <div class="col-md-6 col-lg-4 push">
                                        <img class="img-fluid" src="../assets/media/photos/photo1.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 col-lg-4 push">
                                        <img class="img-fluid" src="../assets/media/photos/photo2.jpg" alt="">
                                    </div>
                               
                                </div>
                            </div>
                            <!-- END Photos -->

                         
                        </div>
                    </div>
                    <!-- END Results -->
                </div>
                <!-- END Page Content -->
                      
                        </div>
                    </div>
                </div>

            
            </main>
            <!-- END Main Container -->

           

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