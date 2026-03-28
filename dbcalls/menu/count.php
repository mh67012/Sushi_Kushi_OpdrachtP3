<?php
require_once __DIR__ . '/../conn.php';

function countMenuItems() {
    global $conn;

    $sql = "SELECT COUNT(*) FROM menu_items";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchColumn();
}
?>