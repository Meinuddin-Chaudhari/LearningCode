<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
 <head>
 <title>Online Banquet Booking System - Admin Dashboard</title>
 <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
    </head>
    <body>
        
       
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
      

 


         <?php include_once('includes/sidebar.php');?>

<img src="shine-wedding-altar-newlyweds-stands-backyard-decorated-with-balloons.jpg" alt="Girl in a jacket" width="1280" height="720">
         
          <?php include_once('includes/header.php');?>
          

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
              
                                    <?php 
$sql ="SELECT ID from tblcontact where IsRead is null ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalunreadquery=$query->rowCount();
?>
                                    
                                     <?php 
$sql ="SELECT ID from tbleventtype";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totaleventtype=$query->rowCount();
?>


                <!-- END Page Content -->
                 
            </main>
            <!-- END Main Container -->

            
        </div>
         
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_pages_dashboard.js"></script>

    </body>
</html>