<section>
<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-3">
					<h2 class="heading-section text-success">Grievance Committee Members</h2>
				</div>
			</div>
      <div class="row mb-2">
        <div class="btnAdd">
          <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal"   class="btn btn-success btn-md" >Add User</a>
        </div>
      </div>
			<div class="row">
				<div class="col-md-14">
					<div class="table-wrap">
            <table class="table display" id="Grievances"  style="width: 100%;">
						  <thead>
						    <tr>
                  <th>Slno</th>
                  <th>EmpId</th>
                  <th>Email</th>
                  <th>FullName</th>
                  <th>Designation</th>
                  <th>Branch</th>
                  <th>Mobile</th>
                  <th>Duty</th>
                  <th>Update</th>
                  <th>Remove</th>
						    </tr>
						  </thead>
						  <tbody class="memberlist-response">
              </tbody>     
						</table>
					</div>
				</div>
			</div>
		</div>
</section>






<!-- Modal -->
<div class="modal fade modal-lg" id="UpdateMem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="updateUser" >
          <input type="hidden" name="id" id="id" value="">
          <input type="hidden" name="trid" id="trid" value="">
          <div class="mb-3 row">
            <label for="nameField" class="col-md-3 form-label">FullName</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="FullName" name="name" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="emailField" class="col-md-3 form-label">Email</label>
            <div class="col-md-9">
              <input type="email" class="form-control" id="Email" name="email">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="mobileField" class="col-md-3 form-label">Mobile</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="Mobile" name="mobile">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="cityField" class="col-md-3 form-label">EmpId</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="Empid" name="City">
            </div>
          </div>
		  <div class="mb-3 row">
            <label for="cityField" class="col-md-3 form-label">Designation</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="Designation" name="City">
            </div>
          </div>
		  <div class="mb-3 row">
            <label for="cityField" class="col-md-3 form-label">Branch</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="Branch" name="City">
            </div>
          </div>
		  <div class="mb-3 row">
            <label for="cityField" class="col-md-3 form-label">Duty</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="Duty" name="City">
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Add user Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD Committee Member</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addUser" >
          <input type="hidden" name="id" id="id" value="">
          <input type="hidden" name="trid" id="trid" value="">
          <div class="mb-3 row">
            <label for="nameField" class="col-md-3 form-label">FullName</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="addFullName" name="name" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="emailField" class="col-md-3 form-label">Email</label>
            <div class="col-md-9">
              <input type="email" class="form-control" id="addEmail" name="email">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="mobileField" class="col-md-3 form-label">Mobile</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="addMobile" name="mobile">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="cityField" class="col-md-3 form-label">EmpId</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="addEmpId" name="City">
            </div>
          </div>
		  <div class="mb-3 row">
            <label for="cityField" class="col-md-3 form-label">Designation</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="addDesignation" name="City">
            </div>
          </div>
		  <div class="mb-3 row">
            <label for="cityField" class="col-md-3 form-label">Branch</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="addBranch" name="City">
            </div>
          </div>
		  <div class="mb-3 row">
            <label for="cityField" class="col-md-3 form-label">Duty</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="addDuty" name="City">
            </div>
          </div>
          <div class="row Addmember-response text-danger"></div>
          <div class="text-center">
            <button type="button" onclick="addmember()" class="btn btn-success addmem-btn"> Add Member</button>
          </div>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>