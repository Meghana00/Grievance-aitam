<?php
session_start();
include('include/config.php');
$Logintype=mysqli_real_escape_string($conn,$_GET['Logintype']);
$msg='';
require './include/PHPMailer.php';
require './include/SMTP.php';
require './include/Exception.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['Register']))
{
    $FullName = $_POST['FullName'];
    $RollNo= $_POST['RollNo'];
    $Email= $_POST['Email'];
    $Branch= $_POST['Branch'];
    $Gender= $_POST['Gender'];
    $Mobile= $_POST['Mobile'];
    $UserType= $Logintype;
	$Status=0;
    

    	$sql = "INSERT INTO `users` (`FullName`,`RollNo`,`Email`,`Branch`,`Gender`,`Mobile`,`UserType`,`Status`,`Dnt`) VALUES ('$FullName','$RollNo','$Email','$Branch','$Gender','$Mobile','$UserType','$Status','".date("Y-m-d H:i:s")."')";
    	$query = mysqli_query($conn,$sql);

			if(isset($query))
			{	
				$subject="Mail Verification";

				$mailHtml="Please confirm your account registration by clicking the button or link below:<html><br> <a href='http://localhost/grievance-aitam/mailer.php?Email=$Email'>http://localhost/grievance-aitam/mailer.php?Email=$Email'</a></html>";

				$mail= new PHPMailer();
				$mail->isSMTP();
				$mail->Host="smtp.gmail.com";
				$mail->SMTPAuth="true";
				$mail->SMTPSecure="tls";
				$mail->Port="587";
				$mail->Username="grievanceaitam@gmail.com";
				$mail->Password="Qwerty@999";
				$mail->Subject=$subject;
				$mail->setFrom("grievanceaitam@gmail.com");
				$mail->Body=$mailHtml;
				$mail->addAddress($Email);
				if($mail->send()){
				$msg="We've just sent a verification link to $Email. Please check your inbox and click on the link to get started. If you can't find this email (which could be due to spam filters), just request a new one here.";
				}
				else{
				$msg=" Mail failed";
				}
				$mail->smtpClose();

			}
			else
			{
					echo '<script>alert("Fail");</script>';
					echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
			}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Favicon-->
	<link rel="icon" href="../assets/images/aitamlogo.png" type="image/gif" sizes="16x16">
	<!-- Page title -->
	<title>Register - Grievance Cell</title>
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="./assets/css/mainstyle.css" rel="stylesheet"> </head>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


<body style
	<!--header-->
	<main>
	<nav class="navbar shadow" style="background: linear-gradient(to right, #1758e8 0%, #e227a3 100%);"  data-aos="zoom-out" data-aos-duration="1500">
    <div class="container-fluid">
       <a class="navbar-brand" href="#">
       </a>
    
        <div class="mx-auto">
            <img src="./assets/images/aitam_logo.jpg" class="mb-3" alt="" width="50" height="42"><span class="ms-3 fw-bold display-6" style="color:#ffffff;">AITAM</span>
        </div>
     </nav> 
	</main>
	<!--end header-->


		<!-- Register ---------------->
		<div class="container mt-5">
	<div class="row mx-auto mt-5">
		<div class="col-sm-2 col-md-2"></div>
		<div class="col-sm-8 col-md-8">
			<div class="card mb-5 p-2  shadow rounded" data-aos="zoom-out" data-aos-duration="1500">
				<div class="card-body">
					<div class="row mb-3">
						<h3 class="  border-success p-3 text-center"><?php echo htmlentities($Logintype) ?> REGISTRATION FORM</h3> </div>
					<form method="POST">
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="fullname" class="form-label">Full Name</label>
									<input type="text" name="FullName" class="form-control   shadow-none" id="Fullname"> </div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="rollid" class="form-label">RollNo/Employee Id</label>
									<input type="text" name="RollNo" class="form-control   shadow-none" id="rollid"> </div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="Email" class="form-label">Email address</label>
									<input type="email" name="Email" class="form-control   shadow-none " shadow-none id="Email" aria-describedby="emailHelp"> </div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="department" class="form-label">Department</label>
									<select id="department" class="form-select   shadow-none" name="Branch">
										<option value="" selected>---Select---</option>
										<option value="CSE">CSE</option>
										<option value="ECE">ECE</option>
										<option value="EEE">EEE</option>
										<option value="CIVIL">CIVIL</option>
										<option value="MECH">MECHANICAL</option>
										<option value="IT">IT</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="gender" class="form-label">Gender</label>
									<select id="gender" class="form-select   shadow-none " name="Gender">
										<option value="" selected>---Select---</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="mobile" class="form-label">Mobile no</label>
									<input type="text" name="Mobile" class="form-control   shadow-none" id="mobile"> </div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-sm-6 mb-3"><a href="index.php" class="text-decoration-none  fw-bold mb-3">Already an account ?</a></div>
							<div class="col-sm-4"></div>
							<div class="col-sm-2">
								<button type="submit" name="Register" class="btn  border-light mb-3">Register</button>
							</div>
						</div>
						<div class="row mt-4 text-danger fw-bold">
							<?php echo htmlentities($msg) ?>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2"></div>
	</div>
</div>
		<!--end Register----------->
		<!--footer-->
		<footer class="text-center text-lg-start bg-light text-white fixed-bottom">

  <!-- Copyright -->
<div class="text-center p-1" style="background-color:#6600ff">
  © 2021 Copyright: Designed and Developed by Developers Club of 
  <a class=" fw-bold text-danger" href="http://aitamsac.in/">AITAM SAC</a>
</div>
<!-- Copyright -->
</footer>
		<!--end footer-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="./assets/js/script.js"></script>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
	</body>

	

	                           
								

								
								
								
							