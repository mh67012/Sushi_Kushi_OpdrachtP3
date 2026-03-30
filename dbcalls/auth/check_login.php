<?php


require_once __DIR__ . '/../conn.php';

function checkLogin($username, $password) {
    global $conn;
    
    $sql = "SELECT id, username, email, password FROM gebruikers WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user && $password = $user['password']) {
        return [
            'success' => true,
            'id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email']
        ];
    }
    
    return ['success' => false, 'message' => 'Fout username of password'];
}
?>