<section>
<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-3">
					<h2 class="heading-section text-success">Grievance Types</h2>
				</div>
			</div>
      <div class="row mb-2">
        <div class="btnAdd">
          <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addGrievanceType"   class="btn btn-success btn-md" >Add Grievance Type</a>
        </div>
      </div>
			<div class="row">
				<div class="col-md-14">
					<div class="table-wrap">
            <table class="table display" id="Grievances"  style="width: 100%;">
						  <thead>
						    <tr>
                                <th>Slno</th>
                                <th>GrievanceType</th>
                                <th>Description</th>
                                <th>Action</th>
						    </tr>
						  </thead>
						  <tbody class="GrievanceType-response">
                          </tbody>     
						</table>
					</div>
				</div>
			</div>
		</div>
</section>

<!-- Add user Modal -->
<div class="modal fade" id="addGrievanceType" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-Success" id="exampleModalLabel">Add New Grievance Type</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addUser" >
          <div class="mb-3 row">
            <label for="nameField" class="col-md-3 form-label">Grievance Type</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="GrievanceType" name="name" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="emailField" class="col-md-3 form-label">Descrption</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="Description" name="">
            </div>
          </div>
          <div class="row Addmember-response text-danger"></div>
          <div class="text-center">
            <button type="button" onclick="addGrievanceType()" class="btn btn-success addmem-btn"> Add Type</button>
          </div>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- rejectmodal -->
<div class="modal fade" id="removetype" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">!Alert  </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <h1 for="recipient-name" class="col-form-label text-danger reject-response ">Are Sure to Remove</h1>
            <input type="hidden" class="form-control" id="GType" value="">
          </div>
        </form>
		<div class="row text-danger remove-response" ></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger reject-btn" onclick="RemoveType()">Reject</button>
      </div>
    </div>
  </div>
</div>
<!-- rejected modal -->

<script>
 var removetype = document.getElementById('removetype')
removetype.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  
  var modalBodyInput = removetype.querySelector('.modal-body input')

  
  modalBodyInput.value = recipient
})
</script>