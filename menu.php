<?php
require_once 'dbcalls/conn.php';

// Haal menu items op uit de database
  $sql = "SELECT * FROM menu_items";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SushiKushi | Menu</title>
  <link rel="stylesheet" href="css/style.css">
</head>


<body class="menu-page">

<header>

    <div class="left-side">
        <a href="index.php">
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
    

       <a href="wagen.php"><img src="img/wagen.png" class="wagen-icon" alt="wagen"></a>

</div>



</header>

  <main class="menu-main">

    <section class="menu-hero">
      <div class="menu-inner">
        <div class="menu-topline">
          <div class="menu-titlewrap">
            <h1 class="menu-title">Menu</h1>
            <p class="menu-subtitle">Ervaar de kunst van handgemaakte sushi</p>
          </div>

          <div class="menu-total" aria-label="Totaal">
            <span class="menu-total-label">Totaal</span>
            <span class="menu-total-amount">€0,00</span>
          </div>
        </div>
      </div>
    </section>

    <section class="menu-section">
      <div class="menu-inner">
        <div class="menu-panel">
          <h2 class="menu-heading">Set Menu’s</h2>

      <div class="menu-grid">
        <?php foreach ($menuItems as $item): ?>
          <?php if ($item['category'] == 'set_menu'): ?>
            <article class="menu-card">
            <div class="menu-icon" aria-hidden="true">🍱</div>
            <h3 class="menu-name"><?php echo $item['name']; ?></h3>
            <p class="menu-price">€<?php echo $item['price']; ?></p>
            </article>
          <?php endif; ?>
        <?php endforeach; ?>
       </div>

    </section>

    <section class="menu-section">
        <div class="menu-inner">
        <div class="menu-panel">
          <h2 class="menu-heading menu-heading-italic">Losse Handrolls</h2>
        
    <div class="menu-grid">

      <?php foreach ($menuItems as $item): ?>
        <?php if ($item['category'] == 'losse_handrolls'): ?>
        <article class="menu-card">
         <div class="menu-icon" aria-hidden="true">
            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" style="width: 80px; height: 80px; object-fit: cover;">
         </div>
            <h3 class="menu-name"><?php echo $item['name']; ?></h3>
             <p class="menu-price">€<?php echo $item['price']; ?></p>
        </article>
          <?php endif; ?>
          <?php endforeach; ?>
       </div>
      </div>

    </section>

  </main>

 <!-- FOOTER -->

  <footer>

    <div class="border-footer">
      <div class="left-side-footer">
        <p class="copyright">@Copyright 2026 <br>
          <span class="text-copyright"> All rights reserved</span>
        </p>

        <div class="legal-links">
          <a href="terms.html">Terms & Conditions</a>
          <span class="separator">|</span>
          <a href="privacy.html">Privacy Policy</a>
        </div>
      </div>

      <div class="right-side-footer">
        <div>
          <a href="https://" target="_blank">
            <img src="img/github.svg" alt="GitHub">
          </a>
        </div>

        <div>
          <a href="https://" target="_blank">
            <img src="img/x.svg" alt="X">
          </a>
        </div>

        <div>
          <a href="https://youtube.com" target="_blank">
            <img src="img/youtube.svg" alt="YouTube">
          </a>
        </div>

        <div>
          <a href="https://instagram.com" target="_blank">
            <img src="img/instagram.svg" alt="Instagram">
          </a>
        </div>

        <div>
          <a href="" class="mail-href">
            <img src="img/mail.svg" alt="Mail">
          </a>
        </div>
      </div>
    </div>

  </footer>

</body>
</html>