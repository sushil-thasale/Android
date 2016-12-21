<?php
 $con=mysql_connect("localhost","root","");
 
 if(!$con)
 die('could not connect: ' .mysql_error());
 
 mysql_select_db("ihb",$con);
 
 
if (isset($_GET["name"])) {
    $name = $_GET['name'];
 
 $result = mysql_query("SELECT * FROM monuments where name='$name' ");
 
 while($row=mysql_fetch_assoc($result)){
 $output[]=$row;
 }
 
 print(json_encode($output));
 }
 mysql_close($con); ?>
