<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Header</title>
<meta name="keywords" content="events,Wedding,birthdays,bhubaneswar,odisha,restaurants">
<script type="text/javascript" src="JQuery.js"></script>
<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
  <link rel='stylesheet' type='text/css' href='stylesheet.css'/>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="jquery.js"></script>
 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/mahavir.css">
<script src="http://parsleyjs.org/dist/parsley.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

.hovereffect {
  width: 100%;
  height: 100%;
  float: right;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
  background: red;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 50px 20px;
}

.hovereffect img {
  display: block;
  position: relative;
  max-width: none;
  width: calc(100% + 20px);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(-10px,0,0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.hovereffect:hover img {
  opacity: 0.4;
  filter: alpha(opacity=40);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: white;
  text-align: center;
  position: relative;
  font-size: 17px;
  overflow: hidden;
  padding: 0.5em 0;
  background-color: transparent;
}

.hovereffect h2:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  content: '';
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(-100%,0,0);
  transform: translate3d(-100%,0,0);
}

.hovereffect:hover h2:after {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(100%,0,0);
  transform: translate3d(100%,0,0);
}

.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}
.k{
  height: 200px;
  padding: 10px;

}
.container{
  padding: 10px;
  border-radius: 12px;
}
.back-color
{
  background-color: #4A454A;
}
footer{
  background-color: pink;
  width:100%;
}
.header-nightsky {
    color: white;
    margin-left: 0px;
    background-position: bottom;
    padding-bottom: 100px;
    background-image: url("des1.jpg");
  background-repeat: no-repeat;
  width: 100%;
  
}
.modal-body{
  color:black;
}
textarea{
  width:100%;
}
select{
  width:50%;
  height:30px;
  padding:5px;
  margin-top: 5px;
}
</style>
<body>
    <div class="header-nightsky" style="height:500px;">
        <nav class="navbar navbar-default">
            <div class="container">
                <a class="navbar-brand" href="#">OU EVENTS</a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                      
                        <li>
                            <a href="birthday.php">RESTAURANTS</a>
                           
                        </li>
                        <li class="dropdown">
                             <a href="vendor.php">VENUES</a>
                        </li>
                        <li class="dropdown">
                            <a href="service.php">SERVICES</a>
                        </li>
                        <li class="dropdown">
                             <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">EVENTS<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Weddings</a></li>
                                <li><a href="#">Corporate Parties</a></li>
                                <li><a href="#">House Warming</a></li>
                                <li><a href="#">Anniversary</a></li>
                                <li><a href="#">Birthdays</a></li>
                                <li><a href="#">Thread Ceremony</a></li>
                            </ul>
                        </li>
                        <br>
                         <table style="float:right;">
  <tr>
    <th><i class="fa fa-phone mr-3" ></i>&nbsp;9776348963&nbsp;&nbsp;</th>
    <th><i class="fa fa-envelope mr-3" ></i>&nbsp;contact@ouevents.com</th> 
 </tr>

</table>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero">
            <h1><b>Events With Intelligence </b></h1>
            <p></p>
           <center> <table>
  <tr>
    <th><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Book for 14th Feb</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        <form action="list.php" method="POST">
         <div class="form-group">
                  <div class="name">

                    <span><b>Name :</b></span>
                    <br>
                    <input type="text" class="form-control" required="" name="name"  >
                  </div>
                  
  
<div class="email">
          

                    <span><b>Email :</b></span>
                    <input type="email" class="form-control" name="email" data-parsley-trigger="change" required="">
                  </div> 
                  <div class="mobile">
                    <span><b>Mobile :</b></span>
                    <input type="phone" class="form-control"  name="mobile" data-parsley-type="digits" data-parsley-length="[6, 11]" required="">
                    </div>
  
  

    <select id="heard" required="" name="restaurant">
    <option value=""><b>Choose restaurant</b></option>
    <option value="Wedding">Wedding</option>
    <option value="Corporate">Corporate</option>
    
  </select>
  <br>
   <select id="slot" required="" name="slot">
    <option value=""><b>Choose a slot</b></option>
    <option value="1">12:00-15:00</option>
    <option value="2">15:00-6:00</option>
     <option value="3">06:00-9:00</option>
    
    
  </select>
  
     


