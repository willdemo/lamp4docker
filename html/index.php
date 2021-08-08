<?php

$host='db';   //service name from docker compose yml file
$user='devuser';
$password='devpass';
$db='devdb';

$conn=new mysqli($host,$user,$password,$db);

if ($conn->connect_error) {
 echo 'Connection failed'. $conn->connnect_error;
} else {
echo 'connected to mysql !'; 
}


?>
