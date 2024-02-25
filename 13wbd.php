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
100%{left:80%; top:1100px}
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
  <div id="one" class="col-md-8"><font size=6px face="times-new-roman"><center>TERMS OF SERVICES AND PRIVACY POLICY</center></font></div><br><br><br><br><br><br>
 </div>
  <br><br>
 
<div>
  <div class="col-md-2"></div>
  
  
  <div class="col-md-4" id="text">
  <font face="times new roman" size="3"><center>
  
  <h4 style="color:CC9933">WHY BOOK ONLINE</h4><br><br>

There are a wealth of reasons why booking on our web
site is the easiest and most efficient way to book your stay.<br><br>

<h4 style="color:CC9933">BEST RATE PROMISE</h4>
<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="3"><p>We offer the lowest price online and guarantee it, with our Best Rate Promise.<br><br>
  
<h4 style="color:CC9933">A WEALTH OF INFORMATION</h4><br><br>

Our web site is the best place to find information about our hotels as well as tips for what to do and see when you stay with us. <br><br>

<h4 style="color:CC9933">NO HIDDEN FEES</h4><br><br>

You can rest assured that Aria Hotel Prague never charges any booking fees. We're also completely transparent about all charges so you know exactly what your total hotel stay will cost when you book. <br><br>

<h4 style="color:CC9933">WELCOME AMENITY</h4><br><br>

Book directly and receive an amenity of your choice. The more often you come, the better it gets.<br><br>
 
<h4 style="color:CC9933">SEAMLESS CUSTOMER SERVICE</h4><br><br>

When you reserve a stay through our web site, our colleagues are on-call to answer any questions about your reservation, and to make any necessary changes.<br><br>

<h4 style="color:CC9933">PERSONALISED EXPERIENCE</h4><br><br>

Building an online guest profile allows us to get to know you better so that we can ensure a perfect trip customized to your personal needs and past experiences. Moreover, your profile saves past stays, making rebooking simple. <br><br>

<h4 style="color:CC9933">LOYAL ADVANTAGE</h4><br><br>

We can keep better track of our guests when they book on our web site. And, to extend our gratitude to returning customers, we offer them preferred rooms.<br><br> 

<h4 style="color:CC9933">SECURE TRANSACTIONS</h4><br><br>

Our web site operates under the highest security standards possible, so you can have peace-of-mind when you book here.<br><br>

<h4 style="color:CC9933">EXCLUSIVE OFFERS</h4><br><br>

Our hotel offers unique and special packages - as well as discounted spa treatments and more - available only through our web site. <br><br>

<h4 style="color:CC9933">HASSLE-FREE CANCELLATIONS</h4><br><br>

Should you need to cancel a reservation, you can do so quickly and easily directly on the web site.</p></font>
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
  
  <h4 style="color:CC9933">BEST RATE PROMISE</h4><br><br>
  
  <h4 style="color:CC9933">OUR GUARANTEE</h4><br><br>
 

At Aria Hotel Prague, we promise that the prices offered on our web site will be the best available anywhere or we'll  
<center> 
<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="3"><p>more than match the competition. Should you find a lower
  rate for one of our hotels anywhere online after booking with us, we will match it and give you a further 10% discount. </p></font>
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
  
  <h4 style="color:CC9933">TERMS AND SERVICES AND PRIVACY POLICY</h4><br><br>
  
 <h4 style="color:CC9933">1. TERMS</h4><br><br>

By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all 
<center> 

<button class="accordion">SEE MORE</button>
<div class="panel">
  <font face="times new roman" size="3"><p>applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are protected by applicable copyright and trade mark law.<br><br>

<h4 style="color:CC9933"> 2. USE LICENSE</h4><br><br>

Permission is granted to temporarily download one copy of the materials (information or software) on Aria Hotel's web site for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:<br><br>


   * modify or copy the materials;<br>
   * use the materials for any commercial purpose, or for any public display (commercial or non-commercial);<br>
   * attempt to decompile or reverse engineer any software contained on Aria Hotel's web site;<br>
   * remove any copyright or other proprietary notations from the materials; or<br>
   * transfer the materials to another person or "mirror" the materials on any other server.<br><br>

This license shall automatically terminate if you violate any of these restrictions and may be terminated by Aria Hotel at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.<br><br>

<h4 style="color:CC9933">3. DISCLAIMER</h4><br><br>

The materials on Aria Hotel's web site are provided "as is". Aria Hotel makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, Aria Hotel does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.<br><br>

<h4 style="color:CC9933">4. LIMITATIONS</h4><br><br>

In no event shall Aria Hotel or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on Aria Hotel's Internet site, even if Aria Hotel or a Aria Hotel authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.<br><br>

<h4 style="color:CC9933">5. REVISIONS AND ERRATA</h4><br><br>

The materials appearing on Aria Hotel's web site could include technical, typographical, or photographic errors. Aria Hotel does not warrant that any of the materials on its web site are accurate, complete, or current. Aria Hotel may make changes to the materials contained on its web site at any time without notice. Aria Hotel does not, however, make any commitment to update the materials.<br><br>

<h4 style="color:CC9933">6. LINKS</h4><br><br>

Aria Hotel has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Aria Hotel of the site. Use of any such linked web site is at the user's own risk.<br><br>

<h4 style="color:CC9933">7. SITE TERMS OF USE MODIFICATIONS</h4><br><br>

Aria Hotel may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.<br><br>

<h4 style="color:CC9933">8. GOVERNING LAW</h4><br><br>

Any claim relating to Aria Hotel's web site shall be governed by the laws of the State of Czech Republic without regard to its conflict of law provisions.
General Terms and Conditions applicable to Use of a Web Site.<br><br>

<h4 style="color:CC9933">PRIVACY POLICY</h4><br><br>

Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.<br><br>
    * Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.<br>
    We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.<br>
    We will only retain personal information as long as necessary for the fulfillment of those purposes.<br>
    We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.<br>
    Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.<br>
    We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.<br>
    We will make readily available to customers information about our policies and practices relating to the management of personal information.<br>
    We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained.<br>

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