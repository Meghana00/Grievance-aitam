<?php
session_start();
include('include\config.php');
$error='';
$msg='';
$Logintype=mysqli_real_escape_string($conn,$_GET['Logintype']);

if(isset($_POST['login']))
{
	$UserName = $_POST['UserName'];
    $Password = $_POST['Password'];
	if($Logintype=="ADMIN"){
		$sql = "SELECT * FROM `admin` WHERE `UserName` = '$UserName' ";
    	$query = mysqli_query($conn,$sql);
   		$row = mysqli_fetch_array($query);
		if($row['UserName']==$UserName){
			if($row['Password']==$Password){
				$_SESSION['sess_user'] = $row['UserName'];
            	echo "<script type='text/javascript'> document.location = './admin/dashboard.php'; </script>";
			}
			else{
				$error="Password Incorrect";
			}
		}else{
			$error="UserName Incorrect";
		}   
	}
	elseif($Logintype=="STUDENT"||$Logintype=="FACULTY"){
		$sql = "SELECT * FROM `users` WHERE `UserName` = '$UserName' ";
    	$query = mysqli_query($conn,$sql);
   		$row = mysqli_fetch_array($query);
		if($row['UserName']==$UserName){
			if($row['Password']==$Password){
				$_SESSION['sess_user'] = $row['UserName'];
            	echo "<script type='text/javascript'> document.location = './student/dashboard.php'; </script>";
			}
			else{
				$error="Password Incorrect";
			}
		}else{
			$error="UserName Incorrect";
		}
	}   
	elseif($Logintype=="COMMITEE"){
		$sql = "SELECT * FROM `committee` WHERE `UserName` = '$UserName' ";
    	$query = mysqli_query($conn,$sql);
   		$row = mysqli_fetch_array($query);
		if($row['UserName']==$UserName){
			if($row['Password']==$Password){
				$_SESSION['sess_user'] = $row['UserName'];
            	echo "<script type='text/javascript'> document.location = './committee/dashboard.php'; </script>";
			}
			else{
				$error="Password Incorrect";
			}
		}else{
			$error="UserName Incorrect";
		}
	}

    // $sql = "SELECT * FROM `admin` WHERE `username` = '$username' ";
    // $query = mysqli_query($conn,$sql);
    // $row = mysqli_fetch_array($query);

    // if($row['password'] == $password )
    // {
    //         $_SESSION['sess_user'] = $row['username'];
    //         echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
            
    // }
    // else
    // {
    //   $error="UserName Or Password Incorrect";
    //   // echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    // }
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
	<title>Login - Grievance Cell</title>
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link href="./assets/css/mainstyle.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<style>
	h3:hover{
		background:bla
	}
</style>
   

<body style>
	<!--header-->
	<main>
	<nav class="navbar shadow" style="background-color:#6600ff"  data-aos="zoom-out" data-aos-duration="1500">
    <div class="container-fluid">
       <a class="navbar-brand" href="#">
       </a>
    
        <div class="mx-auto">
            <img src="./assets/images/aitam_logo.jpg" class="mb-3" alt="" width="50" height="42"><span class="ms-3 fw-bold display-6" style="color:#ffffff;">AITAM</span>
        </div>
     </nav> 
		
	</main>
	<!--header-->
	<!-- login ---------------->
	<div class="container mt-5">
		<div class="row mx-auto mt-5">
			<div class="col-sm-3 col-md-3"></div>
			<div class="col-sm-6 col-md-6">
				<div class="card mb-5 mt-5 p-2  shadow rounded  " data-aos="zoom-out" data-aos-duration="1500" >
					<div class="card-body mt-2 ">
						<div class="row mb-3">
							
							<h3 class=" border-bottom   text-center  p-3" style="color:#6600ff;"><?php echo htmlentities($Logintype) ?> LOGIN FORM</h3>
						</div>
						<form method="POST"  class="mt-4" style="border-radius:30px;">
							<div class="mb-3 mt-2">							 
							  <input type="email" placeholder="Email" name="UserName" class="form-control border-primary shadow-none " id="Email" aria-describedby="emailHelp">
							  
							</div>
							<div class="mb-3 ">
							  <input type="password" placeholder="Password" name="Password" class="form-control border-primary shadow-none " id="Password">
							</div>
							<div class="row mt-3  text-danger" >
								<div class="col-sm-6"><?php echo htmlentities($error)?></div>	
									
							</div>
							<div class="row mt-3">
								<div class="col-sm-6 mb-3"><a href="mail.php" class="text-decoration-none mb-3 text fw-bold">Forgot Your Password ?</a></div>
                                 <div class="col-sm-3"></div>
								<div class="col-sm-3"><a href="register.php?Logintype=<?php echo htmlentities($Logintype)?>" class="text-decoration-none mb-3  fw-bold ">New User?</a></div>
								
							</div>
							
							<div class="row">
							<div class="mt-3 text-center ">
								<input type="submit" name="login"  style="background-color:#6600ff" value="Login" class="btn   border-light  text-white shadow-none w-100 py-2 mb-3">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3"></div>

		</div>
	</div>
	<!--end login----------->
	<footer class="text-center text-lg-start bg-light text-white fixed-bottom">

  <!-- Copyright -->
<div class="text-center p-1" style="background: #6600ff" >
  © 2021 Copyright: Designed and Developed by Developers Club of 
  <a class=" fw-bold text-danger" href="http://aitamsac.in/">AITAM SAC</a>
</div>
<!-- Copyright -->
</footer>
    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="./assets/js/script.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>



	









