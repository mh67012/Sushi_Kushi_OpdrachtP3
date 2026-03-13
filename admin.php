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
        <h3>639</h3>
      </div>

      <div class="overview-card">
        <span class="overview-label">Customers</span>
        <h3>693</h3>
      </div>

      <div class="overview-card">
        <span class="overview-label">Recent Orders</span>
        <h3>693</h3>
      </div>

      <div class="overview-card">
        <span class="overview-label">Reserveringen</span>
        <h3>693</h3>
      </div>
    </section>

    <!-- Recente orders-->
    <section class="card admin-section" id="recent-orders">
      <div class="section-head">
        
        <h2>Recent Orders</h2>
      </div>
      <div class="admin-box">
      <table>
        <tr>
          <th>ID</th>
          <th>Klant</th>
          <th>Bestelling</th>
          <th>Status</th>
          <th>Optie</th>
        </tr>

        <tr>
          <td>1</td>
          <td>David</td>
          <td>Dragon Roll</td>
          <td>In behandeling</td>
          <td>
            <div class="actions">
              <button class="btn-update" type="button">Bekijk</button>
              <button class="btn-delete" type="button">Verwijder</button>
            </div>
          </td>
        </tr>

        <tr>
          <td>2</td>
          <td>name</td>
          <td>Spicy Tuna Roll</td>
          <td>Afgerond</td>
          <td>
            <div class="actions">
              <button class="btn-update" type="button">Bekijk</button>
              <button class="btn-delete" type="button">Verwijder</button>
            </div>
          </td>
        </tr>

        <tr>
          <td>3</td>
          <td>name</td>
          <td>Salmon Sashimi</td>
          <td>Klaar</td>
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

        <tr>
          <td>1</td>
          <td>Dragon Roll</td>
          <td>Sushi</td>
          <td>
            <div class="actions">
              <a href="edit_dish.php?id=1" class="btn-update">Aanpassen</a>
              <a href="delete_dish.php?id=1" class="btn-delete">Verwijderen</a>
            </div>
          </td>
        </tr>

        <tr>
          <td>2</td>
          <td>Salmon Sashimi</td>
          <td>Sashimi</td>
          <td>
            <div class="actions">
              <a href="edit_dish.php?id=2" class="btn-update">Aanpassen</a>
              <a href="delete_dish.php?id=2" class="btn-delete">Verwijderen</a>
            </div>
          </td>
        </tr>
      </table>
      </div>
    </section>

    <!-- RESERVATIONS -->
    <section class="card admin-section" id="reservations">
      <div class="section-head">
        <h2>Reservations</h2>
      </div>
    <div class="admin-box">
      <table>
        <tr>
          <th>ID</th>
          <th>Naam</th>
          <th>Gasten</th>
          <th>Tijd</th>
          <th>Optie</th>
        </tr>

        <tr>
          <td>1</td>
          <td>Van Dijk</td>
          <td>4</td>
          <td>19:00</td>
          <td>
            <div class="actions">
              <button class="btn-update" type="button">Update</button>
              <button class="btn-delete" type="button">Delete</button>
            </div>
          </td>
        </tr>

        <tr>
          <td>2</td>
          <td>Bakker</td>
          <td>2</td>
          <td>20:30</td>
          <td>
            <div class="actions">
              <button class="btn-update" type="button">Update</button>
              <button class="btn-delete" type="button">Delete</button>
            </div>
          </td>
        </tr>
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