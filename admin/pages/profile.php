<?PHP 
session_start();
include './../../include/config.php';
if (!isset($_SESSION['sess_user'])) {
	header("Location: ./../../index.php");
}
$active_user = $_SESSION['sess_user'];
$msg = "";
$error = '';
$admin= mysqli_query($conn,"SELECT * FROM `admin` WHERE `UserName` = '$active_user'");
$adminRow = mysqli_fetch_array($admin);
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
                        <input type="text" name="FullName" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo htmlentities($adminRow['FullName'])?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-10">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" name="Email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com" value="<?php echo htmlentities($adminRow['Email'])?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-10">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Branch</label>
                        <input type="email" name="Email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com" value="CSE">
                      </div>
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Lucky">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Jesse">
                      </div>
                    </div>
                  </div> -->
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-md-10">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Mobile</label>
                        <input type="email" name="Email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com" value="<?php echo htmlentities($adminRow['Mobile'])?>" >
                      </div>
                    </div>
                  </div>  
              </form>
            </div>
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Update</a>
                </div>
              </div>
          </div>
          
        </div>
    </div> 