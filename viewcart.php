<?php
include "authguard.php";
include "menu.html";
?>

<html>
    <head>
        <style>
            .card{
                width:350px;
                height:fit-content;
                background-color:bisque;
                margin:10px;
                display:inline-block;
            }   
            .delete{
                background:maroon;
                width:fit-content;
                position:absolute;
                top:0;
                right:0;
                color:white;                
            }
            .name{
                text-transform:capitalize;
            }        
            .pdtimg{
                width:100%;
                height:300px;
            }
            .add-cart{
                width:24px;
            }
        </style>
    </head>
    <body>

    <script>
        function confirmDelete(cartid){
            res=confirm("Are you sure want to Delete?")
            if(res){
                window.location=`deletecart.php?cartid=${cartid}`;
            }
        }
    </script>
        
    </body>

</html>

<?php


include_once "../shared/connection.php";
$y= $_SESSION["userid"];
$sql_result=mysqli_query($conn,"select * from cart join product on cart.pid=product.pid where cart.userid='$y'");

//<a href='deletecart.php?cartid=$row[cartid]' class='delete btn'>X</a>
$total=0;
while($row=mysqli_fetch_assoc($sql_result)){
  
    $total+=$row["price"];
    echo "<div class='card p-4 '>   
    <button onclick='confirmDelete(".$row["cartid"].")' class='delete btn'>X</button>
    <div class='name display-2'>".$row["name"]."</div>
    <div class='price display-5 text-danger'>Rs.".$row["price"]."</div>
    <img class='pdtimg' src='".$row["impath"]."'>
    <div class='detail'>".$row["detail"]."</div>

    </div>";

}

echo "<div class='bg-secondary display-3'>

    <div class='text-white text-center'>Check Out Price 
    <span class='text-warning'>Rs.$total </span>
    <a href='place_order.php'>
        <button class='btn btn-info p-4'>Place Order</button>
    </a>
    
    </div>

</div>";



?>