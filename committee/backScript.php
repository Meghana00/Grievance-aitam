
<?PHP
include './../include/config.php';
session_start();
require './../include/PHPMailer.php';
require './../include/SMTP.php';
require './../include/Exception.php';
 function getUserCount($UserSatus){
    include './../include/config.php';
    $user = "SELECT * FROM `users` WHERE `Status` = '$UserSatus'";
    $query = mysqli_query($conn,$user);
    $num=mysqli_num_rows($query);
    return $num.",";
 }
 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_SESSION['sess_user']))
{
    $active_user = $_SESSION['sess_user'];
}
//total inactive accountts

if (isset($_POST['accountactivationresponse']))
{
    $myRequestsQuery = "SELECT * FROM `users` WHERE `Status`= 1 ";
    
    $myRequests = mysqli_query($conn, $myRequestsQuery);
    if ($myRequestsRow = mysqli_num_rows($myRequests) !='0')
    { ?> 
    <?php    
        while($myRequestsRow = mysqli_fetch_array($myRequests))
        {
        ?><tr>
                <td><?php echo htmlentities($myRequestsRow['SlNo']) ?></td>
                <td class="d-flex align-items-center ">
                    <div class="pl-3 email">
                    <span><?php echo htmlentities($myRequestsRow['FullName']) ?></span>
                    <span>Requested on: <?php echo htmlentities($myRequestsRow['Dnt']) ?></span>
                    </div>
                </td>
                <td><?php echo htmlentities($myRequestsRow['RollNo']) ?></td>
                <td><?php echo htmlentities($myRequestsRow['Email']) ?></td>
                <td><?php echo htmlentities($myRequestsRow['Branch']) ?></td>
                <td class="status"><span class="active">Mail Verified</span></td>
                <td><?php echo htmlentities($myRequestsRow['UserType']) ?></td>
                <td>
                <button type="button" class="btn close" data-bs-toggle="modal" data-bs-target="#example" data-bs-whatever="<?php echo htmlentities($myRequestsRow['Email']) ?>"><span aria-hidden="true"><i class="fa fa-check"></i>Reject</span></button>
                </td>
                <td>
                    <button type="button" class="open btn" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-label="Close" data-dismiss="alert" data-bs-whatever="<?php echo htmlentities($myRequestsRow['Email']) ?>"><span aria-hidden="true"><i class="fa fa-check"></i>Activate</span></button>
            
                </td>
            </tr>';
       <?php }?>
<?php
    }else{
        echo "No More Users";
    }
   
}



////////sending creds to activated users
if(isset($_POST['ActivateUser'])){
    $Email = $conn ->real_escape_string($_POST['Email']);
    $Password = $conn -> real_escape_string($_POST['Password']);

    $sql = "UPDATE  `Users` SET UserName='$Email',Password='$Password',Status=2 WHERE Email='$Email' ";
    $query=mysqli_query($conn,$sql);
    if(isset($query)){
        $subject="Mail Verification";
            $mailHtml="Your Account Has Been Activated Your User Name $Email and Password is $Password";

            $mail= new PHPMailer();
            $mail->isSMTP();
            $mail->Host="smtp.gmail.com";
            $mail->SMTPAuth="true";
            $mail->SMTPSecure="tls";
            $mail->Port="587";
            $mail->Username="dtearthmovers1026@gmail.com";
            $mail->Password="anand@123";
            $mail->Subject=$subject;
            $mail->setFrom("dtearthmovers1026@gmail.com");
            $mail->Body=$mailHtml;
            $mail->addAddress($Email);
            if($mail->send()){
                $msg="Credintials Has been sent $Email ";
                echo $msg;	
            
            }
            else{
                $msg=" Account Activation Failed";
                echo $msg;
            }
            $mail->smtpClose();
    }
    else{
        $msg=" Updation Failed";
        echo $msg;
    }

 }
///rejecting user response
if(isset($_POST['RejectUser'])){
    $Email1 = $conn ->real_escape_string($_POST['Email1']);
    $sql = "UPDATE `Users` SET `Status`='3' WHERE `Email`='$Email1'";
    $query=mysqli_query($conn,$sql);
    if(isset($query)){
        echo"User Rejected";
    }
    else{
        echo"Rejection Failed";
    }
}

