<?php
?>

<head>
  <link rel="stylesheet" href="test_style.css">
</head>
<header class="header">
  <div class="header-menu">
    <img src="images/hamburger.png" class="menu-button">
  </div>
  <h1 class="header-title">Halifax Canoe and Kayak</h1>
  <h4>
    <?php
    if (isset($_SESSION["current_user"])) {
      echo $_SESSION["current_user"];
    }
    ?>
  </h4>
  <div class="logout">
    <form method="POST" action="logout.php">
      <button type="submit" name="logout">Logout</button>
    </form>
  </div>
  <div class="header-image">
    <img src="images/paddle-white.png" alt="canoe paddle logo">
  </div>
</header>