<?php include('server.php');
      include('errors.php');


?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Athena</title>
  </head>
  <body>

    <div class="header">
      <header>
      <h1 align="left">Catalogue </h1>
      </header>
    </div>

    <div class="container">
      <?php if (isset($_SESSION['success'])): ?>
        <div class="success">
          <h3>
            <?php echo $_SESSION['success'];
                  unset($_SESSION['success']);
              ?>
          </h3>
        </div>

        <p> Welcome <b><?php echo $_SESSION['firstname']; ?> </b></p>
        <p><a href="logout.php">Logout</a></p>

    <?php endif ?>
  </div>
    <div class="footer">
      <footer><center>copyright information</center></footer>

    </div>

</body>
</html>
