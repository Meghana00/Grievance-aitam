<!-- <body onload="accountactivationresponse()"> -->
<section class="ftco-section">
		<div class="container ">
			<div class="row justify-content-center">
			
			<!-- Modal use -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">New message</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="POST">
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Recipient:</label>
							<input type="text" class="form-control" id="Email" name="Email">
						</div>
						<div class="mb-3">
							<label for="message-text" class="col-form-label">Password:</label>
							<input type="password" class="form-control" id="Password" name="Password">
						</div>
						<div class="mb3 activate-response">Data
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" name="activate-btn" onclick="ActivateUser()" class="btn btn-primary">Active Account</button>
						</div>
						</form>
					</div>
					
					</div>
				</div>
				</div>
				<!-- modal use end -->
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">New User Requests</h2>
				</div>
				<div class="row  d-flex justify-content-end">
				
					<div class="col-md-3"><span>From</span><input id="From" type="date" class="form-control" ></div>
					<div class="col-md-3"><span>To</span><input id="To" type="date" class="form-control" ></div>
			
				</div>

			</div>
			<div class="row">
				<div class="col-md-14">
					<div class="table-wrap ">
						<table class="table table-responsive-xl">
						  <thead>
						    <tr>
						      <th>Slno</th>
						      <th>FullName</th>
						      <th>RollNo</th>
                              <th>Email</th>
                              <th>Branch</th>
						      <th>Status</th>
                              <th>UserType</th>
						      <th>Reject</th>
							  <th>Activate</th>
						    </tr>
						  </thead>
						  <tbody class="accountactivationresponse">
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</section>

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
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
//   modalBodyInput.value = recipient
  document.getElementById('Email').value = recipient
  document.getElementById('Password').value= generatePassword()
})
</script>