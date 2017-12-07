<html>
<head>
  <title>Registration</title>
  <style>
  div.container {
      text-align: center;
      width: 100%;
      margin: 0px auto;
      background: white;
      border: 5px solid gray;
  }
  header, footer {
      padding: 1em;
      color: white;
      background-color: black;
      clear: left;
      text-align: center;
  }
</style>
</head>
<body>
  <div class = "container">
    <header>
      <h1>Register</h1>
    </header>
    <table align=center>
      <form method=post action="register.php">
        <tr>
          <td>First Name :
          <td><input type="text" name="firstname">
        <tr>
          <td>Surname :
          <td><input type="text" name="surname">
        <tr>
          <td>Email :
          <td><input type="text" name="email">
        <tr>
          <td>Password :
          <td><input type="password" name="password_1">
        <tr>
          <td>Confirm Password :
          <td><input type="password" name="password_2">
        </table>
    <footer><center>copyright information</center>
    </footer>
  </div>
</body>
</html>
