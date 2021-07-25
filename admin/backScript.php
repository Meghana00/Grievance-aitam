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
            echo '<tr class="alert" role="alert">
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
                        <button type="button" class="close btn" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close" ></i>Reject</span></button>
                    </td>
                    <td>
                        <button type="button" class="open btn" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-label="Close" data-dismiss="alert" data-bs-whatever="'.$myRequestsRow['Email'].'"><span aria-hidden="true"><i class="fa fa-check"></i>Activate</span></button>
                
                    </td>
                  </tr>';
        }
    
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
 else{
     echo "Failed";
 }


?>

