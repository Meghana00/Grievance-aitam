<div class="row justify-content-center">
        <div class="col-sm-8  overview text-dark">
          <div class="card bg-white text-success shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0 text-success fw-bold">Genrate Report</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form method="POST" action="pdf.php" target="_blank">
                <h6 class="heading-small text-success fw-bold mb-4">Select Report Type</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-10 text-dark" id="repo">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radiobtn" value="Short"  id="Short">
                            <label class="form-check-label" for="radiobtn1">
                                Short Report
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radiobtn" value="Long"  id="Long">
                            <label class="form-check-label" for="radiobtn2">
                                Long Report
                            </label>
                        </div>
                        <div class="mt-3 mb-3">
                            <button class="btn btn-success" onclick="reporttype()" type="button">Submit</button>
                        </div>
                        <div class="form-group">
                            <input type="text" id="ReportType" name="ReportType" class="form-control form-control-alternative  border-success  shadow-none" >
                        </div>
                    </div>
                  </div>
                </div>
                <hr class="my-2">

                <h6 class="heading-small text-success fw-bold mb-4">Select Period</h6>
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-md-10">
                      <div class="form-group">
                        <label class="form-control-label">From</label>
                        <input name="From" type="date" id="From" class="form-control form-control-alternative  border-success  shadow-none"   >
                      </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-10">
                      <div class="form-group">
                        <label class="form-control-label">To</label>
                        <input name="To" type="date" id="To" class="form-control form-control-alternative  border-success  shadow-none"   >
                      </div>
                    </div>
                </div> 
              
            </div>
            <div class="row">
            <div class=" text-success update-response"></div>
            
            </div>
            <div class="row">
              <div class="row mt-4">
                
                <div class="col-7 ">
                  <input type="submit" name="Download" value="Download" class="btn btn-success update-btn shadow-none"></input>
                </div>
              </div>
           </div>
           </form>
          
        </div>
    </div> 
    <script>
    function reporttype(){    
    
        var ele = document.getElementsByName('radiobtn');
            
        for(i = 0; i < ele.length; i++) {
            if(ele[i].checked){
                ReportType=  ele[i].value;
            }
        }
    
        var modalBodyInput = repo.querySelector('#ReportType')
        modalBodyInput.value = ReportType;
        
    }
    </script>