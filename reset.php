<?php 
session_start();
include('include/config.php');
$msg='';
$msg1='';
if(isset($_POST['Reset']))
{
    $UserName = $_GET['UserName'];
    $UserType= $_GET['UserType'];
    // echo $UserType;
	$Password=$_POST['Password'];
    $ConfirmPassword=$_POST['ConfirmPassword'];
    if($Password==$ConfirmPassword){

        if($UserType=='ADMIN'){
            $sql="UPDATE `admin` SET `Password`='$ConfirmPassword' WHERE `UserName`= '$UserName' ";   
        }elseif($UserType=="COMMITTEE"){
            $sql="UPDATE `committee` SET `Password`='$ConfirmPassword' WHERE `UserName`= '$UserName' ";
        }elseif($UserType=='STUDENT'||'FACULTY'||'PARENT'){
            $sql="UPDATE `users` SET `Password`='$ConfirmPassword' WHERE `UserName`= '$UserName' ";
        }

        $query = mysqli_query($conn,$sql);
        if ($query) {
            $msg="Password Reset Successful";
        }else{
            $msg="Password Reset Failed Try Again!!";
        }

    }else{
        $msg1="Password And ConfirmPassword Must Match";
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

<body style="background:url('./assets/images/aitam_ablock.jpg'); background-repeat:no-repeat;background-position:center ;background-size:cover;">
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
                                
                                <h3 class="text-success text-center border-bottom border-success p-3">Reset Password</h3>
                            </div>
                            <form method="POST" >
                                <div class="mb-3 mt-2">
                                  <label for="Email" class="form-label">New Password</label>
                                  <input type="password" name="Password" class="form-control border-success shadow-none " id="Email" aria-describedby="emailHelp">
                                  
                                </div>
                                <div class="mb-3 ">
                                  <label for="Password" class="form-label">Confirm Password</label>
                                  <input type="password" name="ConfirmPassword" class="form-control border-success shadow-none " id="Email" aria-describedby="emailHelp">
                               
                                </div>
                                <div class="row mt-3 text-danger fw-bold">
                                    <?php if ($msg1) {
                                        echo htmlentities($msg1);
                                    } ?>
                                </div>
                                <div class="row mt-3 text-danger fw-bold"><?php if ($msg) {
									echo htmlentities($msg);
								} ?></div>
                                
                                <div class="row">
								<?php if($msg) {?>	
								<div class="mt-3 text-center">
									<a href="index.php" class="btn  btn-success border-light shadow-none w-25 mb-3 "> Home </a>
								</div>
								<?php }else {?>
                                <div class="mt-3 text-center">
                                    <input type="submit" name="Reset" value="Reset" class="btn  btn-success border-light shadow-none w-25 mb-3">
                                </div>
								<?php }?>
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
		<footer class="text-center text-lg-start bg-light text-white fixed-bottom">

            <!-- Copyright -->
            <div class="text-center p-1" style="background-color: #5cb85c;">
              © 2021 Copyright: designed and developed by
              <a class=" fw-bold text-danger" href="http://aitamsac.in/">DEVELOPER's CLUB</a>
            </div>
            <!-- Copyright -->
          </footer>
		<!--end footer-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="./assets/js/script.js"></script>
	</body>

	

	                           
								
								
								
								
								
								
							