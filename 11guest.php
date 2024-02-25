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
#text
{
	background-color:white;
	opacity:0.6;
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
    background-color:white;
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
 
 <div>
  <div class="col-md-2"></div>
  <div id="one" class="col-md-8"><font size=6px face="times-new-roman"><center>ARIA HOTEL PRAGUE GUEST REVIEWS</center></font></div><br><br><br><br><br><br>
 </div>
  <br><br>
 
<div>
  <div class="col-md-2"></div>
  
  
  <div class="col-md-4" id="text">
  <font face="times new roman" size="3"><center>
  
  <h4 style="color:CC9933">" BOUTIQUE STYLE HOTEL, WITH FRIENDLY STAFF AND EXCELLENT SERVICE "</h4><br><br>

 

We arrived earlier than the normal check-in time on December 30th, but our room was ready and there was no hassle checking in. The staff were friendly, our room

<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="3"><p>was warm and comfortable, with wine and fruit awaiting us. 
The room was spacious enough, and very clean, with Molton Brown products in the bathroom. 
We stayed here 4 nights, and although we never had dinner in the hotel, breakfast was always excellent, and plentiful.</p></font>
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
  
  <div class="col-md-1"></div>
  
  
  
  <div class="col-md-4" id="text">
   <font face="times new roman" size="3"><center>
  
  <h4 style="color:CC9933">"CHARMING FIRST-RATE HOTEL"</h4><br><br>
  
We recently spent five memorable nights at the Aria Hotel. Fabulous. The hotel is a mix of modern amenities with old-world charm. This sophisticated yet warm hotel  
<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="3"><p>has a musical theme throughout, from the classical composers that donned our dining plates to the Beatles music that wafted the public spaces. The gardens attached to the hotel are stunning, and the rooftop dining dreamy. And don't miss out on the excellent concierge who pointed us in all kinds of rewarding directions. When we find our way back to the magical city of Prague, we will definitely be staying at the Aria."
  </p></font>
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
 
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>






<div>
  <div class="col-md-2"></div>
  
  
  <div class="col-md-4" id="text">
  <font face="times new roman" size="3"><center>
  
  <h4 style="color:CC9933">"THE BEST HOTEL IN PRAGUE"</h4><br><br>
"Prague, the majestic city of 100 spires and a very cheap exchange rate, is my favorite place in the world. I imagine myself on a royal promenade along the city’s cobblestone roads admiring the picturesque scenery 
<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="3"><p>and glorious architecture. Naturally, when I want to feel like a king, I check into the five star Aria Hotel Prague and immerse myself in its inviting grandeur.<br><br>

The regal hotel was designed by Italian architects Rocco Magnoli and Lorenzo Carmelini, best known for their work with fashion legend Gianni Versace. The Aria Hotel’s resplendence greets you upon entering its gorgeous lobby with sculptures, paintings and a glass ceiling. I was also greeted with a welcome drink and a free speedy internet connection throughout my entire stay. Aria has an elegant and enchanting musical theme woven throughout the entire property that truly enhanced the experience.</p></font>
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
  
  <div class="col-md-1"></div>
  
  
  
  <div class="col-md-4" id="text">
   <font face="times new roman" size="3"><center>
  
  <h4 style="color:CC9933">"ANOTHER FANTASTIC STAY"</h4><br><br>
  
  On a recent business trip to Prague, I stayed at the Aria hotel for the second time in the past year. Once again, my experience at the hotel was exceptional! The service at the front desk is extremely helpful, courteous and 
<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="3"><p>knowledgeable. The hotel is situated on a quiet street within a 5 minute walk to the Charles Bridge and local tourist attractions. Be sure if you're staying at the hotel to visit the rooftop restaurant, Coda, for one the best views of the city and castle.
<br><br>
One of the best features of the hotel, in my opinion, is the stunning gardens inside a courtyard at the hotel. I was fortunate enough to be placed in the same room which overlooked the gardens as I had on my prior trip. I had requested this room in advance and the front desk staff was very accommodating in moving my reservation into this room. Thank you!!
<br><br>
I would definitely choose this hotel every time I come to Prague and highly recommend it." </p></font>
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
 
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>








<div>
  <div class="col-md-2"></div>
  
  
  <div class="col-md-4" id="text">
  <font face="times new roman" size="3"><center>
  
  <h4 style="color:CC9933">A SOPHITICATED GEM OF A HOTEL IN A BEAUTIFUL CITY!"</h4><br><br>

"The Aria Hotel was our most favorite hotel during a three city visit this month. The staff was more than helpful and the amenties were perfect. Coda, the 
<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="3"><p>restaurant in the hotel, is excellent. And one doesn't have to look far for beautiful sculpture and art. The gardens in the rear of the hotel are a perfect retreat from the business of being a tourist. And the manager, Jiri Hlavaty, saw how interested we were in the art in the hotel and explained what we were seeing and gave us suggestions for things to do that we would have missed."</p></font>
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
  
  <div class="col-md-1"></div>
  
  
  
  <div class="col-md-4" id="text">
   <font face="times new roman" size="3"><center>
  
  <h4 style="color:CC9933">THE HIGHLIGHT OF OUR HONEYMOON</h4><br><br>
  
  "If you are going to Prague, you MUST pick Hotel Aria! A few highlights that made my honeymoon extra-memorable:  
<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="3"><p>

    Limo car service from/to airport, train station, or anywhere<br>
    Friendly customer service even though I was quite picky about the "right" room. They understood how important it was and gave us a room tour<br>
    They gave us a complimentary bottle of red wine as a honeymoon gift! WOW<br>
    Live jazz piano music playing at the restaurant<br>
    Loved the music, movies, and the library there! You just feel surprised that asyou hear the composer's music walking into the room, there is information and background about the composer available for you to look at!<br>
    The BREAKFAST WAS AWESOME! We couldn't wait to wake up early because of their super yummy breakfast and excellent service! I miss the breakfast at the hotel the most.<br>
    The secret garden! Go check it out... it's a surprise!<br>
    Fine dining at the restaurant. Romantic!"
  </p></font>
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
 
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>











<div>
  <div class="col-md-2"></div>
  
  
  <div class="col-md-4" id="text">
  <font face="times new roman" size="3"><center>
  
  <h4 style="color:CC9933">"ACCOMODATION-SERVICE-AMENITIES: ALL FIRST CLASS!"</h4><br><br>

We were recommended The Aria by a friend who had stayed there a few months ago. One is never quite sure of recommendations made by friends, but we gave it a 
<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="3"><p>shot. It is a gem!<br><br>

The staff was overly-accommodating, pleasant, responsive - all the things you would expect (but don't always get) in a high end provider.<br><br>

Our daughter was studying in Prague and she wanted to stay with us a few nights so they made accommodations, at a small fee, to help out. It worked great.<br><br>

Plus the location, just a few minutes from The Charles Bridge, and less than that to a Starbucks (my addiction), and close to the tram, made it perfect.

I HIGHLY recommend The Aria."</p></font>
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
  
  <div class="col-md-1"></div>
  
  
  
  <div class="col-md-4" id="text">
   <font face="times new roman" size="3"><center>
  
  <h4 style="color:CC9933">"AS GOOD AS IT GETS..."</h4><br><br>
  
  For those of us who travel extensively on business (and occasionally for pleasure), it's always the details that defines a hotel. Simply put; this hotel is a clinic for how things should be done.
<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="3"><p>Yes, it is a beautiful hotel, yes it is extremely well maintained and immaculate, yes the food and beverages are Tier 1. As I mentioned above, it's the details... From the large, perfect bath towels, excellent water pressure and fast wireless internet (almost impossible to find these days...) to the two-ply toilet paper, this is as good as it gets.
<br><br>
The people at the front desk remembered my name when I passed by; there are people at my office who don't know my name...
<br><br>
I hosted a lunch for 8 at this hotel (special occasion). In short...food, beverage and service was simply outstanding.
<br><br>
Honestly, I hesitated to write this review because I did not want this hotel to be overrun with reservations so it would not be difficult to reserve this hotel on short notice in the future. So tell only who you must; staying anywhere else in Prague is simply a mistake; anywhere else will be a "step down"." </p></font>
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
 
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>














<div>
  <div class="col-md-2"></div>
  
  
  <div class="col-md-4" id="text">
  <font face="times new roman" size="4"><center>
  
  <h4 style="color:CC9933">"LOVELY AND SPECIAL"</h4><br><br>
  
"The Aria is a gem hidden near the American Embassy with a musical theme. We loved it. The staff was attentive , the breakfasts were delicious and the space is decorated in an open, airy fashion. Our room was a <center> 

<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="3"><p>comfortable size and our kids stayed in a room next door. The hotel is not huge but not tiny and we were very happy there."

</p></font>
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
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  
  
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