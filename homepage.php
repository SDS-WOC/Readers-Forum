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
      margin-top: 5vh;
      background-color: black;
      height: 70%;
      vertical-align: middle;
      color: #FEF9E7;
      border: solid 1px #FEF9E7;
      border-radius: 3%;

    }
    input[type="text"], input[type="password"] {

      background-color : #FEF9E7;
      color: black;
    }
    .footer {
      margin-top: 90vh;
      text-align: center;
    }
    img{
      vertical-align: bottom;
    }
    .container-fluid{
        background-color: black;
            color: #FEF9E7;
    }
    button{
      background-color : black;
      color: #FEF9E7;
    }

</style>

<title>Athena : Login</title>
</head>
<body bgcolor="black">

  <div class="container-fluid">

     <div class="col-sm-10">

       <div id="myCarousel" class="carousel slide" data-ride="carousel">

         <ol class="carousel-indicators">
           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <li data-target="#myCarousel" data-slide-to="1"></li>
           <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>


         <div class="carousel-inner">
           <div class="item active">
             <img src="images/screen1.jpg" alt="Screen 1">
           </div>

           <div class="item">
             <img src="images/screen2.jpg" alt="Screen 2">
           </div>

           <div class="item">
             <img src="images/screen3.jpg" alt="Screen 3">
           </div>
         </div>


       </div>
       </div>
     <div class="col-sm-2 sidenav align-middle">
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
<div class="footer">
  <p align=center> Copyright Information</p>
</div>
</div>
</body>
</html>
