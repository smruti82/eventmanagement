<?php
session_start();
if(isset($_POST['submit'])) {
    include('connect.php'); //Initiate the MySQL connection
    // To protect MySQL injection (more detail about MySQL injection)
    $myusername=$_POST['username'];
    $mypassword = $_REQUEST['password'];
    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $myusername = mysqli_real_escape_string($con, $myusername);
    $mypassword = mysqli_real_escape_string($con, $mypassword);
    echo $myusername;
    echo $mypassword;
    $sql="SELECT * FROM login_admin WHERE username='$myusername' and password='$mypassword'";
    $result=mysqli_query($con, $sql);
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        // Register $myusername, $mypassword and redirect to file "admin.php"
        //session_register("admin");
        //session_register("password");
        $_SESSION['name']= $myusername;
        header("location:adminlog.php");
    }
    else {
        $msg = "Wrong Username or Password. Please retry";
       header("location:loginou.php?msg=$msg");
    }
}
else {
    header("location:loginou.php?msg=Please enter some username and password");
}
?>