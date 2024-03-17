<?php
session_start();
$_SESSION['login_status']=false;

$uname = $_POST['uname'];
$upass = $_POST['upass'];



$conn = mysqli_connect("localhost", "root", "", "harshweb");



$sql_result = mysqli_query($conn, "SELECT * FROM user WHERE username='$uname' AND password='$upass'");

if(!$sql_result) {echo $conn->error;
exit;}

if (mysqli_num_rows($sql_result) == 0) {
    echo "Invalid credentials";
    }
    echo "<h1>Login successful</h1>";

$row = mysqli_fetch_assoc($sql_result);
/*while($row = mysqli_fetch_assoc($sql_result)){
    $row;
}*/


$_SESSION['login_status']= true;
$_SESSION['usertype']=$row['usertype'];
$_SESSION['userid']=$row['userid'];

if (isset($row['usertype'])) {
    if ($row['usertype'] == "vendor") {
        
        header("location:/ecommerce/vendor/home.php");
    } elseif ($row['usertype'] == "client") {

        header("location:/ecommerce/client/home.php");
    }
} else {
    echo "Invalid user type";
}

mysqli_close($conn);
?>
