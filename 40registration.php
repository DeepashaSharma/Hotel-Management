<?php
  include('connection.php');
  if(isset($_POST['submit']))
  {	 
	 $fnam=$_POST['fname'];
     $lnam=$_POST['lname'];
     $add=$_POST['address']; 
	 $cty=$_POST['city'];
	 $pc=$_POST['pcode'];
     $stat=$_POST['state'];
	 $eml=$_POST['email'];
     $cn=$_POST['cno'];
	 $rd=$_POST['rdate'];
	 $db=$_POST['dob'];
	 $ipt=$_POST['iptype'];
     $ipn=$_POST['ipno'];
     $stus=$_POST['status'];
     $gen=$_POST['gender'];
	 
	$sql = mysql_query("INSERT INTO reg(fname,lname,address,city,pincode,state,email,contactno,rdate,dob,idtype,idno,status,gender)
	VALUES ('$fnam','$lnam','$add','$cty','$pc','$stat','$eml','$cn','$rd','$db','$ipt','$ipn','$stus','$gen')");
	 if($sql)
	 {  
	  echo "<script type='text/javascript'>
       alert('You are Registered now!!!!!!!!!!');
	   </script>";
	  
	 }
	 else
	 {
		 echo mysql_error();
	 }
  }
	?> 
	
	
<html lang="en">
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="jquery\jquery-3.2.1.min.js.js"></script>                                     <!--jquery css is used here for responsive menu bar--> 
   <link rel="stylesheet" href="css/bootstrap.css"/>
   <link rel="stylesheet" href="css/bootstrap-theme.css"/>
   <script src="js/bootstrap.min.js"></script>                                            <!--above 3 are bootstrap off line file which are used for responsive page design-->
  </head>
  <style>
  body
  {
	  background-color:#ededed;
  }
  
   .icon-bar                                       /*css for menu bar*/
  {
	   background-color:CC9933;
  }
.navbar
{
	  background-color:black;
	
  }

.nav li a
{
	 color:CC9933;
	 
}
.nav li a:hover
{
	 background-color:white;
}
.nav
{
	margin:70px 0 0 150px;
}            
                         /*css for menu bar ends*/
						   /*css for slider*/		
  .carousel-inner > .item > img,                    
  .carousel-inner > .item > a > img {
      width:100%;
	  height:80%;
      margin: auto;
  }
.carousel-indicators .active{
    background-color:CC9933;
	
}
  
  .one              /*css for casoural images */
  {
    max-width: 100%;
    height: auto;
} 						    /*css for slider ends*/

input[type=text]
{
	width:200px;
	height:26px;
	border-radius:2px;
}
input[type=email]
{
	width:200px;
	height:26px;
	border-radius:2px;
}
input[type=password]
{
	width:200px;
	height:26px;
	border-radius:2px;
}
input[type=date]
{
	width:200px;
	height:26px;
	border-radius:2px;
}
input[type=submit]
 {
    background-color:black;
    color:CC9933;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 40%;
	border-radius: 15px;
    box-shadow: 0 9px #999;
}
button {
    background-color:black;
    color:CC9933;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
	border-radius: 15px;
    box-shadow: 0 9px #999;
}								   
button:hover 
{
	background-color:white; 	 	
}


                       /*css for last line starts*/
#last
   {
    background-color:black;
	height:100px;
	}
#last a
{
	color:grey;	
    font-size:20px;
}	
#last a:hover
{
	color:CC9933;	
}	
hr {
	background-color:CC9933;
	border-top: 2px dotted #8c8b8b;
	}				   
                         /*css for last line ends*/
/*animation for fly the div starts*/                                        /* for animation no other files are required */  

#fly{
    width: 100%;
    height:auto;
    position: relative;
    animation: myfirst 10s infinite;
    animation-direction: alternate;
	z-index:10;
}


@keyframes myfirst
 {
0%{left:80%; top:0px}
100%{left:80%; top:1600px}
}

/*animation for fly the div ends*/						 
							 
 </style>
 <body>
 
