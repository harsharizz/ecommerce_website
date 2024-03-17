<?php
include "authguard.php";
include "menu.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: blueviolet;">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form action="upload.php" class="w-50 bg-warning p-4" method="POST" enctype="multipart/form-data">
            <h4 class="text-center">Upload Product</h4>
            <div class="mb-3">
                <input class="form-control" type="text" name="name" placeholder="Product Name" required>
            </div>
            <div class="mb-3">
                <input class="form-control" type="number" name="price" placeholder="Product Price" required>
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="details" placeholder="Product Description" cols="30" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <input class="form-control" type="file" name="pdtimg" accept=".jpg, .png" required>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-danger" type="submit">Upload</button>
            </div>
        </form>
    </div>
</body>
</html>
