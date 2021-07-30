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
	<link href="./assets/css/main.css" rel="stylesheet" /> </head>
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
				<div class="col-sm-9 mt-5">
					<div class="container mt-3 ">
						<!--header row-->
						<div class="row ">
							<div class="col d-flex justify-content-center">
								<div class="col-sm-1 "> <i class="far fa-user-circle ms-3" style="font-size: 3rem;"></i> </div>
								<div class="col-sm-11 ">
									<p class="ms-1 fw-lighter text-success" style="font-size:32px;">Mail Response</p>
								</div>
							</div>
						</div>
						<!--end header row-->
						<div class="row d-flex justify-content-center">
						
							<div class="col-sm-12 text-center border mt-5 shadow shadow-regular">
								<p class="ms-1 fw-lighter text-success p-5" style="font-size:32px;"><?php echo htmlentities($msg) ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 mt-5 p-2">
					<h3 class="text-success">About Grievance Cell</h3> Our organization has a Grievance Redressal Cell / Faculty Feedback to redress the grievances / Faculty Feedback of its students/Faculty regarding academic matters, library, canteen, hostels, and other central services.</br> Students/Faculty may also post their grievances in the Grievance boxes available in the campus & Feedback facility of students and faculty is also available in AICTE web-portal.</br> &nbsp;
					<h4 class="text-success">Grievance Cell Committee</h4> 1. Dr D.Vishnu Murthy - Convener</br> 2. Dr D.Azad - Member</br> 3. Sri. Ch.Rajasekhar Rao - Member</br> 4. Sri T.Prabhakara Rao - Member</br> 5. Sri B.Kishore Kumar - Member</br> 6. Dr.M.V.Subba Rao - Member</br>
					<div class="mb-5"></div>
				</div>
			</div>
		</div>
		<!-- response msg mailer end -->
	<footer>
		<div style="background-color:#5cb85c;" class="p-2">
			<div class="container">
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-6">
						<p class="justify-content-md-center text-white">@copyright | WEB SAC-AITAM</p>
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>