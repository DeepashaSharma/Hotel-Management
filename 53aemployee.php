<?php
  include('connection.php');
  if(isset($_POST['submit']))
  {	 
    
	 $a=$_POST['fn'];
     $b=$_POST['ln'];
     $c=$_POST['cn']; 
	 $d=$_POST['emal'];
	 $e=$_POST['dpt'];
	 $f=$_POST['sal'];
	 $g=$_POST['hd'];
   
    
	 
	$sql = mysql_query("INSERT INTO employee(fname, lname, contactno, email, dept, salary, hdate)
	VALUES ('$a','$b','$c','$d','$e','$f','$g')");
	 if($sql)
	 {  
    
	  echo "<script type='text/javascript'>
       alert('Details added successfully!!!!!!!!!!');
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
		       <li><a href="49aroom.php">ROOMS</a></li>
			   <li><a href="50aservices.php">SERVICES </a></li>
			   <li><a href="51acancel.php">CANCELLATION</a></li>
               <li><a href="52aclient.php">CLIENT</a></li>
			   <li><a href="53aemployee.php">EMPLOYEE</a></li>
			   <li><a href="54afeedback.php">FEEDBACK</a></li>
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
     
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/142.jpg"  width="460" height="345" id="one">
      </div>

      <div class="item">
        <img src="images/143.jpg" width="460" height="345" id="one">
      </div>
    
      <div class="item">
        <img src="images/144.jpg"  width="460" height="345" id="one">
      </div>

      <div class="item">
        <img src="images/145.jpg"  width="460" height="345" id="one">
      </div>

  <div class="item">
        <img src="images/146.jpg"  width="460" height="345" id="one">
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
<br><br>
 
 
 <div>
<div class="col-md-4"></div>
 <div class="col-md-6">
  <form action="" method="POST">
 <font face="times new roman" size="9" color="CC9933">Employee Hiring form</font><br><br>
 <div> <div class="col-md-3"><font face="time new roman" size="4px">First name</font></div>    <div><input type="text" placeholder="Enter employee first name" name="fn" required></div>        </div><br>
 <div> <div class="col-md-3"><font face="time new roman" size="4px">Last name</font></div>     <div><input type="text" placeholder="Enter employee last name" name="ln" required ></div>        </div><br>
 <div> <div class="col-md-3"><font face="time new roman" size="4px">Contact no</font></div>    <div><input type="text" placeholder="Enter contac details" name="cn" required></div>             </div><br>
 <div> <div class="col-md-3"><font face="time new roman" size="4px">Email_id</font></div>      <div><input type="email" placeholder="Enter email id" name="emal" ></div>                </div><br>
 <div> <div class="col-md-3"><font face="time new roman" size="4px">Department</font></div>    <div><input type="text" placeholder="Enter department" name="dpt" required></div>                </div><br>
 <div> <div class="col-md-3"><font face="time new roman" size="4px">Salary</font></div>        <div><input type="text" placeholder="Enter salary" name="sal" required></div>                    </div><br>
 <div> <div class="col-md-3"><font face="time new roman" size="4px">Hiring date</font></div>   <div><input type="date" placeholder="Enter hire date" name="hd" required></div>                  </div><br>
<div class="col-md-6"><center><input type="submit" value="Hire" name="submit"></center></div> 
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