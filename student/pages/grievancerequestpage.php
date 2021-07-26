<?PHP 
session_start();
include './../../include/config.php';
if (!isset($_SESSION['sess_user'])) {
	header("Location: ./../../index.php");
}
$active_user = $_SESSION['sess_user'];
$msg = "";
$error = '';
$users= mysqli_query($conn,"SELECT * FROM `users` WHERE `UserName` = '$active_user'");
$usersrow = mysqli_fetch_array($users);

?>  
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card mt-5 border-dark" style="background:#a0f9a0;">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-1"> <i class="far fa-user-circle ms-2" style="font-size: 3rem;"></i> </div>
                    <div class="col-sm-11">
                        <p class="ms-1 fw-lighter text-dark" style="font-size:32px;">Write Your Grievances Here</p>
                    </div>
                </div>
                <form method="POST">
                    <div class="container">
                        <!--row1-->
                        <div class="row mt-3">
                            <div class="col-sm-6 ">
                                <div class=" mb-3 mt-3">
                                    <label for="Fullname" class="form-label text-dark">Full Name</label>
                                    <input type="text" class="form-control shadow-none " id="FullName" name="FullName" placeholder="Enter Fullname" value="<?php echo htmlentities($usersrow['FullName'])?>" readonly> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class=" mb-3 mt-3">
                                    <label for="Rollno" class="form-label text-dark">RollNumber</label>
                                    <input type="text" class="form-control shadow-none " id="RollNo" name="RollNo" placeholder="Enter Rollno"value="<?php echo htmlentities($usersrow['RollNo'])?>" readonly> </div>
                            </div>
                        </div>
                        <!--end row1-->
                        <!--row2--->
                        <div class="row ">
                            <div class="col-sm-6">
                                <div class="col-auto  mb-3 ">
                                    <label for="Gender" class="form-label text-dark">Gender</label>
                                    <input type="text" class="form-control shadow-none " id="Gender" name="Gender" placeholder="Enter Gender" value="<?php echo htmlentities($usersrow['Gender'])?>" readonly> 
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-auto mb-3">
                                    <label for="email" class="form-label text-dark">Email<span class="ms-2">(Use your domain mail)</span></label>
                                    <input type="email" class="form-control shadow-none " id="Email" name="Email" placeholder="youremail@domain.com" value="<?php echo htmlentities($usersrow['Email'])?>"> 
                                </div>
                            </div>
                        </div>
                        <!--end row2-->
                        <div class="row ">
									<div class="col-sm-6 ">
										<div class=" col-auto mb-3 ">
											<label for="Gender" class="form-label">GrievanceType</label>
											<select class="form-select shadow-none border-success" aria-label="Default select example" name="GrievanceType" id="GrievanceType">
												<option selected>--select--</option>
												<option value="Infrastucture">Infrastucture</option>
												<option value="Ragging">Ragging</option>
											</select>
										</div>
									</div>

								</div>
                        <!--row3-->
                        <div class="row mb-3">
                            <div class="mb-3">
                                <label for="yourgrievance" class="form-label text-dark">Your Grievance</label>
                                <textarea class="form-control shadow-none " id="Grievance" name="Grievance" rows="5" placeholder="Give a brief note of your grievance"></textarea>
                            </div>
                        </div>
                        <!--end row3-->
                        <div class="row Register_response"></div>
                        <div class="mb-3 text-center">
                            <button name="send" type="button" onclick="RegisterGrievance()"  class="btn  btn-dark shadow-none border-light"><i class="far fa-paper-plane"></i><span class="ms-2">Send</span></button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>