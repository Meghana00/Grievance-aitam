<section class="ftco-section ">
		<div class="container ">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">New User Requests</h2>
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
						  <tbody>
							<?php 
							include '../include/config.php';
							$sql="SELECT * FROM `users` WHERE Status='1'";
							$query=mysqli_query($conn,$sql);
							
							while($row=mysqli_fetch_array($query))
							{
								echo '<tr class="alert" role="alert">
						    	<td>'.$row['SlNo'].'</td>
						      	<td class="d-flex align-items-center ">
						      		<div class="pl-3 email">
						      			<span>'.$row['FullName'].'</span>
						      			<span>Requested on: '.$row['Dnt'].'</span>
						      		</div>
						     	</td>
						      	<td>'.$row['RollNo'].'</td>
                                <td>'.$row['Email'].'</td>
                                <td>'.$row['Branch'].'</td>
						      	<td class="status"><span class="active">Mail Verified</span></td>
                                <td>'.$row['UserType'].'</td>
						      	<td>
								  <button type="button" class="close" data-toggle="modal" data-target="#exampleModal" aria-label="Close" data-dismiss="alert" data-whatever='.$row['Email'].'><span aria-hidden="true"><i class="fa fa-close"></i>Reject</span></button>
								</td>
								<td>
									<button type="button" class="open" data-dismiss="alert" aria-label="Close">
				            		<span aria-hidden="true"><i class="fa fa-check" ></i>Activate</span>
				          			</button>
				        		</td>
						    </tr>';
							}?>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</section>