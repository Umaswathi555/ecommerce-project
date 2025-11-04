<?php
// Check if Railway environment variables exist
if(getenv('DB_HOST')) {
    $host = getenv('DB_HOST');
    $dbname = getenv('DB_NAME');
    $user = getenv('DB_USER');
    $password = getenv('DB_PASS');
} else {
    // Local XAMPP settings
    $host = 'localhost';
    $dbname = 'ecommerce';
    $user = 'root';
    $password = '';
}

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