<div class="clearfix"> </div>
                
                <br>
                <div class="clearfix"> </div>
                <div class="message">
                  <span><b>Message :</b></span>
                  <textarea name="message"> </textarea>
                </div>
  <br>
  <input type="submit" name="go" class="btn btn-default" value="submit">
</div>
        </form>
        </div>
        </th> 

 </tr>

</table></center>
        </div>
    </div>
    </div>
    <hr>
    <div class="container" >
    <h4><?php
  if(isset($_SESSION['message'])){
  if($_SESSION['message']=='success')
    {
      echo "YOU HAVE BEEN REGISTERED SUCCESFULLY . YOU WILL BE CONTACTED SOON";
      }
    }
      session_destroy();
      ?>
        
      </h4>
      <h1><center style="font-size:34px;color:red;"><b>HOW IT WORKS!</b></center></h1>
      <br>
      <br>
  }
<div class="row">
<div class="col-sm-3 cl k">
<center><img src="icons1.png" height="96" width="96"></center>
<br>
<center><b style="color:red;">BOOK AT OUR WEBSITE</b></center>
</div>
<div class="col-sm-3 cm k">
<center><img src="icons2.png" height="96" width="96"></center>
</br>
<center><b style="color:red;">GET A CALL FROM OUR EXPERT </b></center>
</div>
<div class="col-sm-3 ct k">
<center><img src="icons5.png" height="96" width="96"></center>
</br>
<center><b style="color:red;">CONFIRMATION</b></center>
</div>
<div class="col-sm-3 cm k">
<center><img src="icons3.png" height="96" width="96"></center>
</br>
<center><b style="color:red;">SIT BACK AND RELAX</b></center>
</div>
</div></div>
    <hr>
    <div class="container" style="width:70%">
  <center><h1 style="color:red;"><b>OUR PARTNERS</b></h1></center>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="dug.jpg" alt="Los Angeles" style="width:100%;height: 400px;">
        <div class="carousel-caption">
          <h3>THE DUG OUT</h3>
          <p>NAYAPALI</p>
        </div>
      </div>

      <div class="item">
        <img src="echo.jpg" alt="Chicago" style="width:100%;height: 400px;">
        <div class="carousel-caption">
          <h3>ECHOES</h3>
          <p>PATIA</p>
        </div>
      </div>
    
      <div class="item">
        <img src="smog.jpg" alt="New York" style="width:100%;height: 400px;">
        <div class="carousel-caption">
          <h3>SMOG</h3>
          <p>PATIA</p>
        </div>
      </div>

      <div class="item">
        <img src="keeva.jpg" alt="New York" style="width:100%;height: 400px;">
        <div class="carousel-caption">
          <h3>KEEVA</h3>
          <p>KHANDAGIRI</p>
        </div>
      </div>

      <div class="item">
        <img src="hidea.jpg" alt="New York" style="width:100%;height: 400px;">
        <div class="carousel-caption">
          <h3>9TH STREET HIDEAWAY</h3>
          <p>KHANDAGIRI</p>
        </div>
      </div>
      <div class="item">
        <img src="rain.jpg" alt="New York" style="width:100%;height: 400px;">
        <div class="carousel-caption">
          <h3>RAIN FOREST</h3>
          <p>PATIA</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <hr>
    <div class="container-fluid back-color" style="height:600px; ">
     <center><b style="color:red;font-size: 44px;">OU</b></center>

  <div class="row">
    <div class="col-md-6 k" >
      <div class="hovereffect">
        <img class="img-responsive" src="wed.jpg" >
        <div class="overlay">
           <h2>OU WEDDINGS</h2>
          
        </div>
    </div>
    </div>
    <div class="col-md-6 k">
      <div class="hovereffect">
        <img class="img-responsive" src="cor.jpg" >
        <div class="overlay">
           <h2>OU CORPORRATE PARTIES</h2>
           
        </div>
    </div>
    </div>
   
  </div>
  <br>
