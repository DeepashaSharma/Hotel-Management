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

                             /*css for sidenav opions*/
#mySidenav a {
    position: absolute;
    left: 20px;
    transition: 0.3s;
    padding: 15px;
    width:100px;
    text-decoration: none;
    font-size:90%;
	font-face:times new roman;
    color: white;
    border-radius: 0 5px 5px 0;
}
#mySidenav a:hover {
    left: 0;
	width:200;
	font-size: 100%;
}

#option1 {
    top: 90px;
    background-color:#ff9966;
}
#option2 {
    top: 160px;
    background-color:#ff9966;
}
#option3 {
    top: 240px;
    background-color:#ff9966;
}
#option4{
    top: 320px;
    background-color:#ff9966;
}
#option5 {
    top: 400px;
    background-color:#ff9966;
}
#option6 {
    top: 480px;
    background-color:#ff9966;
}

           /*css for sidenav ends*/
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
100%{left:80%; top:1800px}
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
 
 <div class="col-md-9"></div>
 <div><font size="10" color="CC9933">PROPOSALS</font></div>
 
 <div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/93.jpg"  width="460" height="345" id="one">
      </div>

      <div class="item">
        <img src="images/92.jpg" width="460" height="345" id="one">
      </div>
    
      <div class="item">
        <img src="images/94.jpg"  width="460" height="345" id="one">
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
    <div class="col-md-1"></div>
 
    <div class="col-md-3">
        <div id="mySidenav" class="sidenav">
               <a href="31proposals.php" id="option1">PROPOSALS</a>
               <a href="32planning.php" id="option2">PLANNING</a>
               <a href="33service.php" id="option3">SERVICES</a>
			   <a href="34menu.php" id="option4">MENU</a>
               <a href="35venue.php" id="option5">VENUES</a>
			   <a href="36cake.php" id="option6">CAKE</a>
        </div>
   </div>
   
   <div class="col-md-5">
   <br><br><br><br><br><br>
   <font face="times new roman" size="4px">
   Aria Hotel Prague is more than a perfect place for engagement. Not<br>
   only descrete service but also great venues and dining are spot on.<br><br>
   

 <h3 style="color:CC9933">POSSIBILITIES OF ENGAGEMENT<br></h3>
  <h3 style="color:CC9933"> UNDER THE WINDOWS OF YOUR ROOM WITH A VIOLINIST<br></h3>

Imagine you are sitting on a window seal with a magnificent view over the <br>
UNESCO Vrtba Garden and suddenly hear a violin playing and see your <br>
loved one under your window proposing to you. Will you say yes?<br><br>

 <h3 style="color:CC9933">ON A ROOFTOP OF THE HOTEL WITH 360 VIEWS<br><br></h3>

Rent the rooftop privately, sprinkle rose petals everywhere and propose on <br>
top of the world. You can also reserve a table for lunch or dinner and <br>
surprise your loved one when you suddenly leave to the bathroom and <br>
come back with a ring. <br><br>

 <h3 style="color:CC9933">IN THE BAROQUE GARDEN<br></h3>

Hotel guests hours only enable for truly magical and private proposal in the<br>
 oldest baroque garden in Prague. Romantic benches, perfectly trimmed <br>
 trees, flowers and unique lookout belong to the endless possibilities. <br>
 
On request, we can also prepare a table for two in the garden with a Tasting<br>
 Menu. Prices and availability can be requested at lucie.cudova@aria.cz<br><br>
 
 <hr>

Flowers, drinks, engagement rings can be all arranged. <br><br>
 

 </font>
   </div>
 </div>
 <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br><br><br> <br><br> <br><br> <br><br> <br><br><br><br> <br><br> <br><br> <br><br> <br><br>
 
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