<?php
include('connect.php');
session_start();
define(ADMIN,$_SESSION['name']); 
if(!session_is_registered("admin")){
header("location:loginou.php"); 
}
else{
}
	?>