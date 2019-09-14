<?php
session_start();
error_reporting(0);
include ("function/function.php");
if(! $_SESSION['username']){
session_destroy();
header('location:index.php');
}
else{
if(isset($_GET['del'])){
	
$id=$_GET['del'];

$sql = "delete from user where id =$id";
$result = $conn->query($sql);
 
$msg="user Deleted Successfully";

}

if(isset($_REQUEST['eid'])){
	
$eid=intval($_GET['eid']);
$status=0;

$sql = "UPDATE user SET status=$status WHERE  id=$eid";
$query =$conn->query($sql);


$msg="User Successfully Activated";
}elseif(isset($_REQUEST['aeid'])){

$aeid=intval($_GET['aeid']);
$status=1;

$sql = "UPDATE user SET status=$status WHERE  id=$aeid";
$query =$conn->query($sql);
$msg="User Deactivated";
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
	
	<title> Howdy! <?php echo $_SESSION['username']; ?>  </title>

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

						<h2 class="page-title">Manage user</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Listed  User</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								
							<pre><table id="zctb" class="display table table-striped table-bordered table-hover" cellpadding="0" contenteditable="0" cellspacing="0" width="50">
									<thead>
										<tr>
											<th>#</th>
											<th>Firstname</th>
											<th>Lastname</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Company Name</th>
											<th>Service</th>
											<th>Service Location</th>
											<th>Country</th>
											<th>Email Confirmation</th>
											<th>Action(edit/delete)</th>
											<th>De-activate/Activate User</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>#</th>
											<th>Firstname</th>
											<th>Lastname</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Company Name</th>
											<th>Service</th>
											<th>Service Location</th>
											<th>Country</th>
											<th>Email Confirmation</th>
											<th>Action(edit/delete)</th>
											<th>De-activate/Activate User</th>
										</tr>
										
									</tfoot>
									<tbody>

									<?php 
										$sql = "SELECT * from  user";
										  		$result=$conn->query($sql);
										  		$cnt=1;
								                if($result->num_rows >0){
								        
												while ( $row = $result->fetch_assoc()) 
										{	?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['firstname']);?></td>
											<td><?php echo htmlentities($row['lastname']);?></td>
											<td><?php echo htmlentities($row['email']);?></td>
											<td><?php echo htmlentities($row['phone']);?></td>
											<td><?php echo htmlentities($row['company_name']);?></td>
											<td><?php echo htmlentities($row['services']);?></td>
											<td><?php echo htmlentities($row['location']);?></td>
											<td><?php echo htmlentities($row['country']);?></td>
											<td><?php echo htmlentities($row['isEmailConfirmed']);?></td>
											<td>
												<a href="edit-users.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit" title="edit"></i></a>
												<a href="manage-users.php?del=<?php echo $row['id'];?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-close" title="delete"></i></a>
											</td>
											<td><?php if($row['status']=="" || $row['status']==0){ ?>
												<a class="text-success" href="manage-users.php?aeid=<?php echo htmlentities($row['id']);?>" onclick="return confirm('Do you really want to suspend user?')">User Activated</a>
												<?php }else {?>

												<a class="text-danger" href="manage-users.php?eid=<?php echo htmlentities($row['id']);?>" onclick="return confirm('Do you want to activate user?')">User Suspended</a>

												<?php } ?>
											</td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table></pre>

						

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
