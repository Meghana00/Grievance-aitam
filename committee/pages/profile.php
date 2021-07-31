<?PHP 
session_start();
include './../../include/config.php';
if (!isset($_SESSION['sess_user'])) {
	header("Location: ./../../index.php");
}
$active_user = $_SESSION['sess_user'];
$msg = "";
$error = '';
$users= mysqli_query($conn,"SELECT * FROM `committee` WHERE `UserName` = '$active_user'");
$usersrow = mysqli_fetch_array($users);
?>     
     
     <div class="row justify-content-center">
        <div class="col-sm-8  overview text-dark">
          <div class="card bg-light text-success shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My Profile</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-10">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Full Name</label>
                        <input type="text" name="FullName" id="FullName" class="form-control form-control-alternative" placeholder="Username" value="<?php echo htmlentities($usersrow['FullName'])?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-10">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" name="Email" id="Email" class="form-control form-control-alternative" placeholder="jesse@example.com" value="<?php echo htmlentities($usersrow['Email'])?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-10">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Branch</label>
                        <input type="email" name="Email" id="Branch" class="form-control form-control-alternative" placeholder="jesse@example.com" value="<?php echo htmlentities($usersrow['Branch'])?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Employee Id</label>
                        <input type="text" id="EmpId" class="form-control form-control-alternative" placeholder="First name" value="<?php echo htmlentities($usersrow['EmpId'])?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">UserType</label>
                        <input type="text" id="UserType" class="form-control form-control-alternative" readonly placeholder="Last name" value="<?php echo htmlentities($usersrow['UserType'])?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Designation</label>
                        <input type="text" id="Designation" class="form-control form-control-alternative" placeholder="First name" value="<?php echo htmlentities($usersrow['Designation'])?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Duty</label>
                        <input type="text" id="Duty" class="form-control form-control-alternative" readonly placeholder="Last name" value="<?php echo htmlentities($usersrow['Duty'])?>">
                      </div>
                    </div>
                  </div>
                </div>
                
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-md-10">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Mobile</label>
                        <input type="email" name="Email" id="Mobile" class="form-control form-control-alternative" placeholder="jesse@example.com" value="<?php echo htmlentities($usersrow['Mobile'])?>" >
                      </div>
                    </div>
                  </div>  
              </form>
            </div>
            <duv class="row update-response"></duv>
            <div class="card-header bg-white border-0 align-items-end">
              <div>
                  <button class="btn btn-md btn-success update-btn" onclick="updateprofile()" type="button">Update</button>
                  <!-- <a href="#!" class="btn btn-sm btn-primary" >Update</a> -->
              </div>
          </div>
          
        </div>
    </div> 