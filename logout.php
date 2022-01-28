<?php
include('include/config.php');
session_start();
unset($_SESSION['sess_user']);
session_destroy();
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

?>