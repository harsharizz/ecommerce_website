<?php
@session_start();
include "auth.php";
include "dbconnect.php";



$sql = "SELECT * FROM library WHERE Status != 'Available'";
$result = $conn->query($sql);

if ($result) {
    echo "
        <div style='overflow:auto;width:100%;height:587px;'>
        <center>
            <table style='width:95%;'>
                <tr>
                    <th>Book No.</th>
                    <th>Title</th>
                    <th>Author 1</th>
                    <th>Author 2</th>
                    <th>Author 3</th>
                    <th>Edition</th>
                    <th>Publisher</th>
                    <th>Status</th>
                </tr>
                <tbody>
    ";
    while ($row = $result->fetch_assoc()) {
        echo "
            <tr>
                <td>".$row["Book_No"]."</td>
                <td>".$row["Title"]."</td>
                <td>".$row["Author1"]."</td>
                <td>".$row["Author2"]."</td>
                <td>".$row["Author3"]."</td>
                <td>".$row["Edition"]."</td>
                <td>".$row["Publisher"]."</td>
                <td>".$row["Status"]."</td>
            </tr>
        ";
    }
    echo "
            </tbody>
        </table>
    </center>
</div>
";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
