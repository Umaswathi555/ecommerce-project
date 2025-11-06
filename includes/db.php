<?php
$servername = "sql112.infinityfree.com";     // from InfinityFree (MySQL Hostname)
$username = "if0_40351958";          // from InfinityFree (MySQL Username)
$password = "Sgua@1043";           // your MySQL password
$database = "if0_40351958_ecommerce";   // from InfinityFree (Database Name)

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
