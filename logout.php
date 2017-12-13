<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>

  <title>Logged out!</title>

</head>

<body>
    <div class="input-group">
          <h1>Thanks for stopping by</h1>

          <p><?= 'You have been logged out!'; ?></p>

          <a href="homepage.php"><button class="btn"/>Home</button></a>

    </div>
</body>
</html>
