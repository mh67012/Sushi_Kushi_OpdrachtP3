<?php
require_once __DIR__ . '/../conn.php';

function countBerichtItems() {
    global $conn;

    $sql = "SELECT COUNT(*) FROM contact_berichten";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $totalBerichtItems = $stmt->fetchColumn();
    return $totalBerichtItems;
}
?>