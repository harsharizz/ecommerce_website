<?php

session_start();

if(!isset($_SESSION['login_status'])){
    echo "Login First, Unauthorised Attempt";
    exit;
}
if($_SESSION['login_status']==false){
    echo "Failed Login Attempt,Illegal Access";
    exit;
}
if($_SESSION['usertype']!='vendor'){
    echo "Unauthorized to access this resource";
    exit;
}


?>