//usercount ontheier status base
if(isset($_POST['usercount'])){
    $userCount = [1,2,3,4];
    for($i = 0; $i<=3;$i++){
        echo $userCount["$i"] = getUserCount($i);
    }
    
}

if(isset($_POST['grievancecount'])){
    
    $GrievanceCount[]=1111;
    $Rejected="SELECT * FROM `grievances` WHERE `Status` = 'Rejected' ";
    $quer1=mysqli_query($conn,$Rejected);
    $Rejectedcount=mysqli_num_rows($quer1);
    $GrievanceCount[]=$Rejectedcount;

    $Open=" SELECT * FROM `grievances` WHERE `Status` = 'Open' ";
    $quer2=mysqli_query($conn,$Open);
    $Opencount=mysqli_num_rows($quer2);
    $GrievanceCount[]=$Opencount;

    $Closed=" SELECT * FROM `grievances` WHERE `Status` = 'Closed' ";
    $quer3=mysqli_query($conn,$Closed);
    $Closedcount=mysqli_num_rows($quer3);
    $GrievanceCount[]=$Closedcount;

    $Reopened=" SELECT * FROM `grievances` WHERE `Status` = 'Reopened' ";
    $quer4=mysqli_query($conn,$Reopened);
    $Reopenedcount=mysqli_num_rows($quer4);
    $GrievanceCount[]=$Reopenedcount;
    $GrievanceCount[]=1111;
    
    echo  json_encode($GrievanceCount) ;
}


// <!-- Grivences list Response -->

