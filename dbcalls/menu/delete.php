<?php

require_once __DIR__ . '/../conn.php';

function deleteMenuItem($id) {
    global $conn;
try {
    $sql = "DELETE FROM menu_items WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    return true;
}catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

?>