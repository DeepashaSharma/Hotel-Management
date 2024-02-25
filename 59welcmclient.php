<?php
  include_once('connection.php');
   if(isset($_POST['submit']))
   {
	  
	   $b=$_POST['name'];
	   $c=$_POST['rdate'];
	   
	   if($b&&$c)
	   {
	   $sql = mysql_query("SELECT * FROM reg WHERE fname='$b' ");
	   $numrows = mysql_num_rows($sql);
	   
	     if($numrows!=0)
		   {
			   while ($row = mysql_fetch_assoc($sql))
			   {
				   $dbfname = $row['fname'];
				   $dbrdate = $row['rdate'];
			   }
		    	   if($b==$dbfname&&$c==$dbrdate)
			         {
				       header('location:43client.php');
			         }
			        else
			           echo "<script type='text/javascript'>
		                     alert('User does not exit or you are not registered!');
	                        </script>";  
		  }
		     else
			   die("User does not exit or you are not registered!!!!");
	
	   }


   
}
	


?> 

<html lang="en">
<head>
<title>Blood Bank</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.css"/>
<script src="js/bootstrap.min.js"></script>                    <!--all the above script and style are used for bootstrap---><!--which is used for menu bar-->
<link rel="stylesheet" href="w3css/w3.css">                   <!--link for using cs animation without net--><!--here it is used for responsive web page design--> 
 <script src="js/bootstrap.min.js"></script>  
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
 						      
							  /*css for login form start*/     

/* Full-width input fields */                               
input[type=text], input[type=date] {
    width:50%;
	height:40px;
    padding: 12px 20px;
    margin: 8px 8px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=text]:focus {
    background-color: lightblue;
	width:55%;
}
input[type=date]:focus {
    background-color: lightblue;
	width:55%;
}
/* Set a css style for all buttons of home page*/
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
button:active {-
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the form and position the close button*/ 
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color:#ff9966;
	opacity:0.9;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
 	height:60%;
	}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 10%;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

.cancelbtn {
       width: 20%;
	   	height:17%;
    }

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
                                 /*css for login ends*/   
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
        <img src="images/152.jpg"  width="460" height="345" id="one">
      </div>

      <div class="item">
        <img src="images/153.jpg" width="460" height="345" id="one">
      </div>
    
      <div class="item">
        <img src="images/154.jpg"  width="460" height="345" id="one">
      </div>

     <div class="item">
        <img src="images/155.jpg"  width="460" height="345" id="one">
      </div>

	  <div class="item">
        <img src="images/156.jpg"  width="460" height="345" id="one">
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
<center>
 <font face="times new roman" size="9" color="CC9933">Login for our Clients</font><br><br>
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; border-radius:20%">Login</button>
             <div id="id01" class="modal">
             <form class="modal-content animate" action="" method="POST"> 
                    
					<div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div>
                      <center>
					 <font size=4px code face="times new roman">
				    <b>First</b>
                    <input type="text" placeholder="Enter your name" name="name"><br>
                    <b>Date</b>
                    <input type="date" placeholder="Enter registeration date" name="rdate"><br>
                    <button type="submit" name="submit">Login</button>
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                      </font>
					  </center>
             </form>
             </div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</center>	
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
 
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
