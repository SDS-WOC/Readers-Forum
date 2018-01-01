<?php
session_start();
session_unset();
session_destroy();
?>

<html lang="en">
<head>

  <title>Logged out!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
  <style>
  .container-fluid{
    height:100%;
    width: 100%;
    min-width: 1000px;
    color: #FEF9E7;
    text-align: center;
    background: url('images/screen4.jpg');
    background-size: cover;
  }
  .container-fluid a:hover{
    color: #1A5276;
  }
  .container-fluid a{
    color: #FEF9E7;
    font-size: 20px;
  }
  .header{
    padding: 10px;
  }
  .row-fluid {
    height: 100%;
    vertical-align: middle;
  }
  .box{
    padding-top: 25px;
    padding-bottom: 25px;
    top: 30vh;
    min-width: 400px;
    margin:0 auto;
    border: solid 1px #FEF9E7;
    border-radius: 5px;
    background-color: black;
    opacity: 0.9;
  }
  .left{
    text-align: left;
    padding-left: 2vh;
  }
  button{
    padding: 2vh;
    background-color : black;
    color: #FEF9E7;
    font-size: 22px;
  }
  input[type="text"], input[type="password"] {

    padding: 2vh;
    border: solid 1px #FEF9E7;
    border-radius: 5px;
    background-color : Black;
    color: #FEF9E7;
  }
  footer {
    width: 100%;
    background-color: black;
    color: white;
    text-align: center;
    position: absolute;
    bottom: 0;
  }
  .link{
    font-size: 16;
  }
  .sidenav {
      height: 100%;
    }

  </style>
</head>
<body>
<div class="container-fluid page">
<div class="row content">
 <div class="col-sm-4 sidenav">
 </div>
 <div class="col-sm-4 box">
   <div class="header">
     <h4 align=center>You have logged out successfully.</h2>
   </div>

         <form method="post" action="register-form.php" class="text-center">
              <a href="homepage.php"><span class="glyphicon glyphicon-home"></span></a>
         </form>

</div>
<div class="col-sm-4 sidenav">
</div>
</div>
</div>
<footer>
<p>Copyright information</p>
</footer>

</body>
</html>
