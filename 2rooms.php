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
100%{left:80%; top:2000px}
}

/*animation for fly the div ends*/
						 
	
  </style>
  
<body>
<div>
   	<nav class = "navbar " role = "navigation">
     <img src="images/1.png" height="20%" width="15%"align="left">
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
        <img src="images/16.jpg"  width="460" height="345" id="one">
      </div>

      <div class="item">
        <img src="images/17.jpg" width="460" height="345" id="one">
      </div>
    
      <div class="item">
        <img src="images/18.jpg"  width="460" height="345" id="one">
      </div>

      <div class="item">
        <img src="images/19.jpg" width="460" height="345" id="one">
      </div>
    
	  <div class="item">
        <img src="images/20.jpg" width="460" height="345" id="one">
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
  <div class="col-md-2"></div>
  <div id="one" class="col-md-8"><font size=6px face="times-new-roman"><center>LUXURY ROOMS AND SUITES DEVOTED TO MUSIC</center></font></div><br><br><br><br>
  <div>
 <font face="times new roman" size="4"><center>Each of our 51 modern Prague hotel rooms and suites is dedicated to a specific style of music or to a particular artist. Our luxury Prague<br>
 accommodation features 29 Deluxe rooms, 16 Junior Suites and 6 Signature Luxury Suites all situated within four floors of the Aria Hotel<br>
 Prague. Each floor is devoted to a different music genre: Contemporary, Classical, Opera and Jazz.</center> </font>
  </div>
</div><br>
 
 <div>
<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="4"><p>The rooms' interiors were created by two famous Italian designers, Rocco Magnoli and Lorenzo Carmellini. Their work can also be viewed<br>
  in many Versace stores and hotels across the globe. Each room is equipped with carefully selected, custom-made furniture.<br><br>

All of our luxury Prague rooms and suites are non-smoking and feature a flat-screen LCD TV, a CD and DVD player, Apple TV, an iPad with<br>
 high speed Wi-Fi internet access and a fully stocked minibar. Our luxury bathrooms feature a large vanity, a European soaking tub or a<br>
 stand-up rain shower (or both), a telephone, make-up mirror, hair dryer, Molton Brown cosmetics, and thick terrycloth bathrobes and<br>
 slippers.<br><br>

Each room and suite also has its own private, secured Wi-Fi network, and guests can easily access AirPlay to send videos, photos, and<br>
 music from their own Apple devices to the in-room TV and speakers. All rooms and suites have either a garden, street or atrium view, and<br>
 are equipped with air-conditioning, an in-room laptop-size safe, writing desk, and telephone. An ironing board, iron and baby cots are<br>
 available upon request.<br><br>

All hotel guests also have access to our extensive Music Library, which is available via Apple TV to enjoy in the comfort of their own room <br>
(Aria Hotel Prague's notorious Music Library consists of more than 5,000 CDs and DVDs).</p></font>
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
 
 </div>
 <br><br><br><br><br>

 <div>
    <div class="col-md-3" ><center><img src="images/21.jpg" width="250" height="150" id="one"><br><br><u>DELUXE ROOMS</u><br><br>Beds &nbsp;&nbsp;King<br>size &nbsp;&nbsp;26 - 30m2 / 258 - 323ft2<br>View &nbsp;&nbsp;St. Nicholas Church or Winter Garden Atrium<br><br><a href="15room1.php">View Details....</a></center></div>
    <div class="col-md-3" ><center><img src="images/22.jpg" width="250" height="150" id="one"><br><br><u>JUNIOR SUITES</u><br><br>Beds &nbsp;&nbsp;King, Queen or Twin<br>size &nbsp;&nbsp;33 - 42m2 / 355 - 452ft2<br>View &nbsp;&nbsp;Winter Garden Atrium<br><br><a href="16room2.php">View Details....</a></center></div>
    <div class="col-md-3" ><center><img src="images/23.jpg" width="250" height="150" id="one"><br><br><u>ELVIS LUXURY SUITE</u><br><br>Beds &nbsp;&nbsp;King<br>size &nbsp;&nbsp;67m2 / 720 ft2<br>View &nbsp;&nbsp;Winter Garden Atrium<br><br><a href="17room3.php">View Details....</a></center></div>
    <div class="col-md-3" ><center><img src="images/24.jpg" width="250" height="150" id="one"><br><br><u>DVORAK LUXURY SUITE</u><br><br>Beds &nbsp;&nbsp;King<br>size &nbsp;&nbsp;56 m2 / 750 ft2<br>View &nbsp;&nbsp;Vrtba Garden<br><br><a href="18room4.php">View Details....</a></center></div>
  </div>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
 <div>
    <div class="col-md-3" ><center><img src="images/25.jpg" width="250" height="150" id="one"><br><br><u>SMETANA LUXURY SUITE</u><br><br>Beds &nbsp;&nbsp;King<br>size &nbsp;&nbsp;85 m2 / 915ft2<br>View &nbsp;&nbsp;Vaulted Ceiling with Windows<br><br><a href="19room5.php">View Details....</a></center></div>
    <div class="col-md-3" ><center><img src="images/26.jpg" width="250" height="150" id="one"><br><br><u>BEETHOVEN LUXURY</u><br><br>Beds &nbsp;&nbsp;King and Twin<br>size &nbsp;&nbsp;76m2 / 818ft2<br>View &nbsp;&nbsp;Vrtba Garden<br><br><a href="20room6.php">View Details....</a></center></div>
    <div class="col-md-3" ><center><img src="images/27.jpg" width="250" height="150" id="one"><br><br><u>BLUES LUXURY SUITE</u><br><br>Beds &nbsp;&nbsp;King<br>size &nbsp;&nbsp;116m2 / 1248ft2<br>View &nbsp;&nbsp;Vrtba Garden<br><br><a href="21room7.php">View Details....</a></center></div>
    <div class="col-md-3" ><center><img src="images/28.jpg" width="250" height="150" id="one"><br><br><u>MOZART LUXURY SUITE</u><br><br>Beds &nbsp;&nbsp;King and twin<br>size &nbsp;&nbsp;90m2 / 969ft2<br>View &nbsp;&nbsp;Vrtba Garden<br><br><a href="22room8.php">View Details....</a></center></div>
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