<div>
   	<nav class = "navbar " role = "navigation">
     <img src="images/1.png" height="20%" width="15%" align="left">
     <div class = "navbar-header">
         <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#example-navbar-collapse">
           <span class = "sr-only">Toggle navigation</span>
           <span class = "icon-bar"></span>
           <span class = "icon-bar"></span>
           <span class = "icon-bar"></span>
        </button>
     </div>
   
   
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
	    <ul class = "nav navbar-nav">
              <li><a href="1home.php">HOME</a></li>
              <li><a href="2rooms.php">ROOMS&SUITES </a></li>
			  <li><a href="3dining.php">DINING</a></li>
			  <li><a href="4facilities.php">FACILITIES</a></li>
			  <li><a href="5wedding.php">WEDDINGS</a></li>
			  <li><a href="6meeting.php">MEETINGS&EVENTS </a></li>
			  <li><a href="7gallery.php">GALLERY</a></li>
			  <li><a href="8location.php">LOCATION</a></li>
         </ul>
   </div>
 </nav>
 </div>
 
 <div id=fly> <a href="59welcmclient.php"><img src="images/170.gif" height="200" width="200"></a></div>
 
 <div>
 <div class="col-md-8"></div>
 <div><font size="10" color="CC9933">REGISTRATION</font></div>
 </div>
 
 
 <div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
	  <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/118.jpg"  width="80%" height="30%" id="one">
      </div>

      <div class="item">
        <img src="images/119.jpg" width="80%" height="30%" id="one">
      </div>
	  
      <div class="item">
        <img src="images/120.jpg" width="80%" height="30%" id="one">
      </div>
   	 
	 
      <div class="item">
        <img src="images/121.jpg" width="80%" height="30%" id="one">
      </div>
	 
	 
	</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>





 
 <div>
<div class="col-md-4"></div>
 <div class="col-md-6">
 <form action="" method="POST">
  <div> <div class="col-md-3"><font face="time new roman" size="4px">First Name</font></div>          <div><input type="text" placeholder="Enter your first name" name="fname" required></div>       </div><br>
  <div> <div class="col-md-3"><font face="time new roman" size="4px">Last Name</font></div>           <div><input type="text" placeholder="Enter your last name" name="lname"></div>                 </div><br>
  <div> <div class="col-md-3"><font face="time new roman" size="4px">Address</font></div>             <div><input type="text" placeholder="Enter your address" name="address" required></div>        </div><br>
  <div> <div class="col-md-3"><font face="time new roman" size="4px">City</font></div>                <div><input type="text" placeholder="Enter your city" name="city"></div>                       </div><br>
  <div> <div class="col-md-3"><font face="time new roman" size="4px">Pincode</font></div>             <div><input type="text" placeholder="Enter your pin_code" name="pcode" required></div>         </div><br>
  <div> <div class="col-md-3"><font face="time new roman" size="4px">State</font></div>               <div><input type="text" placeholder="Enter your state" name="state"></div>                     </div><br>
  <div> <div class="col-md-3"><font face="time new roman" size="4px">Email id</font></div>            <div><input type="email" placeholder="Enter your email id" name="email"></div>                 </div><br>
  <div> <div class="col-md-3"><font face="time new roman" size="4px">Contact no</font></div>          <div><input type="text" placeholder="Enter your contact no" name="cno" required></div>         </div><br>
  <div> <div class="col-md-3"><font face="time new roman" size="4px">Registration Date</font></div>   <div><input type="date" placeholder="Enter registeration date" name="rdate" required></div>    </div><br>
  <div> <div class="col-md-3"><font face="time new roman" size="4px">Date of birth</font></div>       <div><input type="date" placeholder="Enter your date of birth" name="dob"></div>               </div><br>
  <div> <div class="col-md-3"><font face="time new roman" size="4px">Id pruff type</font></div>       <div><input type="text" placeholder="Enter your id pruff type" name="iptype" required></div>   </div><br>
  <div> <div class="col-md-3"><font face="time new roman" size="4px">Id pruff no</font></div>         <div><input type="text" placeholder="Enter your id pruff no" name="ipno" required></div>       </div><br>
  <div> <div class="col-md-3"><font face="time new roman" size="4px">Status</font></div>              <div><input type="text" placeholder="Enter your status" name="status"></div>                   </div><br>
  <div> <div class="col-md-3"><font face="time new roman" size="4px">Gender</font></div>              <div><input type="radio" name="gender" value="male" required><font size=4%>Male</font>
	                                                                                                  <input type="radio" name="gender" value="female" required><font size=4%>Female</font></div>     </div><br>
	   <div class="col-md-6"><center><input type="submit" value="Register" name="submit"></center></div>
</form>	   
	   
 </div>
 </div>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
 
  <hr style="width:80%"/>
 
 <div id="last">
 <center>
 <br><br>
    <a href="9music.php">Music concept</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="10about.php">About us</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="11guest.php">Guest reviews</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="12careers.php">Careers</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="13wbd.php">Why book directly</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="14sitemap.php">Sitemap</a>
 </center>	
</div>

 
 </body>
 </html>








