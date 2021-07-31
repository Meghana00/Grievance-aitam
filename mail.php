<?php
session_start();
include('include/config.php');
$msg='';
require './include/PHPMailer.php';
require './include/SMTP.php';
require './include/Exception.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['Verify']))
{
    $UserName = $_POST['UserName'];
    $UserType= $_POST['UserType'];
	
    

    	// $sql = "INSERT INTO `users` (`FullName`,`RollNo`,`Email`,`Branch`,`Gender`,`Mobile`,`UserType`,`Status`,`Dnt`) VALUES ('$FullName','$RollNo','$Email','$Branch','$Gender','$Mobile','$UserType','$Status','".date("Y-m-d H:i:s")."')";
    	// $query = mysqli_query($conn,$sql);

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
				$mail->Username="dtearthmovers1026@gmail.com";
				$mail->Password="anand@123";
				$mail->Subject=$subject;
				$mail->setFrom("dtearthmovers1026@gmail.com");
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
	<title>Admin - Grievance Cell</title>
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="./assets/css/mainstyle.css" rel="stylesheet"> </head>

<body style="background:url('./assets/images/bg2.jpg'); background-repeat:no-repeat;background-position:center ;background-size:cover;">
	<!--header-->
	<main>
		<nav class="navbar navbar-light bg-transparent">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"> </a>
				<div class="mx-auto"> <img src="./assets/images/aitam_logo.jpg" class="mb-3" alt="" width="50" height="42"><span class="ms-3 fw-bold display-6" style="color:#5cb85c;">AITAM</span> </div>
			</div>
			<div class="mx-auto ">
				<h2 class=" header  fw-normal">Grievance Redressal Portal</h2> </div>
		</nav>
	</main>
	<!--end header-->


		<!-- password mail---------------->
        <div class="container mt-5">
            <div class="row mx-auto mt-5">
                <div class="col-sm-3 col-md-3"></div>
                <div class="col-sm-6 col-md-6">
                    <div class="card mb-5 p-2  shadow rounded">
                        <div class="card-body mt-2">
                            <div class="row mb-3">
                                
                                <h3 class="text-success text-center border-bottom border-success p-3">Forgot Password</h3>
                            </div>
                            <form method="POST" >
                                <div class="mb-3 mt-2">
                                  <label for="Email" class="form-label">UserEmail</label>
                                  <input type="email" name="UserName" class="form-control border-success shadow-none " id="Email" aria-describedby="emailHelp">
                                  
                                </div>
                                <div class="mb-3 ">
                                  <label for="Password" class="form-label">UserType</label>
                                  <select id="UserType" class="form-select  border-success shadow-none " name="UserType">
                                    <option value="" selected>---Select---</option>
                                    <option value="STUDENT">STUDENT</option>
                                    <option value="FACULTY">FACULTY</option>
                                    <option value="COMMITTE">COMMITTE</option>
                                    <option value="ADMIN">ADMIN</option>
                                    <option value="PARENT">PARENT</option>
                                </select>
                                </div>
                               
                               
                                
                                <div class="row">
                                <div class="mt-3 text-center">
                                    <input type="submit" name="Verify" value="Verify" class="btn  btn-success border-light shadow-none w-25 mb-3">
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3"></div>
    
            </div>
        </div>
	
		<!--end password mail----------->
		<!--footer-->
		<footer class="text-center text-lg-start bg-light text-white">

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: #5cb85c;">
    © 2021 Copyright: designed and developed by
    <a class=" fw-bold text-danger" href="http://aitamsac.in/">DEVELOPER's CLUB</a>
  </div>
  <!-- Copyright -->
</footer>
		<!--end footer-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="./assets/js/script.js"></script>
	</body>

	

	                           
								
								
								
								
								
								
							