<?php
require 'dbcalls/conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bericht = $_POST['message'];

    // Database verbinding maken

    $sql = "INSERT INTO contact_berichten (name, email, bericht) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $email, $bericht]);

    // Redirect of geef een succesbericht weer
    header('Location: contact.php?success=1');
    exit();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SushiKushi | Contact</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body class="contact-page">

<header>

    <div class="left-side">
        <a href="index.html">
            <img class="logo" src="img/sushikushi.png" alt="logo">
        </a>
    </div>

    <nav class="nav-buttons" id="nav-menu">
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="galerie.php">Galerie</a>
        <a href="contact.php">Contact</a>
    </nav>

   
  <div class="right-side">
  <img src="img/sushi.png" class="sushi-logo-right" alt="sushi">

  <div class="right-icons">
     
        <a href="login.php"><img src="img/loginuser.png" class="icon" alt="login"></a>
    

       <a href="wagen.html"><img src="img/wagen.png" class="wagen-icon" alt="wagen"></a>

</div>



</header>

<main class="contact-main">
    <section>

        <div class="contact-border padding-section">
        
    
            <form id="contactForm" method="POST" action="contact.php">
                <div class="form-group">
                    <input type="text" id="name" name="name" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <input type="text" id="email" name="email" placeholder="Email" required>

                <div class="form-group">
                    <textarea id="message" name="message" placeholder="Message" required></textarea>
                </div>

                <button type="submit" class="form-button">
                    Send
                </button>
            </form>
        </div>
            
    </section>

     <!-- style css voor form in contactpage -->
    <style>

.contact-border {
    display: flex;
    justify-self: center;
    border: 1px solid #a82828;
    padding: 40px 20px;
    border-radius: 8px;
    width: 600px;
}
 
form {
    width: 280px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}
 
.form-group {
    gap: 20px;
    display: flex;
    flex-direction: column;
}
 
input[type="text"],
textarea {
    background: #1a0d0f;
    border: 1px solid #8b1a1a;
    color: #f5e6d3;
    padding: 10px;
    font-size: 14px;
    border-radius: 4px;
    font-family: Arial, sans-serif;
}
 
input[type="text"]:focus,
textarea:focus {
    outline: none;
    border-color: #d4af37;
    background: #2a1215;
}
 
textarea {
    resize: vertical;
    min-height: 120px;
}
 
.form-button {
    background: #a82828;
    color: #f5e6d3;
    border: 1px solid #d4af37;
    padding: 10px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 4px;
    transition: all 0.3s ease;
}
 
.form-button:hover {
    background: #8b1a1a;
    box-shadow: 0 0 10px rgba(212, 175, 55, 0.3);
}

 /* main alleen voor contact page */
main {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 30px 20px;
    width: 100%;
}

/* contact main */
</style>


</main>
 <!-- FOOTER -->

 <footer>

    
    <div class="border-footer">
    <div class="left-side-footer">
        <p class="copyright">@Copyright 2026 <br> <span class="text-copyright"> All rights reserved</span> </p>

        <div class="legal-links">
            <a href="terms.html">Terms & Conditions</a>
            <span class="separator">|</span>
            <a href="privacy.html">Privacy Policy</a>
        </div>
    </div>

    <div class="right-side-footer">

        <div>
            <a href="https://" target="_blank">
                <img src="img/_TikTok.svg" alt="Tiktok">
            </a>
        </div>

        <div>
            <a href="https://" target="_blank">
                <img src="img/_WhatsApp.svg" alt="WhatsApp">
            </a>
        </div>

        <div>
            <a href="https://" target="_blank">
                <img src="img/_Facebook.svg" alt="Facebook">
            </a>
        </div>

        <div>
            <a href="https://" target="_blank">
                <img src="img/_Instagram.svg" alt="Instagram">
            </a>
        </div>
    </div>
</div>


</footer> 

</body>

</html>