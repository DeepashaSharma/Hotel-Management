<?php
  include_once('connection.php');
   if(isset($_POST['submit']))
   {
	  
	  $b=$_POST['uname'];
	  $c=$_POST['psw'];
	 
if($b=='Admin' && $c=='Admin')
{
	header('location:41Admin.php');
}
else if($b=='Employee' && $c=='Employee')
{
	header('location:42employee.php');
}
 else
		   die("Please enter Username or Password");
	   
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
						                             /*css for login form start*/     

/* Full-width input fields */                               
input[type=text], input[type=password] {
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
input[type=password]:focus {
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
						 
#one                                  /*background of highlights*/
{
   background-image:url("images/2.png"); 
}

#first a{                                     /*for images*/
    position: absolute;
	left:50%;
	top:166%;
    padding: 15px;
    width:25%;
    text-decoration: none;
    font-size: 20px;
    color:CC9933;
    background-color: #ededed;
}
#second a{                               /*for images*/
    position: absolute;
	left:;
	top:30%;
    padding: 15px;
    width: 200px;
    text-decoration: none;
    font-size: 20px;
    color:CC9933;
    background-color: #ededed;
}
#third a{                            /*for images*/
    position: absolute;
	left:64%;
	top:220%;
    padding: 15px;
    width: 200px;
    text-decoration: none;
    font-size: 20px;
    color:CC9933;
    background-color: #ededed;
}

                                   /*css for accordion*/
button.accordion {
    background-color: #eee;
    cursor: pointer;
    padding: 8px;
    width: 80%;
    border: none;
    text-align:center;
    outline: none;
    font-size: 20px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

button.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}

div.panel {
    padding: 0 18px;
    background-color:#ededed;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
	}
	                               /*css for accordion ends*/
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
100%{left:80%; top:2500px}
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
 
 <div>
 
 <div class="col-md-9"></div>
 <div class="col-md-3">
          <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; border-radius:20%">Login</button>
             <div id="id01" class="modal">
             <form class="modal-content animate" action="" method="POST"> 
                    
					<div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div>
                      <center>
					 <font size=4px code face="times new roman">
				    <b>Username</b>
                    <input type="text" placeholder="Enter Username" name="uname"><br>
                    <b>Password</b>
                    <input type="password" placeholder="Enter Password" name="psw"><br>
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

   </div>
   
<button type="button" value="register" onclick="window.location.href='40registration.php'">Register</button>
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
        <img src="images/6.jpg"  width="460" height="345" id="one">
      </div>

      <div class="item">
        <img src="images/7.jpg" width="460" height="345" id="one">
      </div>
    
      <div class="item">
        <img src="images/8.jpg"  width="460" height="345" id="one">
      </div>

      <div class="item">
        <img src="images/9.jpg" width="460" height="345" id="one">
      </div>
    
	  <div class="item">
        <img src="images/10.jpg" width="460" height="345" id="one">
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
  <div class="col-md-3"></div>
  <div id="one" class="col-md-6"><font size=6px face="times-new-roman"><center>HIGHLIGHTS</center></font></div>
 </div>
 <br><br><br><br><br>
 
 
 
<div>
   <div class="col-md-2"></div>
   
   <div class="col-md-5">
   <img src="images/3.jpg" align="left" height="40%" width="100%"></div>
   <div id="first"><a href="8location.php">LOCATION</a><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;<font size="3" face="time new roman">Aria Hotel Prague is ideally<br>
   &nbsp;&nbsp;&nbsp;&nbsp;situated in Lesser Town, <br>&nbsp;&nbsp;&nbsp;&nbsp;just steps away from the <br>&nbsp;&nbsp;&nbsp;&nbsp;Charles Bridge and Prague<br>
   &nbsp;&nbsp;&nbsp;&nbsp; Castle</font></div>
   </div>
<br><br><br><br>

<div>
<div class="col-md-2"></div>

<div class="col-md-4">
<div id="second"><a href="3dining.php">DINING</a></div>
<div align="center"><img src="images/4.jpg" id="seven" height="60%" width="70%"></div>
</div>

