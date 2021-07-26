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
    <!-- Font awesome -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link rel="stylesheet" href="./../dashassets/assets/style.css">
</head>
<body>
    

<body oncontextmenu='return false' class='snippet-body'>
<body id="body-pd" >
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Grievance Cell</span> </a>
                <div class="nav_list">
                    <a href="#"  class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">My Profile</span> </a>
                    <a href="#"  class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Greivance Members</span> </a>
                    <a href="#"  class="nav_link" > <i class='bx bx-user nav_icon'></i><span class="nav_name">Account Activation</span> </a>
                    <a href="#"  class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Greivance Members</span> </a>
                    <a href="#"  class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Greivance Types</span> </a>
                    <a href="#"  class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Reports</span> </a>
                    <a href="#"  class="nav_link"> <i class='bx bx-key'></i> <span class="nav_name">Change Password</span> </a>
                </div>
            </div>
            <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <!--Container Main end-->
    <!-- table container -->
    
    <div class="ajax-main-content" >
       <!--Grievance details--->
       <div class="container mt-5">
		   <div class="row">
			   <div class="card mt-5 shadow rounded" >
				   <div class="card-body" >
					   <div class="row">
						   <h2 class="mt-3 mb-5 text-center text-success fw-bold">Grievance Details</h2>
						</div>
					    <div class="row mb-3">
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">Fullname <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0 shadow-none " value="AshokVarma" >
						   </div>
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">Rollno <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0 shadow-none " value="19A51A0510">
						   </div>

					   </div>
					   <div class="row mb-3">
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">Gender <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0 shadow-none " value="Male" >
						   </div>
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">Email <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0 shadow-none " value="Ashok@gmail.com" >
						   </div>

					   </div>
					   <div class="row mb-3">
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">Grievance <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0 shadow-none " value="Supply e-book facility">
						   </div>
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">RegDate <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0 shadow-none " value="20-09-2021" >
						   </div>

					   </div>
					   <div class="row mb-3">
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">SolDate <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0 shadow-none " value="30-12-2021" >
						   </div>
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">Status <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0 shadow-none " value="0" >
						   </div>

					   </div>
					   <div class="row mb-3">
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">GrievanceId <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0 shadow-none " value="29087654" >
						   </div>
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">GrievanceType <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0 shadow-none " value="Education" >
						   </div>

					   </div>
					   <div class="row mb-3">
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">Solution <span>:<span></h5>
							  
						   </div>
						   <div class="col-sm-9 col-md-9">
							   <input type="textarea" class="form-control border-0 shadow-none" rows="4" cols="100" value="we will upload in the portal in pdf format">
						   </div>
					 </div>
					   <div class="mb-3 mt-5">
					   <button class="btn btn-sm btn-success">Take Action</button>
					   </div>
				  
				   </div>
			   </div>
		   </div>
	   </div>





	   <!--end Grievance details page-->
    </div>
           
    <!-- table container -->
    
 
    <script type='text/javascript' src='./../dashassets/assets/script.js'></script>
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




















<!--<table class="table">
                    <tr>
						<th scope="col">FullName:</th>
						<td scope="col"><input type="text" class="form-control border-0 shadow-none " value="AshokVarma" style="background:#a0f9a0;"></td>
						<th scope="col">RollNo:</th>
						<td scope="col"><input type="text" class="form-control border-0 shadow-none" value="AshokVarma" style="background:#a0f9a0;"></td>
                    </tr>
					<tr>
						<th>Gender:</th>
						<td><input type="text" class="form-control border-0 shadow-none" value="AshokVarma" style="background:#a0f9a0;"></td>
						<th>Email:</th>
						<td><input type="text" class="form-control border-0 shadow-none" value="AshokVarma" style="background:#a0f9a0;"></td>
                    </tr>
					<tr>
						<th>Grievance:</th>
						<td><input type="text" class="form-control border-0 shadow-none" value="AshokVarma" style="background:#a0f9a0;"></td>
						<th>RegDate:</th>
						<td><input type="text" class="form-control border-0 shadow-none" value="AshokVarma" style="background:#a0f9a0;"></td>
                    </tr>
					<tr>
						<th>SolDate:</th>
						<td><input type="text" class="form-control border-0 shadow-none" value="AshokVarma" style="background:#a0f9a0;"></td>
						<th>Status:</th>
						<td><input type="text" class="form-control border-0 shadow-none" value="AshokVarma" style="background:#a0f9a0;"></td>
                    </tr>
					<tr>
						<th>GrievanceId</th>
						<td><input type="text" class="form-control border-0 shadow-none" value="AshokVarma" style="background:#a0f9a0;"></td>
						<th>GrievanceType:</th>
						<td><input type="text" class="form-control border-0 shadow-none" value="AshokVarma" style="background:#a0f9a0;"></td>
                    </tr>
					<tr>
						<th>Solution:</th>
						<td><input type="text" class="form-control border-0 shadow-none" value="AshokVarma" style="background:#a0f9a0;"></td>
						<th></th>
						<td><input type="text" class="form-control border-0 shadow-none"></td>
						
                    </tr>
					<tr>
					<td class="border-0">
					<button class="btn btn-sm btn-dark">Take Action</button>
                    </td>
                   </tr>
                   </table>













				    <div class="row">
						   <div class="col-sm-1 col-md-3">
							   <h5>Fullname <span>:<span></h5>
						   </div>
						   <div class="col-sm-5 col-md-3">
						   <input type="text" class="form-control border-0 shadow-none " value="AshokVarma" style="background:#a0f9a0;">
						   </div>
						   <div class="col-sm-1 col-md-3">
							   <h5>Rollno <span>:<span></h5>
						   </div>
						   <div class="col-sm-5 col-md-3">
						   <input type="text" class="form-control border-0 shadow-none " value="AshokVarma" style="background:#a0f9a0;">
						   </div>

					   </div>