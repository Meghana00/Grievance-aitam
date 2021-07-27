<?PHP
include './../include/config.php';
session_start();
require './../include/PHPMailer.php';
require './../include/SMTP.php';
require './../include/Exception.php';


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
    $LIMIT = 10;
    if(!empty($_POST['From']) && !empty($_POST['To'])){
        $From = $conn -> real_escape_string($_POST['From']);
        $To = $conn -> real_escape_string($_POST['To']);
        $myRequestsQuery ="SELECT * FROM `users` WHERE `Status`= 1 AND `Dnt` BETWEEN '{$From}' AND '{$To}'";
    }else{
    $myRequestsQuery = "SELECT * FROM `users` WHERE `Status`= 1 ORDER BY `SlNo` DESC LIMIT $LIMIT";
    }
    $myRequests = mysqli_query($conn, $myRequestsQuery);
    if ($myRequestsRow = mysqli_num_rows($myRequests) !='0')
    {      
        while($myRequestsRow = mysqli_fetch_array($myRequests))
        {
            echo '<tr>
                    <td>'.$myRequestsRow['SlNo'].'</td>
                    <td class="d-flex align-items-center ">
                        <div class="pl-3 email">
                        <span>'.$myRequestsRow['FullName'].'</span>
                        <span>Requested on: '.$myRequestsRow['Dnt'].'</span>
                        </div>
                    </td>
                    <td>'.$myRequestsRow['RollNo'].'</td>
                    <td>'.$myRequestsRow['Email'].'</td>
                    <td>'.$myRequestsRow['Branch'].'</td>
                    <td class="status"><span class="active">Mail Verified</span></td>
                    <td>'.$myRequestsRow['UserType'].'</td>
                    <td>
                        <button type="button" class="close btn" data-dismiss="alert" data-bs-toggle="modal" data-bs-target="#example" aria-label="Close" data-bs-whatever="'.$myRequestsRow['Email'].'"><span aria-hidden="true"><i class="fa fa-close" ></i>Reject</span></button>
                    </td>
                    <td>
                        <button type="button" class="open btn" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-label="Close" data-dismiss="alert" data-bs-whatever="'.$myRequestsRow['Email'].'"><span aria-hidden="true"><i class="fa fa-check"></i>Activate</span></button>
                
                    </td>
                  </tr>';
        }
    
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
    $spam="SELECT `Status` From `User` Where Status=0";
    $verified="SELECT `Status` From `User` Where Status=1";
    $accepted="SELECT `Status` From `User` Where Status=2";
    $rejected="SELECT `Status` From `User` Where Status=3";

    $spamcount=mysqli_num_rows(mysqli_query($conn,$spam));
    $verifiedcount=mysqli_num_rows(mysqli_query($conn,$verified));
    $acceptedcount=mysqli_num_rows(mysqli_query($conn,$accepted));
    $rejectedcount=mysqli_num_rows(mysqli_query($conn,$rejected));

    $return[] = array($spamcount,$verifiedcount,$acceptedcount,$rejectedcount);

    echo ($return);
   
}

if(isset($_POST['grievancecount'])){
    $Rejected="SELECT `Status` From `grievances` Where Status='Rejected'";
    $Open="SELECT `Status` From `grievances` Where Status='Open'";
    $Closed="SELECT `Status` From `grievances` Where Status='Closed'";
    $Reopened="SELECT `Status` From `grievances` Where Status='Reopened'";

    $Rejectedcount=mysqli_num_rows(mysqli_query($conn,$Rejected));
    $Opencount=mysqli_num_rows(mysqli_query($conn,$Open));
    $Closedcount=mysqli_num_rows(mysqli_query($conn,$Closed));
    $Reopenedcount=mysqli_num_rows(mysqli_query($conn,$Reopened));

    $return[] = array($Rejectedcount,$Opencount,$Closedcount,$Reopenedcount);

    echo ($return);
   
}


// <!-- Grivences list Response -->

if (isset($_POST['Grievancelist']))
{
    $LIMIT = 10;
    if(!empty($_POST['From']) && !empty($_POST['To'])){
        $From = $conn -> real_escape_string($_POST['From']);
        $To = $conn -> real_escape_string($_POST['To']);
        $myRequestsQuery ="SELECT * FROM `grievances` AND `RegDate` BETWEEN '{$From}' AND '{$To}'";
    }else{
    $myRequestsQuery = "SELECT * FROM `grievances` ORDER BY `SlNo` DESC LIMIT $LIMIT";
    }
    $myRequests = mysqli_query($conn,$myRequestsQuery);
    if ($myRequestsRow = mysqli_num_rows($myRequests) !='0')
    {      
        while($myRequestsRow = mysqli_fetch_array($myRequests))
        {
            echo '<tr class="alert" role="alert">
                    <td>'.$myRequestsRow['SlNo'].'</td>
                    <td class="d-flex align-items-center ">
                        <div class="pl-3 email">
                        <span>'.$myRequestsRow['Email'].'</span>
                        <span>Requested on: '.$myRequestsRow['RegDate'].'</span>
                        </div>
                    </td>
                    <td>'.$myRequestsRow['FullName'].'</td>
                    <td>'.$myRequestsRow['Gender'].'</td>
                    <td>'.$myRequestsRow['Status'].'</td>
                    <td>'.$myRequestsRow['Solution'].'</td>
                    <td>
                        <button type="button" class="open btn" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-label="Close" data-dismiss="alert" data-bs-whatever="'.$myRequestsRow['Email'].'"><span aria-hidden="true"><i class="fa fa-check"></i>Details</span></button>
                
                    </td>
                  </tr>';
        }
    
    }else{
        echo " No data Found";
    }
   
}


?>