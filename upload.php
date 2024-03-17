<?php
include "authguard.php";

/*print_r($_FILES["pdtimg"]["name"]);

print_r($_FILES["pdtimg"]["tmp_name"]);
print_r($_FILES["pdtimg"]["name"]);
*/

$impath = "../shared/images/" . $_FILES["pdtimg"]["name"];
move_uploaded_file($_FILES["pdtimg"]["tmp_name"], $impath);

include_once "../shared/connection.php";

$name = $_POST["name"];
$price = $_POST["price"];
$details = $_POST["details"];
$userid = $_SESSION["userid"];

echo "$name, $price, $details, $userid";

$status = $conn->query("INSERT INTO product(name, price, details, impath, uploaded_by) VALUES ('$name', $price, '$details', '$impath', '$userid')");

if ($status) {
    echo "Product uploaded Successfully";
} else {
    echo "Failed to upload product: " . mysqli_error($conn);
}





//print_r($_FILES["pdtimg"]["name"]);

/*print_r($_FILES["pdtimg"]["tmp_name"]);
print_r($_FILES["pdtimg"]["name"]);*/ ?>