
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<div class=" overview bg-light">
        <h4 class="mt-5">Greivance Overview </h4> 
   
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-blue order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Greivances Rejected</h6>
                                <h2 class="order-card "><i class="fa fa-th-list" aria-hidden="true"></i><span class="f-right Rejected"></span></h2>
                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-green order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Greivances Open</h6>
                                <h2 class=" order-card"><i class="fa fa-th-list" aria-hidden="true"></i><span class="f-right Open" ></span></h2>
                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-yellow order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Greivances Closed</h6>
                                <h2 class=" order-card"><i class="fa fa-th-list" aria-hidden="true"></i><span class="f-right Closed"></span></h2>
                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Greivances Reopened</h6>
                                <h2 class=" order-card"><i class="fa fa-th-list" aria-hidden="true"></i><span class="f-right Reopened"></span></h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
	<!-- table start -->
<section class="">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Grievence List</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-14">
					<div class="table-wrap">
                        <table class="table display" id="Grievances"  style="width: 100%;">
						  <thead>
						    <tr>
						      <th>Slno</th>
                              <th>GrievanceId</th>
						      <th>Email</th>
						      <th>Fullname</th>
                              <th>Grievance</th>
						      <th>Status</th>
                              <th>Solution</th>  
						      <th>Action</th>
						    </tr>
						  </thead>
						  <tbody class="Grievance-response">
						  </tbody>
                          
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- table end-->
    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
    $('#Grievances').DataTable( {
    } );
} );
</script>