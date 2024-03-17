<?php 

$uname=$_POST['uname'];
$upass2=$_POST['upass2'];
$usertype=$_POST['usertype'];
$upass1=$_POST['upass1'];

if ($upass1== $upass2){
    $upass = $upass1;
}
else{
    echo "passwords dont match";
}

$conn=new mysqli("localhost","harshali","123456","harshweb",3306);
if($conn-> connect_error)
{
    echo" connection failed";
exit;
}
$result= mysqli_query($conn,"select * from user where username ='$uname'");

if (mysqli_num_rows($result)>0){
    echo "username already exists";
    exit;
}


$status=mysqli_query($conn,"insert into user(username,password,usertype) values('$uname','$upass','$usertype')");

if ($status){
    echo "user sign up succes";
}
else{
    echo"signup failed";
    echo mysqli_error($conn);
}
?>
