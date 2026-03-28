<?php 
require_once __DIR__ . '/../conn.php';

function getAllMenu(){
    global $conn;

    $sql = " SELECT * FROM menu_items";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}