<?php

$host = "db";
$username = "user";
$password = "password";
$dbname = "mydatabase";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password,)
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT naan FROM clients";
$stmt = $conn->query($sql);

$namen = array();

while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    $namen[] = $row["naam"];

?>