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
         color: red;
       }
       .row-fluid {
         height: 100%;
         vertical-align: middle;
       }
       .box{
         position: fixed;
         top: 8vh;
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
        <div class="page-header">
          <h2 align=center>Register</h2>
        </div>

      <form method="post" action="register-form.php" class="form-horizontal">

      <?php include('errors.php'); ?>
      <div class="form-group row">
          <input type="text" name="firstname" placeholder="First Name" style="width:31vh" value="<?php if(isset($_POST['register'])){ echo $_POST['firstname'];}?>">
          <input type="text" name="surname" placeholder="Surname" style="width:31vh" value="<?php if(isset($_POST['register'])){ echo $_POST['surname'];}?>">
        </div>
        <div class="form-group row">
          <input type="text" name="email" placeholder="Email" style="width:62vh" value="<?php if(isset($_POST['register'])){ echo $_POST['email'];}?>">
        </div>
        <div class="form-group row text-left">
          <div class="col-sm-6">
          <input type="radio" name="gender" value="M" style="width:4vh">Male
        </div>
          <div class="col-sm-6">
          <input type="radio" name="gender" value="F" style="width:4vh">Female
          </div>
        </div>
        <div class="form-group row">
          <input type="password" name="password_1" placeholder="Choose Password" style="width:62vh" value="<?php if(isset($_POST['register'])){ echo $_POST['password_1'];}?>">
        </div>
        <div class="form-group row">
          <input type="password" name="password_2" placeholder="Confirm Password" style="width:62vh" value="<?php if(isset($_POST['register'])){ echo $_POST['password_2'];}?>">
        </div>
        <div class="form-group row">
            <button type="submit" name="register">Sign up</button>
        </div>
        <p>
          Already a member? <a href="homepage.php">Sign in</a>
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
