<?php
  include('connection.php');
  if(isset($_POST['submit']))
  {	 
    
	 $a=$_POST['rno'];
     $b=$_POST['dtl'];
     $c=$_POST['dat']; 
	 $d=$_POST['chrg'];
	 $e=$_POST['emp'];
   
    
	 
	$sql = mysql_query("INSERT INTO roomserv(room_no, details, date, charge, empreq)
	VALUES ('$a','$b','$c','$d','$e')");
	 if($sql)
	 {  
    
	  echo "<script type='text/javascript'>
       alert('Your data submitted successfully!!!!!!!!!!');
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
  .container
{
	width:100%;                /*casoural width acc. to div*/
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
100%{left:80%; top:1500px}
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
            <li><a href="55emproom.php">ROOM SERVICES</a></li>
			  <li><a href="56emplaund.php">LAUNDARY SERVICES</a></li>
			  <li><a href="57empmed.php">MEDICAL SERVICES</a></li>
			  <li><a href="58empfood.php">FOOD SERVICES</a></li>
			  <li><a href="1home.php">LOGOUT</a></li>
 	  </ul>
   </div>
 </nav>
 </div>
 
 <div id=fly> <a href="59welcmclient.php"><img src="images/170.gif" height="200" width="200"></a></div>
 
   <div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
   
      </ol>

    <!-- Wrapper for slides -->
	 <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/159.jpg"  width="80%" height="30%" id="one">
      </div>

      <div class="item">
        <img src="images/160.jpg" width="80%" height="30%" id="one">
      </div>
	  
      <div class="item">
        <img src="images/161.jpg" width="80%" height="30%" id="one">
      </div>
	 
	  <div class="item">
        <img src="images/162.jpg" width="80%" height="30%" id="one">
      </div>
	 
	  <div class="item">
        <img src="images/163.jpg" width="80%" height="30%" id="one">
      </div>
	 
	  <div class="item">
        <img src="images/164.jpg" width="80%" height="30%" id="one">
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
 <font face="times new roman" size="9" color="CC9933">Room Services</font><br><br>
 
 <div> <div class="col-md-3"><font face="time new roman" size="4px">Room No.</font></div>    <div><input type="text" placeholder="Enter room no" name="rno" required></div>                 </div><br>
 <div> <div class="col-md-3"><font face="time new roman" size="4px">Details</font></div>    <div><input type="text" placeholder="Enter details" name="dtl" required></div>                  </div><br>
 <div> <div class="col-md-3"><font face="time new roman" size="4px">Date</font></div>    <div><input type="date" placeholder="Enter date" name="dat" required></div>                         </div><br>
 <div> <div class="col-md-3"><font face="time new roman" size="4px">Charge</font></div>    <div><input type="text" placeholder="Enter charge" name="chrg" required></div>                    </div><br>
 <div> <div class="col-md-3"><font face="time new roman" size="4px">Employee required</font></div>    <div><input type="text" placeholder="Enter employee" name="emp" required></div>        </div><br>
<div class="col-md-6"><input type="submit" value="Save" name="submit"></div> 
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