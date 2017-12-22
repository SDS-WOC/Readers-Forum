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

    .modal-dialog{
      width:80%;
    }

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
       max-height: 480px;
       min-height: 480px;
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
   .col-sm-3 a:hover{
     text-decoration: none;
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
   .box{
     border-left: 1px solid #4A235A;
     border-radius:0 ;
   }
   .specs h3{
     color: #4A235A;
   }
   .specs h4{
     color: #aaa;
   }
   .specs h1{
     color: #1A5276;
   }
   .specs{
     max-height: 400px;
     min-height: 400px;
   }
   .img-footer{
     line-height: 1.5;
     text-align: left;
     padding-left:10px;
     padding-right: 10px;
     padding-top: 5px;
     padding-bottom: 5px;
     border: 1px solid #1A5276;
     border-radius: 15px;
     background-color: #fff;
     color: #CD5C5C;
   }
   .img-footer green {
     font-weight: bold;
     color: green;
     font-size: 16px;
   }
   .img-footer red {
     font-weight: bold;
     color: red;
     font-size: 16px;
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

  <?php while($book = mysqli_fetch_assoc($entry)) {
    $id = $book['id'];?>
  <div class="container text-center">

  <div class="row">
    <div class="col-sm-3 col-xs-12">
      <a data-toggle="modal" data-target="#book-<?= $id ; ?>">
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
        </div>
      </div>
    </div>
  </a>
  <?php
  $sql1 = "SELECT * FROM catalogue WHERE `id` = '$id'";
  $entry1 = $db ->query($sql1);
  $book1 = mysqli_fetch_assoc($entry1) ;
  ?>
    <div class="modal fade" id="book-<?= $book1['id']; ?>" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
              <div class="specs">
                <div class="col-sm-3">

                  <img src="<?= $book1['image']; ?>" alt="<?= $book1['title']; ?>" class="details img-responsive">
                  <br>
                  <div class="img-footer">
                    Avg Rating :
                    <br>
                    Availability : &nbsp;
                    <?php if($book1['availability']==1): ?>
                      <green>Available</green>
                    <?php else : ?>
                      <red>Not Available</red>
                    <?php endif ?>
                  </div>
                </div>
          <div class="col-sm-9">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h1 align=left><?= $book1['title'] ?></h1>
            <h4 align=left>by <?= $book1['author'] ?></h4>
            <hr>
            <div class="col-sm-3 container-fluid">
            </div>
            <div class="col-sm-9 box">
                <h3 align=left>Book Description</h4>
                <p align=left><?= $book1['description'] ?>
              </div>
            </div>
              </div>
              <div class="comments">
                <hr>
                <h3 align=left>Comments</h3>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor nec sapien ut suscipit. Praesent porttitor risus dolor. Nullam dignissim magna dui, vel posuere libero bibendum ac. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse at tortor vel magna tristique porttitor eget eget diam. Proin nec ullamcorper lorem, id ullamcorper mauris. Pellentesque tempor orci id luctus pellentesque. Proin placerat fermentum elit, id mattis nulla fringilla in. Sed ut turpis felis.</p>
    <p>Duis gravida ligula eu cursus blandit. Praesent interdum odio erat, ac pretium dui finibus eget. Etiam quis tortor ligula. Morbi suscipit dui est, eu suscipit lorem convallis nec. Aliquam molestie mauris luctus, consequat turpis sed, vehicula tellus. Aliquam dignissim neque tortor, in tempor metus volutpat et. Vestibulum ac libero non velit tempor interdum. Sed nec mi sit amet odio blandit ultricies non a metus. Nulla eleifend porta purus. Nullam aliquet orci ac dolor elementum porttitor. Aliquam risus massa, malesuada id urna sed, hendrerit commodo mauris. Donec commodo gravida leo quis condimentum. Duis tempor dictum leo, vitae faucibus augue feugiat ac. Nulla vel justo maximus, condimentum quam id, luctus quam.
              </div>
            </div>
          </div>
        </div>
      </div>
<?php }?>
  </div>
</div>
    <div class="footer">
      <footer><center>copyright information</center></footer>
    </div>



</body>
</html>