if (isset($_POST['Grievancelist']))
{
    $LIMIT = 10;
    $myRequestsQuery = "SELECT * FROM `grievances` ";
    
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
// <!-- Grivences committee members list Response -->

if (isset($_POST['memberslist']))
{
    $LIMIT = 10;
    $myRequestsQuery = "SELECT * FROM `committee` where Status = 'Active' ";
    
    $myRequests = mysqli_query($conn,$myRequestsQuery);
    if ($myRequestsRow = mysqli_num_rows($myRequests) !='0')
    {      
         while($myRequestsRow = mysqli_fetch_array($myRequests))
        {?>
           <tr>
                <td><?php echo htmlentities($myRequestsRow['SlNo'])?></td>
                <td><?php echo htmlentities($myRequestsRow['EmpId'])?></td>
                <td><?php echo htmlentities($myRequestsRow['Email'])?></td>
                <td><?php echo htmlentities($myRequestsRow['FullName'])?></td>
                <td><?php echo htmlentities($myRequestsRow['Designation'])?></td>
                <td><?php echo htmlentities($myRequestsRow['Branch'])?></td>
                <td><?php echo htmlentities($myRequestsRow['Mobile'])?></td>
                <td><?php echo htmlentities($myRequestsRow['Duty'])?></td>
                <td> <button class="btn btn-danger" data-bs-toggle="modal" data-bs-whatever="<?php echo htmlentities($myRequestsRow['Email']) ?>" data-bs-target="#removemember">Remove</button></td>
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
    $GrievanceId=$_POST['GrievanceId'];
    $Solution=$_POST['Solution'];
    date_default_timezone_set("Asia/Calcutta");
    $sql = "UPDATE  `grievances` SET `Solution` = '$Solution', `Status` = 'Closed', `SolDate` = '".date("d-m-Y H:i:s")."' WHERE GrievanceId='$GrievanceId'";
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

/////admember respons
if(isset($_POST['Addmember']))
{
    $FullName = $conn -> real_escape_string($_POST['MemFullName']);
    $EmpId= $conn -> real_escape_string($_POST['MemEmpId']);
    $Email= $conn -> real_escape_string($_POST['MemEmail']);
    $Branch= $conn -> real_escape_string($_POST['MemBranch']);
    $Duty= $conn -> real_escape_string($_POST['MemDuty']);
    $Designation= $conn -> real_escape_string($_POST['MemDesignation']);
    $Mobile= $conn -> real_escape_string($_POST['MemMobile']);
    $Password= $conn -> real_escape_string($_POST['MemPassword']);
    $UserName=$Email;

    	$sql = "INSERT INTO `committee` (`FullName`,`EmpId`,`Email`,`Branch`,`Duty`,`Mobile`,`Designation`,`UserName`,`Password`) VALUES ('$FullName','$EmpId','$Email','$Branch','$Duty','$Mobile','$Designation','$UserName','$Password')";
    	$query = mysqli_query($conn,$sql);
        if($query==true){
            $subject="YOU ARE ADDED AS THE GRIEVANCE COMMITTEE MEMEBER -AITAM";
            $mailHtml="Your Account Has Been Activated Your User Name $Email and Password is $Password";

            $mail= new PHPMailer();
            $mail->isSMTP();
            $mail->Host="smtp.gmail.com";
            $mail->SMTPAuth="true";
            $mail->SMTPSecure="tls";
            $mail->Port="587";
            $mail->Username="dtearthmovers1026@gmail.com";
            $mail->Password="anand@123";
            $mail->Subject=$subject;
            $mail->setFrom("dtearthmovers1026@gmail.com");
            $mail->Body=$mailHtml;
            $mail->addAddress($Email);
            if($mail->send()){
                $msg="Credintials Has been sent to $Email ";
                echo $msg;	
            
            }
            else{
                $msg=" Account Activation Failed";
                echo $msg;
            }
            $mail->smtpClose();
        }
        else
        {
        echo "Failed Add Member";
         } 
}

////removing the member
if (isset($_POST['Rejectmem']))
{
    $Email=$_POST['MemEmail'];
    $sql = "UPDATE  `committee` SET  `Status` = 'Inactive' WHERE Email='$Email'";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "Removed SuccessFully";
    }else{
        echo "Failed Action";
    }
}

////add grievance Type 
////admember respons
if(isset($_POST['AddType']))
{
    $GrievanceType = $conn -> real_escape_string($_POST['GrievanceType']);
    $Description= $conn -> real_escape_string($_POST['Description']);

    $sql=" SELECT `GrievanceType` FROM `grievancetype` WHERE `GrievanceType`='$GrievanceType' ";
    $query=mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) > 0){
        
        echo "Type All ready exits";
    }else{
        $sql = "INSERT INTO `grievancetype` (`GrievanceType`,`Description`) VALUES ('$GrievanceType','$Description')";
        $query = mysqli_query($conn,$sql);
        if($query){
            echo "Added Sucessfully";
        }else{
            echo "Failed Action";
        }
    }
}

// <!-- Grivences Type list Response -->

if (isset($_POST['GrievanceTypeList']))
{
    $myRequestsQuery = "SELECT * FROM `grievancetype` where Status = 'Active' ";
    
    $myRequests = mysqli_query($conn,$myRequestsQuery);
    if ($myRequestsRow = mysqli_num_rows($myRequests) !='0')
    {      
         while($myRequestsRow = mysqli_fetch_array($myRequests))
        {?>
           <tr>
                <td><?php echo htmlentities($myRequestsRow['SlNo'])?></td>
                <td><?php echo htmlentities($myRequestsRow['GrievanceType'])?></td>
                <td><?php echo htmlentities($myRequestsRow['Description'])?></td>
                <td><button class="btn btn-danger" data-bs-toggle="modal" data-bs-whatever="<?php echo htmlentities($myRequestsRow['GrievanceType']) ?>" data-bs-target="#removetype">Remove</button></td>
            </tr>  
    <?php } ?>
<?php  }
}


////removing the type
if (isset($_POST['RemoveType']))
{
    $GType=$_POST['GType'];
    $sql = "UPDATE  `grievancetype` SET  `Status` = 'Inactive' WHERE GrievanceType ='$GType'";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "Removed SuccessFully";
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
    $sql="SELECT * FROM `admin` where `UserName`= '$active_user' ";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
    if($row['Password']==$oldPassword){
        $sql = " UPDATE  `admin` SET  `Password` = '$confirmPassword' WHERE `UserName`= '$active_user' ";
        $query=mysqli_query($conn,$sql);
        echo 'Updated Successfully';
    }else{
      echo "Old Password Incorrect";
    }
    
}