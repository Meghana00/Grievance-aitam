
<?PHP 
session_start();
include './../../include/config.php';
if (!isset($_SESSION['sess_user'])) {
	header("Location: ./../../index.php");
}
$active_user = $_SESSION['sess_user'];
$msg = "";
$error = '';
$GrievanceId=$_POST['id'];
$query= mysqli_query($conn,"SELECT * FROM `grievances` WHERE `GrievanceId` = $GrievanceId ");
$row = mysqli_fetch_array($query);
?>    
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
						   <input type="text" class="form-control border-0  " value="<?php echo htmlentities($row['FullName']) ?>" >
						   </div>
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">Rollno <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0  " value="<?php echo htmlentities($row['RollNo']) ?>">
						   </div>
					   </div>
					   <div class="row mb-3">
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">Gender <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0  " value="<?php echo htmlentities($row['Gender']) ?>" >
						   </div>
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">Email <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0  " value="<?php echo htmlentities($row['Email']) ?>" >
						   </div>

					   </div>
					   <div class="row mb-3">
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">Grievance <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0  " value="<?php echo htmlentities($row['Grievance']) ?>">
						   </div>
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">RegDate <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0  " value="<?php echo htmlentities($row['RegDate']) ?>" >
						   </div>

					   </div>
					   <div class="row mb-3">
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">Redressed On <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0  " value="<?php echo htmlentities($row['SolDate']) ?>" >
						   </div>
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">Status <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0  " value="<?php echo htmlentities($row['Status']) ?>" >
						   </div>

					   </div>
					   <div class="row mb-3">
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">GrievanceId <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0  " value="<?php echo htmlentities($row['GrievanceId']) ?>" >
						   </div>
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">GrievanceType <span>:<span></h5>
						   </div>
						   <div class="col-sm-3 col-md-3">
						   <input type="text" class="form-control border-0  " value="<?php echo htmlentities($row['GrievanceType']) ?>" >
						   </div>

					   </div>
					   <div class="row mb-3">
						   <div class="col-sm-3 col-md-3">
							   <h5 class="text-success fw-bold">Solution <span>:<span></h5>
							  
						   </div>
						   <div class="col-sm-9 col-md-9">
							   <input type="textarea" class="form-control border-0 " rows="4" cols="100" value="<?php echo htmlentities($row['Solution']) ?>">
						   </div>
					   </div>
					   <?php if ($row['Status'] == 'Open'||$row['Status'] == 'Reopened') {
					   ?>
					   <div class="mb-3 mt-5">
					   <button class="btn  btn-success " data-bs-toggle="modal" data-bs-target="#Redress">Take Action</button>
					   <button class="btn  btn-danger "  data-bs-toggle="modal" data-bs-target="#rejectGrievance"> Reject </button>
					   <?php } ?>
				   </div>
			   </div>
		   </div>
	   </div>

<!-- Modal -->
<div class="modal fade" id="Redress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Redress The Grievance Here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="updateUser">
			<div class="form-group">
    			<label for="exampleFormControlFile1">GrievanceId</label>
    			<input type="text" class="form-control-file" id="Gid" value="<?php echo htmlentities($row['GrievanceId']) ?>" >
 			</div>
			<div class="form-group">
    			<label for="exampleFormControlTextarea1">Reply</label>
    			<textarea class="form-control" id="Solution" rows="3"></textarea>
  			</div>
			<!-- <div class="form-group">
    			<label for="exampleFormControlFile1">Example file input</label>
    			<input type="file" class="form-control-file" id="exampleFormControlFile1">
 			</div> -->
			 <div class="row"><h6 class="redress-response"></h6></div>
			<div class="text-center">
				<button type="button" onclick="Redress()" class="btn btn-success redress-btn">Reply</button>
			</div>	
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->


<!-- rejectmodal -->
<div class="modal fade" id="rejectGrievance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">!Alert  </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <h1 for="recipient-name" class="col-form-label text-danger reject-response ">Are Sure to Reject</h1>
            <input type="Hidden" class="form-control" id="Gid1" value="<?php echo htmlentities($row['GrievanceId']) ?>">
          </div>
        </form>
		<div class="row text-danger rejectgrievance-response" ></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger reject-btn" onclick="RejectGrievance()">Reject</button>
      </div>
    </div>
  </div>
</div>
<!-- rejected modal -->
<script href="./../script.js"></script>


	   <!--end Grievance details page-->