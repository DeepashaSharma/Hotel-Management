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
}                          /*css for menu bar ends*/
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

       #one                                  /*background of text*/
{
   background-image:url("images/2.png"); 
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
								   
 a{
	 color:CC9933;
 }								   

 
 a:hover{
	 color:grey;
 }								   
	
                     
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
100%{left:80%; top:2000px}
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
     </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/69.jpg"  id="one">
      </div>

      <div class="item">
        <img src="images/70.jpg"  id="one">
      </div>
    
      <div class="item">
        <img src="images/71.jpg"  id="one">
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
 <br><br><br><br>
 

 
 <div>
  <div class="col-md-2"></div>
  <div id="one" class="col-md-8"><font size=6px face="times-new-roman"><center>SERVICES AND FCILITIES AT ARIA HOTEL PRAGUE</center></font></div><br><br><br><br>
  <div>
 <font face="times new roman" size="4"><center> Whether on a business trip or a leisurely getaway, the possibilities at Aria Hotel Prague are endless. Take a stroll through the UESCO World<br>
 Heritage Vrtba Garden, which can be privately accessed by our hotel guests, or take in an eagle-eye view of the garden from our modest<br>
 Fitness Center. Adjacent to the Fitness Center, you can unwind with a massage or pay a visit to the steam room and sauna. Our music salon </center> </font>
  </div>
</div><br>
 
 <div>
<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="4"><p>offers comfortable seating near the fireplace and an extensive collection of books, or just ask our Aria Hotel Prague concierge, situated in<br>
  the Music Library, where you can also borrow a CD or DVD to play in your room or make a use of our Music Box, a mini screening room for <br>
  up to six people. If your party is more than six, ask about our a bigger Screening Room, where we can also organize business meetings for<br>
  up to forty people, or our Boardroom, which is perfectly suited for smaller meetings up to 10 people.</p></font>
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
<br><br><br><br><br>

<div>
    <div class="col-md-3" ><center><img src="images/72.jpg" width="250" height="150" id="one"><br><br><u>MUSIC LIBRARY AND CONCIERGE</u><br><br>The Aria Hotel Prague’s large<br> selection of CDs, DVDs, videos <br>and music…<br><a href="23music.php">view details</a></center></div>
    <div class="col-md-3" ><center><img src="images/73.jpg" width="250" height="150" id="one"><br><br><u>PRIVATE CINEMA</u><br><br>Guests at the Aria Hotel Prague are <br>welcome to gather for an evening of<br> movies and music in the Screening <br>Room. Set…<br><a href="24private.php">View Details....</a></center></div>
    <div class="col-md-3" ><center><img src="images/74.jpg" width="250" height="150" id="one"><br><br><u>FITNESS CENTER</u><br><br>Unwind from your travels. Continue<br> your regular exercise regime away <br>from home, confident that the best<br> possible care<br><a href="25fitness.php">View Details....</a></center></div>
    <div class="col-md-3" ><center><img src="images/75.jpg" width="250" height="150" id="one"><br><br><u>VRTBA GARDEN</u><br><br>The Vrtba Garden is Prague’s oldest<br> Baroque garden and one of the most <br>charming and well-preserved places<br> in Prague.…<br><a href="26vrtba.php">View Details....</a></center></div>
  </div>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
 <div>
    <div class="col-md-3" ><center><img src="images/76.jpg" width="250" height="150" id="one"><br><br><u>WINTER GARDEN ATRIUM</u><br><br>The Winter Garden Atrium forms the<br> magnificent heart of the Aria Hotel<br> Prague. This light-flooded area is <br>reminiscent…<br><a href="27winter.php">View Details....</a></center></div>
    <div class="col-md-3" ><center><img src="images/77.jpg" width="250" height="150" id="one"><br><br><u>ROOFTOP TERRACE</u><br><br>Enjoy our world-class cuisine and<br> beverage selection against the<br> magnificent backdrop of Prague. Our<br> Terrace comfortably…<br><a href="28rooftop.php">View Details....</a></center></div>
    <div class="col-md-3" ><center><img src="images/78.jpg" width="250" height="150" id="one"><br><br><u>CODA RESTAURANT</u><br><br>Fine food and music form the perfect <br>duet. CODA Restaurant is an ideal<br> place for a private lunch or a meeting<br> and sits… <br><a href="29coda.php">View Details....</a></center></div>
    <div class="col-md-3" ><center><img src="images/79.jpg" width="250" height="150" id="one"><br><br><u>FIREPLACE LOUNGE</u><br><br>The Aria Hotel Prague's cozy Fireplace<br> Lounge is decorated in opulent hues<br> of red and gold. This intimate room <br>has…<br><a href="30fireplace.php">View Details....</a></center></div>
  </div>
 
 <br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
 
 
 
 
 
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