<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Grievence Member Commitee</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-14">
					<div class="table-wrap">
						<table class="table table-responsive-xl">
						  <thead>
						    <tr>
						      <th>Slno</th>
						      <th>FullName</th>
							  <th>EmpId</th>
                              <th>Email</th>
							  <th>Branch</th>
                              <th>Mobile</th>
						      <th>Duty</th>
							  <th>Action</th>
                    
						    </tr>
						  </thead>
						  <tbody id="tbody">
							  <!-- row1 -->
						    <tr class="alert" role="alert">
						    	<td>1</td>
						      	<td class='d-flex align-items-center'>
						      		<div class='pl-3 email'>
						      			<span class='mb-2' ><input type='text' class='form-control border border-white' value='Ashok'></span>
						      			<span><input type='text' class='form-control border border-white' value='Desig'></span>
						      		</div>
						     	</td>
						      	<td>Markotto89</td>
                                <td>Male</td>
                                <td>Please make changes</td>
								<td>Please make changes</td>
								<td>Please make changes</td>
						      	
						      	<td><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'><i class='fa fa-close'></i>Remove</span></button></td>
						    </tr>
							
						  </tbody>
						</table>
						
					</div>
					<div class="container mt-5 justify-content-end"><button type="button" class="open btn" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-label="Close" data-dismiss="alert" ><span aria-hidden="true"><i class="fa fa-plus"></i>Add Member</span></button></div>
				</div>
			</div>
		</div>
	</section>
<!-- Modal use -->
<div class="modal fade" id="example" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">New message</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					<form method="POST">
						<div class="row">
							Are you Sure to reject
							
							<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Recipient:</label>
							<input type="text" class="form-control" id="Email1" name="Email1">
							</div>
							
							
						</div>
						<div class="mb3 reject-response">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" name="activate-btn" onclick="RejectUser()" class="btn btn-primary">Reject</button>
						</div>
					</form>
					</div>
					
					</div>
				</div>
				</div>
				<!-- modal use end -->
				<!-- Modal use -->
				<div class="modal fade container" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Grievance Commitee Form:</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="POST">
					<div class="row">	
						<div class="col-sm-6 mb-3">
							<label for="recipient-name" class="col-form-label">MemFullName:</label>
							<input type="text" class="form-control" id="MemFullName" name="MemFullName" required>
						</div>
						<div class="col-sm-6 mb-3">
							<label for="recipient-name" class="col-form-label">MemEmpId:</label>
							<input type="text" class="form-control" id="MemEmpId" name="MemEmpId" required>
						</div>
					</div>	
					<div class="row">
						<div class="col-sm-6 mb-3">
							<label for="recipient-name" class="col-form-label">MemEmail:</label>
							<input type="text" class="form-control" id="MemEmail" name="MemEmail" required>
						</div>
						<div class="col-sm-6 mb-3">
							<label for="recipient-name" class="col-form-label">MemBranch:</label>
							<input type="text" class="form-control" id="MemBranch" name="MemBranch" required>
						</div>
					</div>
					<div class="row">	
						<div class=" col-sm-6mb-3">
							<label for="message-text" class="col-form-label">MemDuty:</label>
							<select id="MemDuty" class="form-select"name="MemDuty">
										<option value="" selected>---Select---</option>
										<option value="Ragging">Ragging</option>
										<option value="Infrastructure">Infrastructure</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class=" mb-3 col-sm-6">
							<label for="recipient-name" class="col-form-label">MemMobile:</label>
							<input type="text" class="form-control" id="MemMobile" name="MemMobile" required>
						</div>
						
					
						<div class="mb-3 col-sm-6 ">
							<label for="recipient-name" class="col-form-label">MemDesignation:</label>
							<input type="text" class="form-control" id="MemDesignation" name="MemDesignation" required>
						</div>
                    </div>
						<div class="mb3 Addmember-response">
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" name="activate-btn" onclick="Addmember()" class="btn btn-primary">Add Member</button>
						</div>
						</form>
					</div>
					</div>
				</div>
				</div>
				<!-- modal use end -->


<script>

	function generatePassword() {
    var length = 8,
        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    return retVal;
	}
	var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
//   var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
//   modalBodyInput.value = recipient
//   document.getElementById('Email').value = recipient
  document.getElementById('MemPassword').value= generatePassword()
})

var example = document.getElementById('example')
example.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
//   var modalTitle = example.querySelector('.modal-title')
//   var modalBodyInput = example.querySelector('.modal-body input')

  
//   modalBodyInput.value = recipient
  document.getElementById('Email1').value = recipient

})
</script>