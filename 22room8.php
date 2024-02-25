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
    top: 170px;
    background-color:#ff9966;
}
#option3 {
    top: 250px;
    background-color:#ff9966;
}
#option4{
    top: 350px;
    background-color:#ff9966;
}
#option5 {
    top: 450px;
    background-color:#ff9966;
}
#option6 {
    top: 550px;
    background-color:#ff9966;
}
#option7 {
    top: 650px;
    background-color:#ff9966;
}
#option8 {
    top: 750px;
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
100%{left:80%; top:1700px}
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
 
 <div class="col-md-7"></div>
 <div><font size="10" color="CC9933">MOZART LUXURY SUITE</font></div>
 
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
        <img src="images/9.jpg"  width="460" height="345" id="one">
      </div>

      <div class="item">
        <img src="images/28.jpg" width="460" height="345" id="one">
      </div>
    
      <div class="item">
        <img src="images/55.jpg"  width="460" height="345" id="one">
      </div>
	  
       <div class="item">
        <img src="images/56.jpg"  width="460" height="345" id="one">
      </div>
	  
	     <div class="item">
        <img src="images/57.jpg"  width="460" height="345" id="one">
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
               <a href="15room1.php" id="option1">DELUXE ROOMS</a>
               <a href="16room2.php" id="option2">JUNIOR SUITES</a>
               <a href="17room3.php" id="option3">ELVIS LUXURY SUITE</a>
			   <a href="18room4.php" id="option4">DVORAK LUXURY SUITE</a>
               <a href="19room5.php" id="option5">SMETANA LUXURY SUITE</a>
			   <a href="20room6.php" id="option6">BEETHOVEN LUXURY SUITE</a>
               <a href="21room7.php" id="option7">BLUES LUXURY SUITE</a>
               <a href="22room8.php" id="option8">MOZART LUXURY SUITE</a>
        </div>
   </div>
   
   <div class="col-md-5">
   <br><br><br><br><br><br>
   <font face="times new roman" size="4px">
  Our two-bedroom Mozart Luxury Suite is among the capital's finest and<br>
  most popular accommodations. The splendid view of the Baroque Vrtba<br>
  Garden gives this Luxury Suite its unrivalled appeal.<br><br>

 The elegant proportions and stately procession of rooms complement the<br>
 sumptuous furnishings and beautiful interior to create a Luxury Suite that is <br>
 literally fit for a king. The Mozart Luxury Suite features a master bedroom<br>
 and bathroom, a twin bedroom and bathroom, a spacious living room and a <br>
 fully equipped kitchenette. Just sink into the sofa and enjoy the music<br>
 around you. This Luxury Suite is NON-SMOKING.<br><br>

 Location : 4th floor<br><br>

 View : Vrtba Garden<br><br>

 Decor : Romantic red tones, inspired by Italian design<br><br>

 Beds : King and Twin<br><br>

 Bathrooms : One guest bathroom and two bathrooms with bathtubs, <br>
 stand-up rain shower and bidet, Molton Brown toiletries, make-up mirror,<br>
 hair dryer, bathroom telephone, luxurious terrycloth bathrobes and slippers<br><br>

 Equipment : Air conditioning, LCD TV with national and international <br>
 channels, CD/DVD player, Hi-Fi audio system including a Harman Kardon<br>
 amplifier, iPad, Apple TV, Wi-Fi, in-room laptop-size safe, writing desk,<br>
 telephone, minibar, large sofa, dining table and Illy coffee maker<br><br>
 

Size : 90m2 / 969ft2
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