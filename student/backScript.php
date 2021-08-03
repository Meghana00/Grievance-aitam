<?PHP
include './../include/config.php';
session_start();
if (isset($_SESSION['sess_user']))
{
    $active_user = $_SESSION['sess_user'];
}
//response for registering Grievance
if(isset($_POST['RegisterGrievance'])){
    // $From = $conn -> real_escape_string($_POST['From']);
    $FullName=$conn -> real_escape_string($_POST['FullName']);
    $RollNo=$conn -> real_escape_string($_POST['RollNo']);
    $Gender=$conn -> real_escape_string($_POST['Gender']);
    $Email=$conn -> real_escape_string($_POST['Email']);
    $User=$conn -> real_escape_string($_POST['User']);
    $Grievance=$conn -> real_escape_string($_POST['Grievance']);
    $GrievanceType=$conn -> real_escape_string($_POST['GrievanceType']);
    $GrievanceId=rand(111111111,999999999);
    $sql="INSERT INTO `grievances` (`FullName`,`RollNo`,`Gender`,`Email`,`UserType`,`Grievance`,`GrievanceType`,`GrievanceId`,`RegDate`) VALUES ('$FullName','$RollNo','$Gender','$Email','$User','$Grievance','$GrievanceType','$GrievanceId','".date("Y-m-d H:i:s")."')";
    $register= mysqli_query($conn,$sql);  
    if($register){
        echo " Your Grievance has been Registered Successfully !";
    }else{
        echo "Failed to Register Try Again Later!!";
    }
       
}
?>
<?php
if (isset($_POST['Grievancelist']))
{
    $active_user=$_SESSION['sess_user'];
    $myRequestsQuery = " SELECT * FROM `grievances` where `Email` = '$active_user' ";
    
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

///mygrievances couunt
if(isset($_POST['grievancecount'])){
    $active_user=$_SESSION['sess_user'];
    
    $GrievanceCount[]=1111;
    $Rejected="SELECT * FROM `grievances` WHERE `Status` = 'Rejected' AND `Email` = '$active_user' ";
    $quer1=mysqli_query($conn,$Rejected);
    $Rejectedcount=mysqli_num_rows($quer1);
    $GrievanceCount[]=$Rejectedcount;

    $Open=" SELECT * FROM `grievances` WHERE `Status` = 'Open' AND `Email` = '$active_user' ";
    $quer2=mysqli_query($conn,$Open);
    $Opencount=mysqli_num_rows($quer2);
    $GrievanceCount[]=$Opencount;

    $Closed=" SELECT * FROM `grievances` WHERE `Status` = 'Closed' AND `Email` = '$active_user' ";
    $quer3=mysqli_query($conn,$Closed);
    $Closedcount=mysqli_num_rows($quer3);
    $GrievanceCount[]=$Closedcount;

    $Reopened=" SELECT * FROM `grievances` WHERE `Status` = 'Reopened' AND `Email` = '$active_user' ";
    $quer4=mysqli_query($conn,$Reopened);
    $Reopenedcount=mysqli_num_rows($quer4);
    $GrievanceCount[]=$Reopenedcount;
    $GrievanceCount[]=1111;
    
    echo  json_encode($GrievanceCount) ;
}

// Reopening  the Complaint
if (isset($_POST['ReopenGrievance']))
{
    $GrievanceId=$_POST['GrievanceId'];
    // $Solution='Rejected';
    date_default_timezone_set("Asia/Calcutta");
    $sql = "UPDATE  `grievances` SET `Status` = 'Reopened', `RegDate` = '".date("d-m-Y H:i:s")."' WHERE GrievanceId='$GrievanceId'";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "Reopened SuccessFully";
    }else{
        echo "Failed Action";
    }
}

//////// passwordchange password change
if (isset($_POST['ChangePassword'])){
    $oldPassword= $conn -> real_escape_string($_POST['oldPassword']);
    // $newPassword = $conn -> real_escape_string($_POST['newPassword']);
    $confirmPassword = $conn -> real_escape_string($_POST['confirmPassword']);
    $active_user = $_SESSION['sess_user'];
    $sql="SELECT * FROM `users` where `UserName`= '$active_user' ";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
    if($row['Password']==$oldPassword){
        $sql = " UPDATE  `users` SET  `Password` = '$confirmPassword' WHERE `UserName`= '$active_user' ";
        $query=mysqli_query($conn,$sql);
        echo 'Updated Successfully';
    }else{
      echo "Old Password Incorrect";
    }
    
}

//update profile
if(isset($_POST['Update'])){
    $FullName=$_POST['FullName'];
    $Email=$_POST['Email'];
    $Branch=$_POST['Branch'];
    $Mobile=$_POST['Mobile'];
    $Gender=$_POST['Gender'];
    
   
    $admin= mysqli_query($conn,"UPDATE  `users` SET `FullName` ='$FullName', `Email` = '$Email', `Branch` = '$Branch', `Mobile`='$Mobile',`Gender`='$Gender'  WHERE `Email` ='$Email'");
    if($admin){

      echo "Updated SuccessFully";

    }else{
      echo "Failed To Update Retry!!!";
    }
  }