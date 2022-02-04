<?php 
//================ Set Database Info Here ======================\\
$dbServername = "";
$dbUsername = "";
$dbPassword = "";
$dbName = "";
//==============================================================\\

$conn = mysqli_connect ($dbServername,$dbUsername,$dbPassword,$dbName);
if ($conn->connect_errno) {
    echo "Error: " . $conn->connect_error;
}