<?php include('server.php');
     ?>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class = "container">
    <header>
      <p align=left><a href="homepage.php">Back to Homepage</a></p>
      <h1>Register</h1>
    </header>
      <form method="post" action="register-form.php">

      <?php include('errors.php'); ?>

        <div class="input-group">
          <label>First Name : </label>
          <input type="text" name="firstname" >
        </div>
        <div class="input-group">
          <label>Surame : </label>
          <input type="text" name="surname" >
        </div>
        <div class="input-group">
          <label>Email :</label>
          <input type="text" name="email" >
        </div>
        <div class="input-group">
          <label>Password :</label>
          <input type="password" name="password_1">
        </div>
        <div class="input-group">
          <label>Confirm Password :</label>
          <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
          Already a member? <a href="homepage.php">Sign in</a>
      </form>
    <footer><center>copyright information</center>
    </footer>
  </div>
</body>
</html>