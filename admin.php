<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}


// Database verbinding mappen
require __DIR__ . '/dbcalls/conn.php';
require_once __DIR__ . '/dbcalls/menu/count.php';
require_once __DIR__ . '/dbcalls/berichten/count.php';
require_once __DIR__ . '/dbcalls/berichten/get_berichten.php';

$totalMenuItems = countMenuItems();
$totalBerichtItems = countBerichtItems();

$sql = "SELECT * FROM menu_items";
$stmt = $conn->prepare($sql);
$stmt->execute();
$menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

//delete menu items

if (isset($_GET['delete_id'])) {
  $id = $_GET['delete_id'];
  $sql = "DELETE FROM menu_items WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id]);
  header('Location: admin.php');
  exit;
}

//delete berichten

if (isset($_GET['delete_bericht'])) {
  $id = $_GET['delete_bericht'];
  $sql = "DELETE FROM contact_berichten WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id]);
  header('Location: admin.php');
  exit;
}

// Nieuw item
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
        <h3><?php echo $totalMenuItems; ?></h3>
      </div>

      <div class="overview-card">
        <span class="overview-label">Klanten</span>
        <h3>0</h3>
      </div>

      <div class="overview-card">
          <span class="overview-label">Recente Bestellingen</span>
          <h3>0</h3>
      </div>

      <div class="overview-card">
          <span class="overview-label">Contact Berichten</span>
          <h3><?php echo $totalBerichtItems; ?></h3>
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
                <td><?php echo $item['category'] ?? 'Niet beschikbaar'; ?></td>
                <td>
              <a href="?delete_id=<?php echo $item['id']; ?>" class="btn-delete" onclick="return confirm('Item verwijderen?')">Verwijder</a>
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
          <th>Email</th>
          <th>berichten</th>
          <th>Optie</th>
        </tr>
        
        <?php foreach ($berichten as $bericht): ?>
        <tr>
          <td><?= $bericht['id'] ?></td>
          <td><?= htmlspecialchars($bericht['name']) ?></td>
          <td><?= htmlspecialchars($bericht['email']) ?></td>
          <td><?= htmlspecialchars($bericht['bericht']) ?></td>
          <td>
              <a href="?delete_bericht=<?= $bericht['id'] ?>" class="btn-delete" 
                  onclick="return confirm('Bericht verwijderen?')">Verwijder</a>
          </td>
        </tr>

        <?php endforeach; ?>

        </table>
      </div>
  </section>

</div>


</main>

<!-- FOOTER -->

<footer>

   

</footer> 

</body>

</html>