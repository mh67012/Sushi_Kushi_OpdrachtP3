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
            </td>
          </form>
        </tr>
      </table>
    </div>

    <div class="card" id="reservations">
      <h2>Reservations</h2>
      <table>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Guests</th>
          <th>Time</th>
          <th>Actions</th>
        </tr>

        <tr>
          <form method="POST" action="process_reservation.php">
            <td><input type="hidden" name="id" value="1"></td>
            <td><input type="text" name="name" value="Van Dijk"></td>
            <td><input type="number" name="guests" value="4"></td>
            <td><input type="text" name="time" value="19:00"></td>
            <td>
              <div class="actions">
                <button class="btn-update" type="submit" name="action" value="update">Update</button>
                <button class="btn-delete" type="submit" name="action" value="delete" onclick="return confirm('Delete this reservation?')">Delete</button>
              </div>
            </td>
          </form>
        </tr>
      </table>
    </div>

    <div class="card" id="staff">
      <h2>Staff</h2>
      <table>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Role</th>
          <th>Actions</th>
        </tr>

        <tr>
          <form method="POST" action="process_staff.php">
            <td><input type="hidden" name="id" value="1"></td>
            <td><input type="text" name="name" value="Hiro"></td>
            <td><input type="text" name="role" value="Head Chef"></td>
            <td>
              <div class="actions">
                <button class="btn-update" type="submit" name="action" value="update">Update</button>
                <button class="btn-delete" type="submit" name="action" value="delete" onclick="return confirm('Delete this staff member?')">Delete</button>
              </div>
            </td>
          </form>
        </tr>
      </table>
    </div>
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