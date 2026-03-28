<?php
require_once __DIR__ . '/../conn.php';

function updateMenuItem($id, $name, $description, $price, $image) {
    global $conn;

    try {
        $sql = "UPDATE menu_items SET name = ?, description = ?, price = ?, image = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name, $description, $price, $image, $id]);
        return true;

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
?>