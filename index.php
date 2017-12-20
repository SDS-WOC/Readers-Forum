<?php include('server.php');
      include('errors.php');

$sql = "SELECT * FROM catalogue";
$entry = $db ->query($sql);

?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
  <style>

    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

  .carousel-inner img {
      width: 100%;
      margin: auto;
      min-height:200px;
  }


    .panel {
       border: 1px solid #f4511e;
       border-radius:0 ;
       transition: box-shadow 0.5s;
       max-height: 540px;
       min-height: 540px;
   }
   .panel:hover {
       box-shadow: 5px 0px 40px rgba(0,0,0, .2);
   }
   .panel-footer .btn:hover {

       background-color: #f4511e;
      color: #fff;
   }
   .panel-heading {
       color: #fff ;
       background-color: #f4511e ;
       padding: 25px;
       border-bottom: 1px solid transparent;
       border-top-left-radius: 0px;
       border-top-right-radius: 0px;
       border-bottom-left-radius: 0px;
       border-bottom-right-radius: 0px;
   }
   .panel-footer {
       background-color: white ;
   }
   .panel-footer h3 {
       font-size: 22px;
   }
   .panel-footer h4 {
       color: #aaa;
       font-size: 14px;

   }
   .panel-footer green {
     color: green;
     font-size: 12px;
   }
   .panel-footer red {   
     color: red;
     font-size: 12px;
   }
   .panel-footer .btn {

       margin-top : 15px ;
       border: 1px solid #f4511e;
       background-color: #fff;
       color: #f4511e;

   }
  }
  </style>
</head>
<body>

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
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Catalogue</a></li>
        <li><a href="#">Borrow</a></li>
        <li><a href="#">Share</a></li>
        <li><a href="#">My Profile</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://placehold.it/1200x400?text=IMAGE" alt="Image">
        <div class="carousel-caption">
          <h3>New book added</h3>
          <p>Submit borrow request now!</p>
        </div>
      </div>

      <div class="item">
        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h3>New feauture added!</h3>
          <p>(Yay)</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div class="container text-center">
  <h3>Catalogue</h3><br>
</div>

  <?php while($book = mysqli_fetch_assoc($entry)) : ?>
  <div class="container text-center">

  <div class="row">
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">

        <div class="panel-body">
          <center><img src="<?= $book['image'] ; ?>" class="img-responsive" width=80% alt="<?= $book['title']  ; ?>"></center>
        </div>
        <div class="panel-footer">
          <h3><?= $book['title'] ?></h3>
          <h4>by <?= $book['author'] ?></h4>
          <?php if($book['availability']==1): ?>
            <green><h5> Available!</h5></green>
          <?php else : ?>
            <red><h5> Not Available!</h5></red>
          <?php endif ?>
          <button class="btn btn-lg">Check it Out</button>
        </div>
      </div>
    </div>

  <?php endwhile ;?>
  </div>
</div>
    <div class="footer">
      <footer><center>copyright information</center></footer>

    </div>

</body>
</html>
