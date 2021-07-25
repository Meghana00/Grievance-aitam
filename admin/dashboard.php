<?php
include('include/config.php');
session_start();
if(!isset($_SESSION["sess_user"])){
	echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
	echo session_status();
}
else
{
	$active_user=$_SESSION["sess_user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset='utf-8'>
    <!--Favicon-->
    <link rel="icon" href="./assets/images/aitamlogo.png" type="image/gif" sizes="16x16">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>DashBoard-Aitam</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
	<link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
	
    <link rel="stylesheet" href="./assets/style.css">
    <!-- table-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    

<body oncontextmenu='return false' class='snippet-body'>
<body id="body-pd" onload="ajaxProfilePageCall()">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Grievance Cell</span> </a>
                <div class="nav_list">
                    <a href="#" onclick="ajaxProfilePageCall()" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">My Profile</span> </a>
                    <a href="#" onclick="ajaxGrievancePageCall()" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Greivance Members</span> </a>
                    <a href="#" onclick="ajaxAccountPageCall()" class="nav_link" > <i class='bx bx-user nav_icon'></i><span class="nav_name">Account Activation</span> </a>
                    <a href="#" onclick="ajaxGrievanceMemPageCall()" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Greivance Members</span> </a>
                    <a href="#" onclick="ajaxGrievanceTypePageCall()" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Greivance Types</span> </a>
                    <a href="#" onclick="ajaxReportsPageCall()" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Reports</span> </a>
                    <a href="#" onclick="ajaxChangePassPageCall()" class="nav_link"> <i class='bx bx-key'></i> <span class="nav_name">Change Password</span> </a>
                </div>
            </div>
            <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <!--Container Main end-->
    <!-- table container -->
    <div class="ajax-main-content" >
           
    </div>
    <!-- table container -->
    
 
    <script type='text/javascript' src='./assets/script.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'> </script>
    <!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Core theme JS-->
	<!-- <script src="./../assets/js/DashboardScript.js"></script> -->
    <script src="./script.js"></script>
	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
<?php }?>