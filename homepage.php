<?php include('server.php'); ?>
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
  .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      text-align: center;
    }
    .jumbotron {
        margin-bottom: 0;
      }
</style>

<title>Athena : Login</title>
</head>
<body>

  <div class="jumbotron">
    <div class="container text-center">
      <h1>Athena</h1>
      <p>Bookshelf IITR Online Portal</p>
    </div>
  </div>
  <div class="container-fluid">
   <div class="modal-body row">

     <div class="col-sm-10">

       <div id="myCarousel" class="carousel slide" data-ride="carousel">

         <ol class="carousel-indicators">
           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <li data-target="#myCarousel" data-slide-to="1"></li>
           <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>


         <div class="carousel-inner">
           <div class="item active">
             <img src="screen_1.png" alt="Los Angeles">
           </div>

           <div class="item">
             <img src="screen_1.png" alt="Chicago">
           </div>

           <div class="item">
             <img src="screen_1.png" alt="New York">
           </div>
         </div>

         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>
       </div>

     <div class="col-sm-2 sidenav">

  <h2> Login</h2>
  <form method="post" action="homepage.php">

    <?php include('errors.php'); ?>

    <label>Email ID</label>
      <input type ="text" name="email">

    <br><br>

      <label>Password</label>
      <input type ="password" name="password">

    <br><br>
      <button type="submit" name="login">Login</button>
  </form>
  Not yet a member? <a href="register-form.php">Register here</a>
</div>

</div>
<footer class="container-fluid">
  <p>Copyright information</p>
</footer>



</body>
</html>
