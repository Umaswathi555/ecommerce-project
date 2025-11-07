<?php
$servername = "sql112.infinityfree.com";    
$username = "if0_40351958";         
$password = "Sgua@1043";           
$database = "if0_40351958_ecommerce";  
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
