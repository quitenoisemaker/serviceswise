<?php
include ('../db/db.php');
session_start();

if (!(isset($_SESSION['user_email']))) {
  echo "<script>window.open('../login.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>TheAtizanz | Find well rated artisans in your locality.</title>
	
  <!-- Favicons-->
  <link rel="shortcut icon" href="img/sw.JPG" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/sw.JPG">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/sw.JPG">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/sw.JPG">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/sw.JPG">
	
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Main styles -->
  <link href="css/admin.css" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="css/custom.css" rel="stylesheet">
  <style type="text/css">
    

    #authors img{
      margin-top: -50px;

    }
    #authors .fa{
      font-size: 25px;
      color: #3292a6;
    }
     #authors .fa:hover{
      color: dimgrey;
    }
  
  </style>
	
</head>
<script>
  
</script>
<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="user_account.php"><i style="color: green;">SERVICES</i><span style="color: gold">WISE</span></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Bookings">
          <a class="nav-link" href="user_account.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">My profile </span>
          </a>
        </li>
  
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link" href="createprofile.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Edit Profile</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link" href="change_password.php">
            <i class="fa fa-fw fa-gear"></i>
            <span class="nav-link-text">Change password</span>
          </a>
        </li>
    
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>


      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          
          <!-- <a class="nav-link">welcome user</a> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">
            <i class="fa fa-home"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">My Profile</a>
        </li>
        <li class="breadcrumb-item">
          <?php if (isset($_SESSION['user_email'])) {
            $user=$_SESSION['user_email'];
            $sql = $conn->prepare("select * from user where email = ?");
            $sql->bind_param("s",$user);
            $sql->execute();
          $result = $sql->get_result();
          while($row=$result->fetch_assoc()){
          $fname = $row['firstname'];
          $lname = $row['lastname'];
          echo "<a><b>Welcome</b> $fname $lname </a>";
            }
            }
          ?>
        </li>
        
      </ol>
    <section id="authors" class="my-5">
  <div class="row">
  <div class="col-md-4 add_top_30">
  <div class="card text-center">
          <div class="card-body">
            <!-- showing the profile pic -->
            <?php if (isset($_SESSION['user_email'])) {
            $user=$_SESSION['user_email'];
            $sql = $conn->prepare("select * from user where email = ?");
            $sql->bind_param("s",$user);
            $sql->execute();
          $result = $sql->get_result();
          while($row=$result->fetch_assoc()){
          $profile_pic = $row['profile_pic'];
          
          echo "<img src='profile_image/$profile_pic' class='img-fluid rounded-circle w-50 mb-3'>";
            }
            }
          ?>

            <!-- showing the user name -->
             <?php if (isset($_SESSION['user_email'])) {
            $user=$_SESSION['user_email'];
            $sql = $conn->prepare("select * from user where email = ?");
            $sql->bind_param("s",$user);
            $sql->execute();
          $result = $sql->get_result();
          while($row=$result->fetch_assoc()){
          $fname = $row['firstname'];
          $lname = $row['lastname'];
          echo "<h3>$fname $lname</h3>";
            }
            }
          ?>
            
            <!-- showing the service -->
              <?php if (isset($_SESSION['user_email'])) {
            $user=$_SESSION['user_email'];
            $sql = $conn->prepare("select * from user where email = ?");
            $sql->bind_param("s",$user);
            $sql->execute();
          $result = $sql->get_result();
          while($row=$result->fetch_assoc()){
          $services = $row['services'];
          
          echo "<h5 class='text-muted'>$services</h5>";
            }
            }
          ?>
            <!-- showing the about -->
          <?php if (isset($_SESSION['user_email'])) {
            $user=$_SESSION['user_email'];
            $sql = $conn->prepare("select * from user where email = ?");
            $sql->bind_param("s",$user);
            $sql->execute();
          $result = $sql->get_result();
          while($row=$result->fetch_assoc()){
          $about = $row['about'];
          
          echo "<p>$about</p>";
            }
            }
          ?>
            
            <div class="d-flex flex-row justify-content-center">
             <div class="p-4">
               <a href="#"><i class="fa fa-facebook"></i></a>
             </div>
             <div class="p-4">
               <a href="#"><i class="fa fa-twitter"></i></a>
             </div>
             <div class="p-4">
               <a href="#"><i class="fa fa-instagram"></i></a>
             </div> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7 add_top_30">
        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-gear"></i>Profile details</h2>
          </div>
          <div class="form-group">
            <label><h4>Company name</h4></label>
               <?php if (isset($_SESSION['user_email'])) {
            $user=$_SESSION['user_email'];
            $sql = $conn->prepare("select * from user where email = ?");
            $sql->bind_param("s",$user);
            $sql->execute();
          $result = $sql->get_result();
          while($row=$result->fetch_assoc()){
          $company_name = $row['company_name'];
          
          echo "<p>$company_name</p>";
            }
            }
          ?>
          </div>
          <div class="form-group">
            <label><h4>Telephone</h4></label>
              <?php if (isset($_SESSION['user_email'])) {
            $user=$_SESSION['user_email'];
            $sql = $conn->prepare("select * from user where email = ?");
            $sql->bind_param("s",$user);
            $sql->execute();
          $result = $sql->get_result();
          while($row=$result->fetch_assoc()){
          $phone = $row['phone'];
          
          echo "<p>$phone</p>";
            }
            }
          ?>
          </div>
          <div class="form-group">
            <label><h4>Address</h4></label>
                  <?php if (isset($_SESSION['user_email'])) {
            $user=$_SESSION['user_email'];
            $sql = $conn->prepare("select * from user where email = ?");
            $sql->bind_param("s",$user);
            $sql->execute();
          $result = $sql->get_result();
          while($row=$result->fetch_assoc()){
          $address = $row['address'];
          
          echo "<p>$address</p>";
            }
            }
          ?>
          </div>
        </div>
      </div>
      </div>

      </section>
		<!-- /box_general-->
		
		<!-- /pagination-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © TheArtizanz 2019</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
	<script src="vendor/jquery.selectbox-0.2.js"></script>
	<script src="vendor/retina-replace.min.js"></script>
	<script src="vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/admin.js"></script>
	
</body>
</html>
<?php
if (isset($_POST['update'])) {    
  $user=$_SESSION['user_email'];
    $sql = $conn->prepare("UPDATE user SET company_name=? , phone=? , address=?  WHERE email=?");
    $company_name=$_POST['company_name'];
    $phone = $_POST['phone'];
    $address= $_POST['address'];
    $sql->bind_param("ssss",$company_name, $phone, $address,$user);  
    if($sql->execute()) {
      echo "<script>alert('Updated successfully')</script>";
      echo "<script>window.open('user_account.php','_self')</script>";
    } else {
      echo "Problem in Editing Record";
    }

  }
?>