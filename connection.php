<?php

$conn=new mysqli("localhost","root","","harshweb");
if($conn->connect_error){
    echo "Connection Failed";
    exit;
}


?>