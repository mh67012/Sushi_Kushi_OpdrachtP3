<?php
$host    = 'db'; 
$username  = 'user'; 
$password  = 'password'; 
$dbname   = 'mydatabase'; 


try {
     $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$sql = 'SELECT name FROM menu_items';
$stmt = $conn->query($sql);

$names = array();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
     $names[] = $row['name'];
}
?>