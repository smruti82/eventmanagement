<?php
include('connect.php');
if(isset($_POST['go']))
{
$restaurant=$_REQUEST['restaurant'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];

$message = $_REQUEST['message'];
$slot = $_REQUEST['slot'];


  $sql = "INSERT INTO rest (restaurant,name,mobile,message,slot,email)
VALUES ('".$restaurant."','".$name."','".$mobile."','".$message."','".$slot."','".$email."')";

if ($con->query($sql) === TRUE) {
    session_destroy();
    session_start();
    $_SESSION['message']='success';
header("Location: trial.php");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
}
?>
