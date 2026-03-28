<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

require_once 'dbcalls/conn.php';

// Haal menu items op
$sql = "SELECT * FROM menu_items";
$stmt = $conn->prepare($sql);
$stmt->execute();
$menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
//delete
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM menu_items WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    header('Location: admin.php');  // ← ADMIN niet GALERIE!
    exit;
}
// Nieuw item
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    
    $sql = "INSERT INTO menu_items (name, description, price, image) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $description, $price, $image]);
    
    header('Location: admin.php');
    exit;
}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SushiKushi | Galerie</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body class="galerie-page">

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
     
        <a href="login.html"><img src="img/loginuser.png" class="icon" alt="login"></a>

        <a href="wagen.html"><img src="img/wagen.png" class="wagen-icon" alt="wagen"></a>

</div>



</header>

<main class="admin-page">
  
  <div class="container">
  

    <!--Overlay -->
    <section class="admin-overview">
      <div class="overview-card">
        <span class="overview-label">Gerechten</span>
        <h3>0</h3>
      </div>

      <div class="overview-card">
        <span class="overview-label">Klanten</span>
        <h3>0</h3>
      </div>

      <div class="overview-card">
          <span class="overview-label">Recente Bestellingen</span>
          <h3>0</h3>
      </div>

    </section>

    <!-- Recente orders-->


    </section>

    <!-- Klanten -->
    <section class="card admin-section" id="customers">
      <div class="section-head">
        <h2>Klanten</h2>
      </div>
      <div class="admin-box">
      <table>
        <tr>
          <th>ID</th>
          <th>Naam</th>
          <th>Email</th>
          <th>Optie</th>
        </tr>

        <tr>
          <td>1</td>
          <td>fon ton</td>
          <td>don@email.com</td>
          <td>
            <div class="actions">
              <button class="btn-update" type="button">Bekijk</button>
              <button class="btn-delete" type="button">Verwijder</button>
            </div>
          </td>
        </tr>

        <tr>
          <td>2</td>
          <td>sii</td>
          <td>sii@email.com</td>
          <td>
            <div class="actions">
              <button class="btn-update" type="button">Bekijk</button>
              <button class="btn-delete" type="button">Verwijder</button>
            </div>
          </td>
        </tr>
      </table>
      </div>
    </section>

    <!-- MENU BEHEER -->
    <section class="card admin-section" id="menu-management">
      <div class="section-head">
        <h2>Menu Beheer</h2>
        <a href="add_dish.php" class="btn-update">Nieuw gerecht</a>
      </div>

      <div class="admin-box">
      <table>
        <tr>
          <th>ID</th>
          <th>Gerecht</th>
          <th>Categorie</th>
          <th>Optie</th>
        </tr>

        
        <?php foreach ($menuItems as $item): ?>
        <tr>
          <td><?php echo $item['id']; ?></td>
          <td><?php echo $item['name']; ?></td>
          <td><?php echo $item['description'] ?? '-'; ?></td>
          <td>
          <a href="?delete_id=<?php echo $item['id']; ?>" class="btn-delete" onclick="return confirm('Zeker?')">Verwijderen</a>
          </td>
          </tr>
          <?php endforeach; ?>
      </table>
      </div>
    </section>

    <!-- CONTACT BERICHTEN -->
    <section class="card admin-section" id="messages">
      <div class="section-head">
        <h2>Contact Berichten</h2>
      </div>
      <div class="admin-box">
      <table>
        <tr>
          <th>ID</th>
          <th>Naam</th>
          <th>Onderwerp</th>
          <th>Optie</th>
        </tr>

        <tr>
          <td>1</td>
          <td>Emma</td>
          <td>Vraag over reservering</td>
          <td>
            <div class="actions">
              <button class="btn-update" type="button">Lezen</button>
              <button class="btn-delete" type="button">Verwijder</button>
            </div>
          </td>
        </tr>

        <tr>
          <td>2</td>
          <td>Mo</td>
          <td>Allergieën menu</td>
          <td>
            <div class="actions">
              <button class="btn-update" type="button">Lezen</button>
              <button class="btn-delete" type="button">Verwijder</button>
            </div>
          </td>
        </tr>
      </table>
      </div>
    </section>

  </div>


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
                <img src="img/github.svg" alt="Insta">
            </a>
        </div>

        <div>
            <a href="https://   " target="_blank">
                <img src="img/x.svg" alt="x">
            </a>
        </div>

        <div>
            <a href="https://youtube.com" target="_blank">
                <img src="img/youtube.svg" alt="yt">
            </a>
        </div>

        <div>
            <a href="https://instagram.com" target="_blank">
                <img src="img/instagram.svg" alt="insta">
            </a>
        </div>

        <div>
            <a href="mailto:1212789@student.roc-nijmegen.nl" class="mail-href">
                <img src="img/mail.svg" alt="mail">
            </a>
        </div>
    </div>
</div>


</footer> 

</body>

</html>