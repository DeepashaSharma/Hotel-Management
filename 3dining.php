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
}                                                      /*css for menu bar ends*/

#one                                
{
   background-image:url("images/2.png"); 
}

                           /*css for slider*/		
  .carousel-inner > .item > img,                    
  .carousel-inner > .item > a > img {
      width:100%;
	  height:50%;
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
100%{left:80%; top:1200px}
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
  <div class="col-md-2"></div>
  <div id="one" class="col-md-8"><font size=6px face="times-new-roman"><center>CODA – PRAGUE FINE DINING RESTAURANT</center></font></div>
 </div>
 <br><br><br><br><br>

 <div>
   <div class="col-md-1"></div>
   <div class="col-md-5">
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
        <img src="images/58.jpg"  id="one">
      </div>

      <div class="item">
        <img src="images/59.jpg"  id="one">
      </div>
    
      <div class="item">
        <img src="images/60.jpg"  id="one">
      </div>

      <div class="item">
        <img src="images/61.jpg"  id="one">
      </div>
    
	  <div class="item">
        <img src="images/62.jpg"  id="one">
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
   </div>
   <div class="col-md-5">
    <font face="times new roman" size="4">
   CODA Restaurant ranks among Prague's best fine dining
   establishments and features a delightful menu prepared by Executive
   Chef David Šašek. The space offers a stunning art-deco interior and
   magnificent view of the city from our rooftop terrace. CODA is located
   in the heart of old Prague in Lesser Town, (Malá Strana), just steps away
   from Prague Castle, the palace gardens, Lesser Town Square, St. Nicholas
   Church and the Charles Bridge. A live piano serenades guests 
   every Tuesday through Saturday.
   </font><br><br>
    <img src="images/63.jpg" width="50%" align="left"><font face="times new roman" size="4"><br><br>Most of David's meat dishes are prepared using the "Sous Vide" method. David prefers local and organic products from Czech farms</font>
   </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr>


<div>
   <div class="col-md-1"></div>
   <div class="col-md-5">
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
        <img src="images/65.jpg"  id="one">
      </div>

      <div class="item">
        <img src="images/66.jpg"  id="one">
      </div>
    
      <div class="item">
        <img src="images/67.jpg"  id="one">
      </div>

      <div class="item">
        <img src="images/68.jpg"  id="one">
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
   </div>
   <div class="col-md-5">
    <font face="times new roman" size="4">
  Terasa U Zlate studne is just a five-minute walk from Aria Hotel Prague<br>
  in our sister property, the Golden Well Hotel. Annually voted the best restaurant in the Czech
  Republic, Terasa U Zlate studne serves Czech and international cuisine on its three
  terraces - two heated and one indoor - all of which boast spectacular views of Prague. 
The restaurant's new interior is the work of Italian architects Lorenzo Carmelini and 
Katrin Herden, and showcases their signature style of modern design with elements of 
the Renaissance era.
   </font><br><br>
    <img src="images/64.jpg" width="50%" align="left"><font face="times new roman" size="4"><br><br>Chef Pavel Sapík is a Czech icon in the hospitality industry. The tradition of hospitality in his family dates back to the 17th century.  </font>
   </div>
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