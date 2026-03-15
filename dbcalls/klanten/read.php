<?php

require_once __DIR__ . '/../conn.php';

$sql = "SELECT naam FROM clients";
$stmt = $conn->query($sql);

$namen = [];

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $namen[] = $row['naam'];
}