<div>
<br><br><br><br>
<img src="images/5.jpg" align="left" height="40%" width="20%"><div id="third"><a href="4facilities.php">FACILITIES</a><br><br><br><br><font size="3" face="time new roman">
    Music Library & Concierge<br>
    Private Cinema<br>
    Boardroom<br>
    Music Box<br>
    Music Salon<br>
    Fitness Center<br>
    Vrtba Garden
</font></div>
</div>
<br><br><br><br><br><br>

<div>
  <div class="col-md-3"></div>
  <div id="one" class="col-md-6"><font size=6px face="times-new-roman"><center>OUR ROOMS, INSPIRED BY MUSIC</center></font></div>
  <div class="col-md-3"></div><br><br><br><br>
  
  
  
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
	   <img src="images/11.jpg" width="900" height="500" id="one">
      </div>

      <div class="item">
        <img src="images/12.jpg" width="900" height="500" id="one">
      </div>
    
      <div class="item">
        <img src="images/13.jpg" width="900" height="500" id="one">
      </div>
    
	<div class="item">
        <img src="images/14.jpg" width="900" height="500" id="one">
      </div>
	  
  	<div class="item">
        <img src="images/15.jpg" width="900" height="500" id="one">
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
  <div class="col-md-3"></div>
  <div id="one" class="col-md-6"><font size=6px face="times-new-roman"><center>WELCOME TO ARIA HOTEL PRAGUR</center></font></div><br><br><br><br>
  <div>
 <font face="times new roman" size="4"><center> Experience the boutique Aria Hotel Prague – an unforgettable luxury Prague hotel<br>
  just steps away from the Charles Bridge and Prague Castle. A virtuoso hotel inspired<br>
  by music, Aria Hotel Prague is composed of 51 luxurious suites and rooms dedicated <br>
  to a specific style of music or a particular artist or composer. The five-star Aria Hotel<br>
  Prague harmonizes a unique musical concept with luxurious accommodation, fine</center> </font>
  </div>
</div><br>
 
 <div>
<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="4"><p>dining at CODA Restaurant, a Rooftop Terrace, exceptional service,<br>
     surprising amenities and a private entrance to a UNESCO World Heritage garden.<br>
	 Nestled in enchanting Mala Strana, (Lesser Town), Aria Hotel Prague provides the <br>
	 perfect accompaniment to your stay in "the golden city," be it for a business meeting,<br>
	 a magical holiday, or a romantic Prague wedding and honeymoon.<br><br>

   One of the world's leading music destinations, Prague, with its rich cultural heritage,<br>
   served as the inspiration for Spatium, the hotel's architects, best known for their work<br>
   with Gianni Versace. Architect Rocco Magnoli, along with his partner Lorenzo<br>
   Carmellini, was commissioned to create a beautiful and architecturally distinctive<br>
   luxury Prague hotel with five-star amenities. Magnoli has incorporated notes of the<br>
   past and present to create an exquisitely-designed Prague hotel. Our hotel was<br>
   transformed from a row of modest gray stone and yellow stucco buildings into a<br>
   five-star luxurious musical haven.<br><br>

   We have curated the whole music concept in such a way so that you will find rooms<br>
   and suites inspired by classical, contemporary, opera and jazz music. Aria Hotel <br>
   Prague's rooms and suites range from Mozart to Beethoven, from Elvis to Billie<br>
   Holiday. Each room is accented with original artwork and offer a selection of books<br>
   along with the latest in-room technology, including Apple TV and an iPad.<br><br>

   Guests of our luxury Prague hotel can explore the joys of music from the Music<br>
   Library and our Private Screening Room. Dr. Ivana Stehlikova, who holds a PhD in<br>
   Musicology, is Aria Hotel Prague's Music Director and is always available to provide<br>
   advice on current cultural and musical events in Prague for our hotel guests.<br><br>

  During the summer season (April through October) you can enjoy our private<br>
  entrance to Prague's oldest Baroque garden, the Vrtba Garden – one of the most <br>
  beautiful in the city, and a UNESCO Word Heritage site. The summer time is also an <br>
  ideal time to explore the hotel's Rooftop Terrace restaurant with a magnificent view<br>
  of the city of Prague.</p></font>
</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>
</center>
</div>
 
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