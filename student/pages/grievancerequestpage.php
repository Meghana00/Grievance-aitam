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

$sql="SELECT `GrievanceType` FROM `grievancetype` WHERE `Status` = 'Active' ";
$query=mysqli_query($conn,$sql);

?> 
 <div class="container mt-5" >
      <div class="container mt-5">
         <div class="row">
             <div class="col-sm-2"></div>
             <div class="col-sm-8">
             <div class="row">
              <div class="card mt-5">
                  <div class="card-body">
                      <div class="row">
                      <p class="ms-1 fw-lighter text-success text-center" style="font-size:32px;">Write Your Grievances Here</p>
                      </div>
                      <form method="POST">
                      <div class="row">
                             <div class="col-sm-6 ">
                                <div class=" mb-3 ">
                                    <label for="Fullname" class="form-label text-dark">Full Name</label>
                                    <input type="text" class="form-control border-success shadow-none " id="FullName" name="FullName" placeholder="Enter Fullname" value="<?php echo htmlentities($usersrow['FullName'])?>" readonly> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class=" mb-3 ">
                                    <label for="Rollno" class="form-label text-dark"><?php if($usersrow['UserType']=='STUDENT'){ echo htmlentities("Roll Number");} ?> <?php if($usersrow['UserType']=='FACULTY'){ echo htmlentities("Employee Id");} ?></label>
                                    <input type="text" class="form-control  border-success shadow-none " id="RollNo" name="RollNo" placeholder="Enter Rollno"value="<?php echo htmlentities($usersrow['RollNo'])?>" readonly> </div>
                            </div>
                      </div>
                      <div class="row">
                      <div class="col-sm-6">
                                <div class="mb-3  ">
                                    <label for="Gender" class="form-label text-dark">Gender</label>
                                    <input type="text" class="form-control  border-success shadow-none " id="Gender" name="Gender" placeholder="Enter Gender" value="<?php echo htmlentities($usersrow['Gender'])?>" readonly> 
                                </div>
                            </div>
                         
                            <div class="col-sm-6">
                                <div class=" mb-3 ">
                                    <label for="email" class="form-label text-dark">Email<span class="ms-2">(Use your domain mail)</span></label>
                                    <input type="email" class="form-control border-success  shadow-none " id="Email" name="Email" placeholder="youremail@domain.com" value="<?php echo htmlentities($usersrow['Email'])?>" readonly> 
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class=" mb-3 ">
                                    <label for="email" class="form-label text-dark">UserType</label>
                                    <input type="text" class="form-control border-success  shadow-none " id="User"  value="<?php echo htmlentities($usersrow['UserType'])?>" readonly> 
                                </div>
                            </div>
                      </div>
                      <div class="row">
                          <div class="mb-3 ">
                          <label for="Gender" class="form-label">GrievanceType</label>
							<select class="form-select shadow-none border-success" aria-label="Default select example" name="GrievanceType" id="GrievanceType">
								<option selected>--select--</option>
                                <?php while($row=mysqli_fetch_array($query)){
                                 echo  '<option value="'.$row['GrievanceType'].'">'.$row['GrievanceType'].'</option>';
                                }
								?>
							</select>
                          </div>
                      </div>
                      <div class="row mb-3">
                            <div class="mb-3">
                                <label for="yourgrievance" class="form-label text-dark">Your Grievance</label>
                                <textarea class="form-control border-success shadow-none " id="Grievance" name="Grievance" rows="5" placeholder="Give a brief note of your grievance"></textarea>
                            </div>
                        </div>
                        <div class="row Register_response text-danger"></div>
                        <div class="mb-3 text-center send-btn">
                            <button name="send" type="button" onclick="RegisterGrievance()"  class="btn  btn-success shadow-none border-light">Send</button>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
             </div>
             <div class="col-sm-2"></div>
         </div>
      </div>

    </div>
