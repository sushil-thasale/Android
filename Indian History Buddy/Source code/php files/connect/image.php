<?php


if (isset($_POST['image']) && isset($_POST['cmd']) ) {
    
$base=$_REQUEST['image'];
$name=$_REQUEST['cmd'];


    require_once __DIR__ . '/db_connect.php';

    // connecting to db
    $db = new DB_CONNECT();





// base64 encoded utf-8 string
$binary=base64_decode($base);
// binary, utf-8 bytes
header('Content-Type: bitmap; charset=utf-8');
// print($binary);
//$theFile = base64_decode($image_data);

$file = fopen($name, 'wb');
fwrite($file, $binary);
fclose($file);
//move_uploaded_file($target_path.$name,$file);

    $result = mysql_query("INSERT INTO imagedata(name,image) VALUES('$name','$binary')");


?>
