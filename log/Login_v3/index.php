<?php 
$koneksi = new mysqli("localhost","root","","perhotelan");
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Extreme Hotel</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Extreme Hotel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li> 
             <li><a href="index.php?page=kamar"><i class="fa fa-dashboard"></i> Kamar</a></li>
              <li><a href="index.php?page=pengunjung"><i class="fa fa-dashboard"></i> Pengunjung</a></li> 
              <li><a href="index.php?page=cek_in"><i class="fa fa-dashboard"></i> Cek-in</a></li>  
              <li><a href="index.php?page=laporan"><i class="fa fa-dashboard"></i> Laporan</a></li>  
            
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

      <?php 
      if (isset($_GET['page'])) {
        if($_GET['page'] == 'dashboard' || $_GET['page'] == ''){
        include 'views/dashboard.php';
        } 
        elseif ($_GET['page'] == 'kamar') {
        include'views/kamar.php';
        }
        elseif ($_GET['page'] == 'pengunjung') {
        include 'views/pengunjung.php';
        }
        elseif ($_GET['page'] == 'laporan') {
        include 'views/laporan.php';
        }
        elseif ($_GET['page']=="cek_in") {
          include 'views/cek_in.php';
        }
        elseif ($_GET['page']=="hapus") {
          include 'views/hapus.php';
        }
        elseif ($_GET['page']=="tambahkamar") {
          include 'views/tambahkamar.php';
        }
      }
      

       ?>

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>

  </body>
</html>