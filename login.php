<?php
// login.php

session_start();

$error = '';

// Form verzending checken
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Cechk velen
    if (empty($username) || empty($password)) {
        $error = 'Vul beide velden in';
    } else {
        // Laad de check_login
        require_once 'dbcalls/auth/check_login.php';
        
        //Inloggen verab voor check
        $result = checkLogin($username, $password);
        
        
        if ($result['success']) {
    
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['email'] = $result['email'];
            
            // Redirect naar admin.php
            header('Location: admin.php');
            exit;
        } else {
            $error = $result['message'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Inloggen</title>

</head>
<body class="login-page">    
    <style> .login-page { background: url('img/login-sushi-background.png') no-repeat center center fixed; background-size: cover; }</style>
    <div class="login-box">

        <style>
            .ck-login-logo {
                display: flex;
                align-items: center;
                gap: 240px;
                margin-bottom: 20px;
            }
            
            .ck-login-logo img {
                width: 75px;
                height: 75px;
    
            }
            
            .ck-login-logo h4 {
                color: #333;
            }
        </style>

        <div class="ck-login-logo">
            <img src="img/sushikushi.png" alt="logo">
            <h4>Inloggen</h4>
        </div>
        
        <?php if ($error): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        
        <form method="POST">
            <div class="form-group">
                <label for="username">Gebruikersnaam:</label>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    required
                >
            </div>
            
            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required
                >
            </div>
            
            <button type="submit">Inloggen</button>
        </form>
        
        <p style="text-align: center; margin-top: 15px; font-size: 12px;">
            SushiKushi®
        </p>
    </div>
</body>
</html>

<style>

    body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
           
        }
        
        .login-box {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }
        
        input:focus {
            outline: none;
            border-color: #571a04;
        }
        
        button {
            width: 100%;
            padding: 10px;
            background: crimson;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        
        button:hover {
            background: #a33b3b;
        }
        
        .error {
            color: red;
            background: #ffebee;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }

</style>