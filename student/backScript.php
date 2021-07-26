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
    $Grievance=$conn -> real_escape_string($_POST['Grievance']);
    $GrievanceType=$conn -> real_escape_string($_POST['GrievanceType']);
    $GrievanceId=rand(111111111,999999999);
    $sql="INSERT INTO `grievances` (`FullName`,`RollNo`,`Gender`,`Email`,`Grievance`,`GrievanceType`,`GrievanceId`,`RegDate`) VALUES ('$FullName','$RollNo','$Gender','$Email','$Grievance','$GrievanceType','$GrievanceId','".date("Y-m-d H:i:s")."')";
    $register= mysqli_query($conn,$sql);  
    if($register){
        echo " Registed Successfully";
    }
    else{
        echo "Failed";
    }      
}
?>