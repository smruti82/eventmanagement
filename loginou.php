<?php
session_start();
if(isset($_SESSION['name'])){
	header("location:adminou.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login </title>
</head>
<body>

<form name="login" id="login" method="POST" action="checkou.php">
<p><label for="username">Username: </label>
<br><input type="text" name="username" id="username" value="Enter Username here" /></p>
<br>
<p><label for="password">Password: </label>
<br><input type="password" name="password" id="password"  /></p>
<br>
<p><input type="submit" name="submit" id="submit" value="Submit"/> <input type="reset" name="reset" id="reset" value="reset"/></p>
</form>
</body>
</html>