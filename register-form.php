<?php include('server.php');
     ?>
     <html lang="en">
     <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
       </script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
       </script>
       <style>
       footer {
         background-color: #555;
         color: white;
         padding: 15px;
         text-align: center;
       }
       .link{

         font-size: 16;
       }
       .sidenav {
           background-color: #f1f1f1;
           height: 100%;
         }
         .jumbotron{

         }
       </style>
</head>
<body>
  <div class="jumbotron">
    <div class="container">
        <p>

          <h1 align=center>
            <div class="link text-left">
              <a href="homepage.php"><-- Back to Homepage</a>
            </div>
          Athena
          </h1>
        </p>
        <p align=center>Bookshelf IITR Online Portal</p>
    </div>
  </div>
    <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav">
      </div>
      <div class="col-sm-6">
        <div class="page-header">
          <h2 align=center>Register</h2>
        </div>

      <form method="post" action="register-form.php" class="form-horizontal">

      <?php include('errors.php'); ?>

        <div class="form-group">
          <label class="col-sm-2 control-label">First Name : </label>
          <input type="text" name="firstname" class="col-sm-4 form-control">
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
    </div>
    <div class="col-sm-3 sidenav">

    </div>
  </div>
  <footer class="container-fluid">
    <p>Copyright information</p>
  </footer>

</body>
</html>
