<?php

$stmt = $conn->query("SELECT * FROM contact_berichten ORDER BY created_at DESC");
$berichten = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>