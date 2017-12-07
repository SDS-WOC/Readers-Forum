<html>
<head>
  <title>Registration</title>
  <style>
  div.container {
      width: 100%;
      border: 5px solid gray;
  }

  header, footer {
      padding: 1em;
      color: white;
      background-color: black;
      clear: left;
      text-align: center;
  }
  nav {
      float: right;
      max-width: 150px;
      margin: 30;
      padding: 1em;
  }
  article {
      margin-right: 20px;
      margin-left: 190px;
      padding: 1em;
      overflow: hidden;
      text-align: left;
  }

</style>
</head>
<body>
  <div class = "container">
    <header>
      <h1>Register</h1>
    </header>
    <nav>
      <form method=post action="register.php">
        <input type="text" name="firstname">
        <input type="text" name="surname">
        <input type="text" name="email">
        <input type="password" name="password_1">
       <input type="password" name="password_2">
    </nav>
    <article>
        <p>First Name
        <br>
        Surname
        <br>
        Email
        <br>
        Password
        <br>
        Confirm Password
    </article>

    <footer><center>copyright information</center>
    </footer>
  </div>
</body>
</html>
