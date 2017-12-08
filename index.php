<?php include('server.php'); ?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Athena</title>
  </head>
  <body>

    <div class="header">
      <header>
      <h1>Catalogue </h1>
      </header>
    </div>

    <div class="container">
      <?php if (isset($_SESSION['SUCCESS'])): ?>
        <div class="error success">
          <h3>
            <?php echo $_SESSION['success'];
                  unset($_SESSION['success']);
              ?>
          </h3>
    <?php endif ?>
    <?php if (isset($_SESSION["email"])): ?>
        <p> Welcome <b><?php echo $_SESSION['firstname']; ?> </b></p>
        <a href="index.php?logout?='1'">Logout</a></p>
    <?php endif ?>
  </div>
    <div class="footer">
      <footer><center>copyright information</center></footer>

    </div>

</body>
</html>
