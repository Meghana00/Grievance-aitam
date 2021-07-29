
<section>
<div class=" overview bg-light">
        <h4 class="mt-5">Greivance Overview </h4> 
   
            <div class="container mt-3 mb-0">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-blue order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Spam</h6>
                                <h2 class="order-card "><i class="fa fa-th-list" aria-hidden="true"></i><span class="f-right spam" id="spam"></span></h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-green order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Verified</h6>
                                <h2 class=" order-card"><i class="fa fa-th-list" aria-hidden="true"></i><span class="f-right verified" id="verified" ></span></h2>
                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-yellow order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Accepted</h6>
                                <h2 class=" order-card"><i class="fa fa-th-list" aria-hidden="true"></i><span class="f-right accepted" id="accepted"></span></h2>
                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Rejected</h6>
                                <h2 class=" order-card"><i class="fa fa-th-list" aria-hidden="true"></i><span class="f-right rejected" id="rejected"></span></h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<!--end Grievance overview part--->

<section class="">
		<div class="container ">
			<div class="row justify-content-center">
			
<!-- modalusefor Accepting User -->
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
							<button type="button" name="activate-btn active-btn" onclick="ActivateUser()" class="btn btn-success active-btn">Active Account</button>
						</div>
						</form>
					</div>
					
					</div>
				</div>
				</div>
			<!-- ========================================== -->
				<div class="col-md-6 text-center mb-2">
					<h2 class="heading-section">New User Requests</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-14">
					<div class="table-wrap ">
						<table class="table display"  style="width: 100%;">
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

			

	<div class="modal fade" id="example" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <input type="Hidden" class="form-control" id="Email1">
          </div>
        </form>
		<div class="row text-danger" ></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger " onclick="RejectUser()">Reject</button>
      </div>
    </div>
  </div>
</div>


				
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
//////////reject user
var example = document.getElementById('example')
example.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  
  var modalBodyInput = example.querySelector('.modal-body input')

  
  modalBodyInput.value = recipient
})
</script>

