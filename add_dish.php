<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

require_once 'dbcalls/conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $category = $_POST['category'];
    
    $sql = "INSERT INTO menu_items (name, description, price, image, category) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $description, $price, $image, $category]);
    
    header('Location: admin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Nieuw Gerecht</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background: #1a1a1a;
            color: white;
            padding: 20px;
        }
        
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #2a2a2a;
            padding: 30px;
            border-radius: 8px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        
        form {
            display: grid;
            gap: 15px;
        }
        
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        
        input, textarea {
            width: 100%;
            padding: 10px;
            background: #1a1a1a;
            color: white;
            border: 1px solid #444;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        button, a {
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
        
        button {
            background: #27ae60;
            color: white;
            width: 100%;
        }
        
        button:hover {
            background: #229954;
        }
        
        a {
            background: #555;
            color: white;
            width: 48%;
            margin-top: 10px;
        }
        
        a:hover {
            background: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nieuw Gerecht Toevoegen</h1>
        
        <form method="POST">
            <label>Naam:</label>
            <input type="text" name="name" required>
            
            <label>Beschrijving:</label>
            <textarea name="description"></textarea>
            
            <label>Prijs:</label>
            <input type="number" step="0.01" name="price" required>
            
            <label>Afbeelding:</label>
            <input type="text" name="image">

            <label>Categorie:</label>
                <select name="category" required>
                    <option value="">Kies een categorie...</option>
                    <option value="set_menu">Set Menu's (€24-€36)</option>
                    <option value="losse_handrolls">Losse Handrolls (€7-€14)</option>
                </select>
            
            <button type="submit">Toevoegen</button>
            <a href="admin.php">Terug</a>
        </form>
    </div>
</body>
</html>