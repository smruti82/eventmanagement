<?php
include('connect.php');
if(isset($_POST['go']))
{
$event=$_REQUEST['eventype'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$date = $_REQUEST['date'];
$message = $_REQUEST['message'];
$people=$_REQUEST['people'];
$restaurant=$_REQUEST['restaurant'];

$sql = "INSERT INTO events (event,date_event,phone,message,name,email,people,restaurant)
VALUES ('".$event."','".$date."','".$mobile."','".$message."','".$name."','".$email."','".$people."''".$restaurant."')";

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