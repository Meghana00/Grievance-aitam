<?php
include('include/config.php');
$msg='';
$Email=mysqli_real_escape_string($conn,$_GET['Email']);
$sql1="UPDATE `users` set Status='1' where Email='$Email'";
$query1=mysqli_query($conn,$sql1);
if($query1){
	echo '<script>alert("Request Sent To Management");</script>';
	$msg="Your Mail Verification is done and Account Activation is Under Process. Once It Activated You will recieve email with crediantials ";
}
else{
	echo '<script>alert("Request Failed");</script>';
	$msg="Your Mail Verification Failed";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Favicon-->
	<!-- Page title -->
	<link rel="icon" href="./assets/images/aitamlogo.png" type="image/gif" sizes="16x16">
	<title>Mail Verification - Grievance Portal</title>
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Main CSS -->
	<link href="./assets/css/mainstyle.css" rel="stylesheet" /> </head>
</head>

<body>
	<main>
		<nav class="navbar navbar-light bg-transparent p-4">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"> </a>
				<div class="mx-auto"> <img src="./assets/images/aitam_logo.jpg" class="mb-3" alt="" width="50" height="42"><span class="ms-3 fw-bold display-6" style="color:#5cb85c;">AITAM</span> </div>
			</div>
			<div class="mx-auto ">
				<h2 class=" header  fw-normal">Grievance Redressal Portal</h2> </div>
		</nav>
	</main>

	<!-- response msg mailer -->
	<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="container  ">
						<!--header row-->
						<div class="row ">
							
								
								<div class=" ">
									<p class="ms-1 fw-bold text-success text-success text-center" style="font-size:32px;">Grievance Response</p>
								</div>
							
						</div>
						<!--end header row-->
						<div class="row d-flex justify-content-center">
						    <div class="col-sm-2"></div>
							<div class="col-sm-8 mb-5 text-center border mt-2 shadow shadow-regular">
								<p class="ms-1 fw-lighter text-success p-5" style="font-size:32px;"><?php echo htmlentities($msg) ?></p>
							</div>
							<div class="col-sm-2"></div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- response msg mailer end -->

	<!--footer-->
	<footer class="text-center text-lg-start bg-light text-white mt-3">

  <!-- Copyright -->
  <div class="text-center p-2" style="background-color: #5cb85c;">
    © 2021 Copyright: designed and developed by
    <a class=" fw-bold text-danger" href="http://aitamsac.in/">DEVELOPER's CLUB</a>
  </div>
  <!-- Copyright -->
</footer>
	<!--end footer-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>