<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card mt-5 border-dark" style="background:#a0f9a0;">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-1"> <i class="far fa-user-circle ms-2" style="font-size: 3rem;"></i> </div>
                    <div class="col-sm-11">
                        <p class="ms-1 fw-lighter text-dark" style="font-size:32px;">Write Your Grievances Here</p>
                    </div>
                </div>
                <form method="POST">
                    <div class="container">
                        <!--row1-->
                        <div class="row mt-3">
                            <div class="col-sm-6 ">
                                <div class=" mb-3 mt-3">
                                    <label for="Fullname" class="form-label text-dark">Full Name</label>
                                    <input type="text" class="form-control shadow-none " id="Fullname" name="Fullname" placeholder="Enter Fullname"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class=" mb-3 mt-3">
                                    <label for="Rollno" class="form-label text-dark">RollNumber</label>
                                    <input type="text" class="form-control shadow-none " id="Rollno" name="Rollno" placeholder="Enter Rollno"> </div>
                            </div>
                        </div>
                        <!--end row1-->
                        <!--row2--->
                        <div class="row ">
                            <div class="col-sm-6 ">
                                <div class="  mb-3 ">
                                    <label for="Gender" class="form-label text-dark">Gender</label>
                                    <select class="form-select shadow-none " aria-label="Default select example" name="Gender" id="Gender">
                                        <option selected>--select--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class=" mb-3">
                                    <label for="email" class="form-label text-dark">Email<span class="ms-2">(Use your domain mail)</span></label>
                                    <input type="email" class="form-control shadow-none " id="Email" name="Email" placeholder="youremail@domain.com"> </div>
                            </div>
                        </div>
                        <!--end row2-->
                        <!--row3-->
                        <div class="row mb-3">
                            <div class="mb-3">
                                <label for="yourgrievance" class="form-label text-dark">Your Grievance</label>
                                <textarea class="form-control shadow-none " id="grievance" name="grievance" rows="5" placeholder="Give a brief note of your grievance"></textarea>
                            </div>
                        </div>
                        <!--end row3-->
                        <div class="mb-3 text-center">
                            <button name="send" type="submit" class="btn  btn-dark shadow-none border-light"><i class="far fa-paper-plane"></i><span class="ms-2">Send</span></button>
                        </div>
                    
        
                            
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>