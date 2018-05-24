<?php
 include('connect.php');
?>

<html>
<head>
    <title>Welcome To Admin Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
<script type="text/javascript" src="JQuery.js"></script>
<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' type='text/css' href='stylesheet.css'/>
        <link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="jquery.js"></script>
<script src="http://parsleyjs.org/dist/parsley.min.js"></script>
<script type="text/javascript" src="JQuery.js"></script>
<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
input[type=text], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.content{
  width:100%;
  height:450px;
 padding:0px;
}

.navbar{
  background-color: red;

  margin-bottom: 0px;

}
.container{

background-color: white;
height:130px;
padding:8px;
border-radius:8px; 
}
.empty{
  height:50px;
}

.contentb{
  background-color: grey;
}
.back-color
{
  background-color: grey;
}
.header{
  background-color: red;
  height: 80px;

}
.k{
  height:130px;
  
}
textarea{
  width:100%;
}
#footer {
    
    width: 100%;
    background-color:black;
    color: black;
    text-align: center;
}
.btn-modal, .btn-modal:hover {
    background-color: green;
    border-color: pink;

}
input[type=submit] {
    width: 30%;
    background-color: #FF3346;
    color: white;
    padding: 8px 20px;
    margin: 12px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
</style>
<body><nav class="navbar navbar-default" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="position:relative;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="color:white"><b style="font-size:24px;">OU EVENTS</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin: 0px;">
    <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background-color:red;"><b style="color:white;">Contact Us</b> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">contact@ouevents.com</a></li>
            <li><a href="#">9776348963</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

<li><a href="logoutou.php"><b style="color:white;margin-top: 4px;">Logout</b></a></li>


        </ul>

       
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

   <table>
   <tr>
   	<th>id</th>
   	<th>event</th>
   	<th>date_event</th>
   	<th>name</th>
   	<th>message</th>
   	<th>email</th>
   	<th>phone</th>
   </tr>
   <?php
   $res=mysqli_query($con,"SELECT * FROM events");
   while($row=mysqli_fetch_assoc($res))
   {
    ?>
    <tr>
    	<td><?php echo $row['id']; ?></td>
    	<td><?php echo $row['event']; ?></td>
    	<td><?php echo $row['date_event']; ?></td>
    	<td><?php echo $row['name']; ?></td>
    	<td><?php echo $row['message']; ?></td>
    	<td><?php echo $row['email']; ?></td>
    	<td><?php echo $row['phone']; ?></td>
    </tr>
   <?php
   }
   ?>
   </table>
 
</body>
</html>
