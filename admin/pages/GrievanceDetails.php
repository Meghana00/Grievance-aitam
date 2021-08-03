
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
    <!--Bootstrap Basic Table using .table class-->
		<div class="container">
			<div class="row mt-2">
				<div class="card shadow rounded col-12">
					<div class="card-body">
						<h1 class=" text-success text-center">Grievance Details</h1>
						<div class="table-responsive">
						<table class="table  table-striped">  
							  
							<tbody>  
								<tr>
									<td class="p-4 fw-bold "><span class="text-success">UserType</span></td>  
									<td class="p-4 fw-bold"><?php echo htmlentities($row['UserType']) ?></td>  
								</tr>
								<tr >  
									<td class="p-4 fw-bold"><span class="text-success">FullName</span></td>  
									<td class="p-4 fw-bold"><?php echo htmlentities($row['FullName']) ?></td>  
									<td class="p-4 fw-bold"><span  class="text-success">Roll no</span></td>  
									<td class="p-4 fw-bold"><?php echo htmlentities($row['RollNo']) ?></td>  
								</tr> 
								<tr>  
									<td class="p-4 fw-bold"><span class="text-success">Grivanceceld</span></td>  
									<td class="p-4 fw-bold"><?php echo htmlentities($row['GrievanceId']) ?></td>  
									<td class="p-4 fw-bold"><span  class="text-success">Email</span></td>  
									<td class="p-4 fw-bold"><?php echo htmlentities($row['Email']) ?></td>  
								</tr> 
								<tr>  
									<td class="p-4 fw-bold"><span class="text-success">Grievance</span></td>  
									<td class="p-4 fw-bold"><?php echo htmlentities($row['Grievance'])?></td>  
									<td class="p-4 fw-bold"><span  class="text-success">RegDate</span></td>  
									<td class="p-4 fw-bold"><?php echo htmlentities($row['RegDate']) ?></td>  
								</tr> 
								
								<tr>  
									<td class="p-4 fw-bold"><span class="text-success">Gender</span></td>  
									<td class="p-4 fw-bold"><?php echo htmlentities($row['Gender']) ?></td>  
									<td class="p-4 fw-bold"><span  class="text-success">Grievence Type</span></td>  
									<td class="p-4 fw-bold"><?php echo htmlentities($row['GrievanceType']) ?></td>  
								</tr> 
								<tr>  
									<td class="p-4 fw-bold"><span class="text-success">Status</span></td>  
									<td class="p-4 fw-bold"><?php echo htmlentities($row['Status']) ?></td>  
									<td class="p-4 fw-bold"><span class="text-success">Solution</span></td>  
									<td class="p-4 fw-bold"><?php echo htmlentities($row['Solution']) ?></td>   
								</tr>   
								<tr>  
									<td class="p-4 fw-bold"><span class="text-success">Redressed On</span></td>  
									<td class="p-4 fw-bold"><?php echo htmlentities($row['SolDate']) ?></td>  
									<td class="p-4 fw-bold"><span  class="text-success">RedressedBy</span></td>  
									<td class="p-4 fw-bold"><?php echo htmlentities($row['RedressedBy']) ?></td>  
								</tr> 
								
							</tbody>  
							<tfoot>
							<tr>
								<?php if ($row['Status'] == 'Open'||$row['Status'] == 'Reopened') {
									?>
									<button class="btn  btn-success " data-bs-toggle="modal" data-bs-target="#Redress">Take Action</button>
									<button class="btn  btn-danger "  data-bs-toggle="modal" data-bs-target="#rejectGrievance"> Reject </button>
									<?php } ?>
								</tr>
							</tfoot>
						</table>
						</div>  

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