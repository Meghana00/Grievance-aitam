
<?PHP
include './../include/config.php';
session_start();

 
if (isset($_SESSION['sess_user']))
{
    $active_user = $_SESSION['sess_user'];
}

if(isset($_POST['grievancecount'])){
    $sql="SELECT `Duty` FROM `committee` WHERE `committee`.`UserName` = '$active_user'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    $my_str = $row['Duty'];

    $GrievanceCount[]=1111;
    $Rejected="SELECT * FROM `grievances` WHERE `Status` = 'Rejected' AND `grievances`.`GrievanceType` IN ($my_str) ";
    $quer1=mysqli_query($conn,$Rejected);
    $Rejectedcount=mysqli_num_rows($quer1);
    $GrievanceCount[]=$Rejectedcount;

    $Open=" SELECT * FROM `grievances` WHERE `Status` = 'Open' AND `grievances`.`GrievanceType` IN ($my_str) ";
    $quer2=mysqli_query($conn,$Open);
    $Opencount=mysqli_num_rows($quer2);
    $GrievanceCount[]=$Opencount;

    $Closed=" SELECT * FROM `grievances` WHERE `Status` = 'Closed' AND `grievances`.`GrievanceType` IN ($my_str) ";
    $quer3=mysqli_query($conn,$Closed);
    $Closedcount=mysqli_num_rows($quer3);
    $GrievanceCount[]=$Closedcount;

    $Reopened=" SELECT * FROM `grievances` WHERE `Status` = 'Reopened' AND `grievances`.`GrievanceType` IN ($my_str) ";
    $quer4=mysqli_query($conn,$Reopened);
    $Reopenedcount=mysqli_num_rows($quer4);
    $GrievanceCount[]=$Reopenedcount;
    $GrievanceCount[]=1111;
    
    echo  json_encode($GrievanceCount) ;
}


// <!-- Grivences list Response -->

if (isset($_POST['Grievancelist']))
{
    $sql="SELECT `Duty` FROM `committee` WHERE `committee`.`UserName` = '$active_user'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    $my_str = $row['Duty'];
   
    $myRequestsQuery = "SELECT * FROM `grievances` WHERE  `grievances`.`GrievanceType` IN ($my_str) AND `Status`= 'Open'||'Reopened'";
    $myRequests = mysqli_query($conn,$myRequestsQuery);
    if ($myRequestsRow = mysqli_num_rows($myRequests) !='0')
    {      
         while($myRequestsRow = mysqli_fetch_array($myRequests))
        {?>
           <tr>
                    <td><?php echo htmlentities($myRequestsRow['SlNo'])?></td>
                    <td><?php echo htmlentities($myRequestsRow['GrievanceId'])?></td>
                    <td><?php echo htmlentities($myRequestsRow['Email'])?></td>
                    <td><?php echo htmlentities($myRequestsRow['FullName'])?></td>
                    <td><?php echo htmlentities($myRequestsRow['Grievance'])?></td>
                    <td><?php echo htmlentities($myRequestsRow['Status'])?></td>
                    <td><?php echo htmlentities($myRequestsRow['GrievanceType'])?></td>
                    <td><a  onclick="GrievanceDetails(<?php echo htmlentities($myRequestsRow['GrievanceId'])?>)"   class="btn btn-success btn-sm editbtn" >Details</a></td>
                </tr>
    <?php }?>
<?php
    }else{
        echo " No data Found";
    }
   
}
// Redressing the Complaint
if (isset($_POST['Redress']))
{
    $active_user = $_SESSION['sess_user'];
    $sql1="SELECT * FROM `committee` WHERE `UserName` = '$active_user'";
   
    $query2=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_array($query2);
    $RedressedBy=$row1['FullName'];

    $GrievanceId=$_POST['GrievanceId'];
    $Solution=$_POST['Solution'];
    date_default_timezone_set("Asia/Calcutta");
    $sql = "UPDATE  `grievances` SET `Solution` = '$Solution', `Status` = 'Closed', `SolDate` = '".date("d-m-Y H:i:s")."', `RedressedBy`= '$RedressedBy' WHERE GrievanceId='$GrievanceId'";
    $query=mysqli_query($conn,$sql);
    if($query==true){
        echo "Action Taken";
    }else{
        echo "Failed";
    }
}
// Rejecting the Complaint
if (isset($_POST['RejectGrievance']))
{
    $GrievanceId=$_POST['GrievanceId'];
    $Solution='Rejected';
    date_default_timezone_set("Asia/Calcutta");
    $sql = "UPDATE  `grievances` SET `Solution` = '$Solution', `Status` = 'Rejected', `SolDate` = '".date("d-m-Y H:i:s")."' WHERE GrievanceId='$GrievanceId'";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "Rejected SuccessFully";
    }else{
        echo "Failed Action";
    }
}


//////// admin password change
if (isset($_POST['ChangePassword'])){
    $oldPassword= $conn -> real_escape_string($_POST['oldPassword']);
    // $newPassword = $conn -> real_escape_string($_POST['newPassword']);
    $confirmPassword = $conn -> real_escape_string($_POST['confirmPassword']);
    $active_user = $_SESSION['sess_user'];
    $sql="SELECT * FROM `committee` where `UserName`= '$active_user' ";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
    if($row['Password']==$oldPassword){
        $sql = " UPDATE  `committee` SET  `Password` = '$confirmPassword' WHERE `UserName`= '$active_user' ";
        $query=mysqli_query($conn,$sql);
        echo 'Updated Successfully';
    }else{
      echo "Old Password Incorrect";
    }
    
}

//admin update profile
if(isset($_POST['Update'])){
    $FullName=$_POST['FullName'];
    $Email=$_POST['Email'];
    $Branch=$_POST['Branch'];
    $Mobile=$_POST['Mobile'];
    $Designation=$_POST['Designation'];
    $EmpId=$_POST['EmpId'];
   
    $admin= mysqli_query($conn,"UPDATE  `committee` SET `FullName` ='$FullName', `Email` = '$Email', `Branch` = '$Branch', `Mobile`='$Mobile',`Designation`='$Designation',`EmpId`='$EmpId'  WHERE `Email` ='$Email'");
    if($admin){

      echo "Updated SuccessFully";

    }else{
      echo "Failed To Update Retry!!!";
    }
  }