<br>
  <div class="row">
     <div class="col-md-6 k" >
      <div class="hovereffect">
        <img class="img-responsive" src="birthday.jpg" >
        <div class="overlay">
           <h2>OU BIRTHDAYS</h2>
           <a class="info" href="birthday.php">celebrate your day at top restaurants of bhubaneswar</a>
        </div>
    </div>
    </div>

    <div class="col-md-6 k" >
      <div class="hovereffect" >
        <img class="img-responsive" src="home.jpg"  >
        <div class="overlay">
           <h2>OU AT YOUR HOME</h2>
           
        </div>
    </div>
    </div>
   </div>
  </div>

<!--<div class="container">
<div class="tiles">
    <div class="hovereffect">
        <img class="img-responsive" src="ou4.jpeg" >
        <div class="overlay">
           <h2>Hover effect 4v2</h2>
           <a class="info" href="#">link here</a>
        </div>
    </div>
    <div class="hovereffect">
        <img class="img-responsive" src="ou4.jpeg" >
        <div class="overlay">
           <h2>Hover effect 4v2</h2>
           <a class="info" href="#">link here</a>
        </div>
    </div>
    <div class="hovereffect">
        <img class="img-responsive" src="ou4.jpeg" >
        <div class="overlay">
           <h2>Hover effect 4v2</h2>
           <a class="info" href="#">link here</a>
        </div>
</div>
</div>
-->

      <div class="container">
      <h1><center style="font-size:34px;color:red;"><b>WHY OU?</b></center></h1>
<div class="row">
<div class="col-sm-3 cl k">
<center><i class="fa fa-hand-pointer-o" aria-hidden="true" style="font-size:66px;color:red;"></i></center>
</br>
<center><b>One Touch Solution</b></center>
</div>
<div class="col-sm-3 cm k">
<center><i class="fa fa-handshake-o" aria-hidden="true" style="font-size:66px;color:red;"></i></center>
</br>
<center><b>Expert Advice & Customer Satisfaction  </b></center>
</div>
<div class="col-sm-3 ct k">
<center><i class="fa fa-certificate" aria-hidden="true" style="font-size:66px;color:red;"></i></center>
</br>
<center><b>Exciting Offers and Discounts</b></center>
</div>
<div class="col-sm-3 cr k"><center><i class="fa fa-thumbs-up" aria-hidden="true" style="font-size:66px;color:red;"></i></center>
</br>
<center><b>Opportunity for you to sit back and relax</b></center>
</div>
</div>
</div>

<footer class="page-footer center-on-small-only unique-color-dark pt-0">

    <div style="background-color: red;">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0" style="color:white;">Get connected with us on social networks!</h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right" >
                    <!--Facebook-->
                    <a class="icons-sm fb-ic ml-0" href="https://www.facebook.com/ouevent/"><i class="fa fa-facebook white-text fa-2x" style="color:white;padding-right: 15px;padding-left: 15px;"> </i></a>
                    <!--Twitter-->
                    
                
                    
                    <!--Instagram-->
                    <a class="icons-sm ins-ic"  href="instagram.com/_ouevents_"><i class="fa fa-instagram white-text fa-2x" style="color:white;padding-right: 15px;padding-left: 15px;"> </i></a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </div>

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-r">
              <h2 class="title font-bold"><strong>OU EVENTS</strong></h2>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p style="">From a very professional way of inviting your valuable guests to treating them with return gifts, OU Events is the one stop solution</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-r">
                
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-r">
                <h6 class="title font-bold"><strong>Useful links</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!">About us</a></p>
                <p><a href="#!">Become our partner</a></p>
                <p><a href="#!">terms and conditions</a></p>
                <p><a href="#!">Help</a></p>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="title font-bold"><strong>Contact</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><i class="fa fa-envelope mr-3"></i> contact@ouevents.com</p>
                <p><i class="fa fa-phone mr-3" ></i> 9776348963</p>
                
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class="footer-copyright" style="background-color: maroon;">
        <div class="container-fluid">
        <center>  <b>  © 2018 Copyright: </b><a href="https://www.ouevents.com"><strong> Ouevents.com</strong></a></center>
        </div>
    </div>
    <!--/.Copyright -->
    
</footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
