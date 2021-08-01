
<?php
require('vendor/autoload.php');
include './../include/config.php';
    
if(isset($_POST['Download'])){
    $From=$_POST['From'];
    $To=$_POST['To'];
    $ReportType=$_POST['ReportType'];
    if($ReportType=='Short'){

       if($From!='' && $To!=''){
        $Rejected="SELECT * FROM `grievances` WHERE `Status` = 'Rejected' AND `RegDate` BETWEEN '$From' AND '$To' ";
        $quer1=mysqli_query($conn,$Rejected);
        $Rejectedcount=mysqli_num_rows($quer1);
        
    
        $Open=" SELECT * FROM `grievances` WHERE `Status` = 'Open' AND `RegDate` BETWEEN '$From' AND '$To' ";
        $quer2=mysqli_query($conn,$Open);
        $Opencount=mysqli_num_rows($quer2);
        
    
        $Closed=" SELECT * FROM `grievances` WHERE `Status` = 'Closed' AND `RegDate` BETWEEN '$From' AND '$To'";
        $quer3=mysqli_query($conn,$Closed);
        $Closedcount=mysqli_num_rows($quer3);
        
    
        $Reopened=" SELECT * FROM `grievances` WHERE `Status` = 'Reopened' AND `RegDate` BETWEEN '$From' AND '$To' ";
        $quer4=mysqli_query($conn,$Reopened);
        $Reopenedcount=mysqli_num_rows($quer4);
            
       }else{

            $Rejected="SELECT * FROM `grievances` WHERE `Status` = 'Rejected' ";
            $quer1=mysqli_query($conn,$Rejected);
            $Rejectedcount=mysqli_num_rows($quer1);
            
        
            $Open=" SELECT * FROM `grievances` WHERE `Status` = 'Open' ";
            $quer2=mysqli_query($conn,$Open);
            $Opencount=mysqli_num_rows($quer2);
            
        
            $Closed=" SELECT * FROM `grievances` WHERE `Status` = 'Closed' ";
            $quer3=mysqli_query($conn,$Closed);
            $Closedcount=mysqli_num_rows($quer3);
            
        
            $Reopened=" SELECT * FROM `grievances` WHERE `Status` = 'Reopened' ";
            $quer4=mysqli_query($conn,$Reopened);
            $Reopenedcount=mysqli_num_rows($quer4);
        
    }

    if(mysqli_num_rows($quer2)>0){
       $html1='<style> 
       img{
           height:30px;
       }
       table, th, td {
           border: 1px solid black;
           border-collapse: collapse;
       }
       th, td{
            padding: 10px;
        }
       h{
           color:red;
       }
       table{
           width: 100%;
           table-layout: auto;  
       }
       .container{
           text-align: center;
       }
       th{
           color: green;
       }
       .heading{
           align-items: center;
           color: red;
       }
       </style>
       <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-6 text-center mb-5">
               <div class="heading">
               
               <div><img src="../assets//images/aitamlogo.png"  alt="aitam" >  AITAM GRIEVANCE REDRESSAL PORTAL</div>
               </div>
               <h2 class="heading-section">Grievence List Short Report</h2>
           </div>
       </div>';
                if($From!='' && $To!=''){
                        $html1.='<h3 class"heading">Report From '.$From.' to '.$To.'  </h3>';
                }else{ 
                    $html1.='<h3 class"date">Full Report</h3>';
                }
        $html1.='<div class="row">
                    <div class="col-md-14">
                        <div class="table">
                            <table class="table display" style="width: 100%;">
                                <thead>
                                <tr>
                                    <th>Greivances Rejected</th>
                                    <th>Greivances Open</th>
                                    <th>Greivances Closed</th>
                                    <th>Greivances Reopened</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>'.$Rejectedcount.' Rejected</td>
                                    <td>'.$Opencount.' Open</td>
                                    <td>'.$Closedcount.' Closed</td>
                                    <td> '.$Reopenedcount.' Reopened</td>
                                </tr>
                                </tobody>
                            </table>
                        </div>
                            </div>
                        </div>
                    </div>';
            }else{
                $html1="data not found";
            }
        }elseif($ReportType=='Long'){
        if($From!='' && $To!=''){
            $sql="SELECT * From `grievances` where `Status`!='Rejected' AND `RegDate` BETWEEN '$From' AND '$To' ";
            $query=mysqli_query($conn,$sql);
       }else{
           $sql="SELECT * FROM `grievances` where `Status`!='Rejected'";
           $query=mysqli_query($conn,$sql);
       }
       if(mysqli_num_rows($query)>0){
            $html1='
            <style> 
            img{
                height:30px;
            }
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            h{
                color:red;
            }
            th, td{
                padding: 7px;
            }
            table{
                width: 100%;
                table-layout: auto;  
            }
            .container{
                text-align: center;
            }
            th{
                color: green;
            }
            .heading{
                align-items: center;
                color: red;
            }
            
        
            </style>
            <div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
                    <div class="heading">
                    
                    <div><img src="../assets//images/aitamlogo.png"  alt="aitam" >  AITAM GRIEVANCE REDRESSAL PORTAL</div>
                    </div>
					<h2 class="heading-section">Grievence List Long Report</h2>
                </div>
			</div>';
                    if($From!='' && $To!=''){
                         $html1.='<h3 class"heading">Report From '.$From.' to '.$To.'  </h3>';
                    }else{ 
                        $html1.='<h3 class"date">Full Report</h3>';
                    }
 
         $html1.='<div class="row">
				<div class="col-md-14">
					<div class="table">
                        <table class="table display" style="width: 100%;">
						  <thead>
						    <tr>
                              <th>GrievanceId</th>
						      <th>Grievant</th>
						      <th>RegDate</th>
                              <th>Grievance</th>
						      <th>Status</th>
                              <th>RedressedDt</th>
                              <th>Solution</th>
                              <th>RedressedBy</th>
						    </tr>
						  </thead>
						  <tbody>';
                          while($row = mysqli_fetch_array($query)){
                           $html1.= '<tr>
                                <td>'.$row['GrievanceId'].'</td>
                                <td>'.$row['FullName'].'</td>
                                <td>'.$row['RegDate'].'</td>
                                <td>'.$row['Grievance'].'</td>
                                <td>'.$row['Status'].'</td>
                                <td>'.$row['SolDate'].'</td>
                                <td>'.$row['Solution'].'</td>
                                <td>'.$row['RedressedBy'].'</td>
                                </tr>';
                            }
						  $html1.='</tbody>
                          
						</table>
					</div>
				</div>
			</div>
		</div>';
        
       }else{
           $html1 ="no data found";
       }
       

  
        $mpdf=new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html1);
        $file=time().'.pdf';
        $mpdf->output($file,'I');
    }

    $mpdf=new \Mpdf\Mpdf();
    $mpdf->WriteHTML($html1);
    $file= time().'.pdf';
    $mpdf->output($file,'I');
}
?>