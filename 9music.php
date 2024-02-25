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
  <div class="col-md-3"></div>
  <div id="one" class="col-md-6"><font size=6px face="times-new-roman"><center>MUSIC HOTEL IN PRAGUE</center></font></div><br><br><br><br>
  <div>
 <font face="times new roman" size="4"><center>Featuring four floors, each dedicated to a major genre of music, the Aria's accommodations pay homage to the greatest music and <br>
 musicians of all time. Guest rooms on the Contemporary, Classical, Opera and Jazz floors honor each genre's greatest artists and <br>
 composers with CDs, art and books. Featured artists include, for instance, Brahms and Bernstein for Classical; Elvis and The Beatles for </center> </font>
  </div>
</div><br>
 
 <div>
<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="4"><p>Contemporary; Maria Callas and Mozart for Opera; and Billie Holiday and Louis Armstrong for Jazz. All guest rooms and suites include<br>
  complimentary Internet access, DVD/CD players, Apple TV and iPads.</p></font>
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
 <br><br>
 
 <div>
 <center><img src="images/116.jpg" width="100%" height="40%"></center></div><br><br>
 <center> <font face="times new roman" size="4"><p>The enjoyment and celebration of music are amplified elsewhere throughout Aria Hotel Prague as well. Guests can read books about music and borrow CDs from our extensive<br>
 private Music Library. The Music Box provides an intimate entertainment chamber with a high definition LCD screen, Blue Ray player and XBOX One gaming console with a <br>
 capacity of up to six people.<br><br>

Additionally, the cozy Music Salon features a striking wood-burning fireplace and rich comfortable leather seating where guests may relax and unwind. In addition, a private<br>
 Screening Room featuring state-of-the-art technology including an 80" LCD TV and Wilson speakers, accommodates up to 40 people and can be used for various occasions.<br>
 The Screening Room, the Music Box and the Boardroom are available for private parties and are equipped with business capabilities, including video conferencing.<br><br>

Hotel guests also have the unique opportunity to admire the pride of Austrian craftsmanship in the form of a concert quality sendorfer piano, situated in the Winter Garden<br>
 Atrium, where guests can enjoy live piano music on a regular basis</p></font></center>

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