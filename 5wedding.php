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
					   
.one{
	max-width:100%;
    height:auto;			
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
100%{left:80%; top:1400px}
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
  <div id="one" class="col-md-6"><font size=6px face="times-new-roman"><center>ROMANTIC WEDDING VENUE IN PRAGUE</center></font></div><br><br><br><br>
  <div>
 <font face="times new roman" size="4"><center> "Weddings are not about spending the least amount of money or the most amount of money, they are about spending good money on the<br>
  elements that are most important to you and your partner."<br><br>

Prague is known as one of the most romantic cities in the world and is an ideal fairytale wedding and honeymoon destination. The Aria </center> </font>
  </div>
</div><br>
 
 <div>
<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="4"><p>Hotel Prague can arrange for its guests festivities, accommodation for the wedding party, an elegant reception at CODA Restaurant and a <br>
  magnificent wedding banquet. The Aria Hotel Prague's Music Director will be glad to assist the happy couple in tailoring a unique music<br>
  program for any kind of celebration.<br><br>

Our experienced, creative and dedicated staff can assist you with planning the menu, flower arrangements and photography, working with<br>
 you every step of the way to create a happy and memorable wedding-planning experience. Relax, and let us take care of the details. The<br>
 maximum capacity for a wedding is 100 persons.<br><br>

Aria Hotel Prague was selected as the Most Luxurious Wedding Venue in the Czech Republic in 2014 and 2015.</p></font>
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
<br><br><br><br><br><br><br><br><br><br><br>

<div>
<div class="col-md-4"><center><img src="images/93.jpg" width="330" height="150" id="one"><br><br><a href="31proposals.php">Proposals</a></center></div>
<div class="col-md-4"><center><img src="images/95.jpg" width="330" height="150" id="one"><br><br><a href="32planning.php">Planning</a></center></div>
<div class="col-md-4"><center><img src="images/96.jpg" width="330" height="150" id="one"><br><br><a href="33service.php">Services</a></center></div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div>
<div class="col-md-4"><center><img src="images/99.jpg" width="330" height="150" id="one"><br><br><a href="34menu.php">Menu</a></center></div>
<div class="col-md-4"><center><img src="images/102.jpg" width="330" height="150" id="one"><br><br><a href="35venue.php">Venues</a></center></div>
<div class="col-md-4"><center><img src="images/104.jpg" width="330" height="150" id="one"><br><br><a href="36cake.php">Cake</a></center></div>
</div> 
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
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