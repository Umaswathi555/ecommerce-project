<?php
$servername = "sql112.infinityfree.com";    
$username = "if0_40351958";         
$password = "1xRGrBXj6d";           
$database = "if0_40351958_shopping";  
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
