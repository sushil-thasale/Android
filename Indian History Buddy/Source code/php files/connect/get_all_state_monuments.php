<?php
 $con=mysql_connect("localhost","root","");
 
 if(!$con)
 die('could not connect: ' .mysql_error());
 
 mysql_select_db("ihb",$con);
 
 
if (isset($_GET["state"])) {
    $state = $_GET['state'];
 
 $result = mysql_query("SELECT * FROM monuments where state='$state' ");
 
 while($row=mysql_fetch_assoc($result)){
 $output[]=$row;
 }
 
 print(json_encode($output));
 }
 mysql_close($con); ?>
