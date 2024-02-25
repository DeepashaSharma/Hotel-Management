<?php
$conn=mysql_connect("localhost","root","root" ) or die ("Cannot connect to the database!!!!");

mysql_select_db("hotel",$conn) or die ("Cannot select database!!!!");
?>