<?php
session_start();
error_reporting(0);
include ("function/function.php");
if(! $_SESSION['username']){
session_destroy();
header('location:index.php');
}
else{

if(isset($_POST['submit'])){
	$location=$_POST['location'];

	$sql = $conn->prepare("select location_name from location where location_name = ?");
  		$sql->bind_param("s",$location);
  		$sql->execute();
  		$result = $sql->get_result();
  		if ($result->num_rows==1) {
  		echo "<script>alert('Sorry! location name already exist, Thanks')</script>";
  		header('location:edit-location.php');
  		// echo "<script>window.open('edit-location.php','_self')</script>";
  		exit();
  		}

		$id=$_GET['id'];

		$sql = $conn->prepare("UPDATE location SET location_name=? WHERE id=? ");
		$sql->bind_param("si", $location, $_GET["id"]);	
		if($sql->execute()) {
			echo "<script>alert('Location Updated Succesfully, Thanks')</script>";

		}
	}
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Howdy! <?php echo $_SESSION['username']; ?> </title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>


</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Edit Location</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Form fields</div>
									<div class="panel-body">
										<form method="post" name="chngpwd" class="form-horizontal" onSubmit="return valid();">
										
											
  	        	  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

		<?php	
		$id=$_GET['id'];
		$sql="select * from location where id=$id";

		$result=$conn->query($sql);
		
		if($result->num_rows >0){
										        
		while ( $row = $result->fetch_assoc()) {	

		?>

											<div class="form-group">
												<label class="col-sm-4 control-label">location Name</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" value="<?php echo htmlentities($row['location_name']);?>" name="location" id="brand" required>
												</div>
											</div>
											<div class="hr-dashed"></div>
											
										<?php }} ?>
								
											
											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
								
													<button class="btn btn-primary" name="submit" type="submit">Submit</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
							
						</div>
						
					

					</div>
				</div>
				
			
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
<?php } ?>