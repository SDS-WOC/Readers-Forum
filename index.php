<?php
  include('server.php');
  include('errors.php');

$sql = "SELECT * FROM catalogue";
$entry = $db ->query($sql);

if ($_SESSION['logged_in'] = true) {

  $firstname = $_SESSION['firstname'];
  $surname = $_SESSION['surname'];
  $email = $_SESSION['email'];

}

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

    .affix {
        top: 0;
        width: 100%;
        z-index: 9999 !important;
    }

    .affix + .container-fluid {
        padding-top: 70px;
    }
    .dropbtn {
      background-color: rgba(100, 100, 100, 0);;
      color: white;
      padding-top: 14px;
      font-size: 15px;
      border: none;
      cursor: pointer;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      background-color: #f9f9f9;
      min-width: 240px;
      padding: 20px;
      line-height: 2;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 14px 8px;
      text-decoration: none;

    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: rgba(100, 100, 100, 0);;
    }

    .modal{
      top:5vh;
    }

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
      min-height:380px;
      max-height:380px;
  }

    .box{

      border-left: 1px solid #4A235A;
    }

    .panel {
       border: 1px solid #f4511e;
       border-radius:0 ;
       transition: box-shadow 0.5s;
       max-height: 75vh;
       min-height: 75vh;
   }
   .panel:hover {
        cursor: pointer;
       box-shadow: 5px 0px 40px rgba(0,0,0, .2);
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

       max-height: 19vh;
       min-height: 19vh;
       background-color: white ;
   }
   .panel-footer-bottom {
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
   .panel-footer-bottom green {
     border-radius: 5px;
     padding-left:5px;
     padding-right: 5px;
     padding-top: 5px;
     padding-bottom: 5px;
     border: 1px solid green;
     color: green;
     font-size: 14px;
   }
   .panel-footer-bottom red {
     border-radius: 5px;
     padding-left:5px;
     padding-right: 5px;
     padding-top: 5px;
     padding-bottom: 5px;
     border: 1px solid red;
     color: red;
     font-size: 14px;
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
     max-height: 70vh;
     min-height: 70vh;
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
     font-size: 15px;
   }
   .close{
     color:blue;
   }
   .rent{

     text-align: left;
     font-size: 16px;
     color:#CD5C5C ;
   }
   .rent info{
     font-size: 12px;
     color: #5D6D7E;
   }
   .rent .btn {
       margin-top : 15px ;
       border: 1px solid #f4511e;
       background-color: #fff;
       color: #f4511e;
   }
   .rent .btn:hover {
       background-color: #f4511e;
      color: #fff;
   }
   .comments-footer{
     text-align: left;
     overflow-y: scroll;
     max-height: 250px;
     min-height: 250px;
   }
   .nav{
     margin-left: 0;
   }
  </style>
</head>
<body background="">
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <div class="navbar-header">
      <a class="navbar-brand" href="#">Athena</a>
    </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Catalogue</a></li>
        <li><a href="#">My Books</a></li>
        <li><a href="#">Share a book</a></li>
      </ul>

            <div class="dropdown" style="float:right;">
              <font color="white" >Hey
              <button class="dropbtn"><b><?php echo $firstname; ?></b></font></button>
              <div class="dropdown-content">
                <?php echo $firstname.$surname; ?>
                <br>
                <?php echo $email; ?>
                <br><br>
              <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>

              </div>
            </div>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/bg.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>New book added</h3>
          <p>Submit borrow request now!</p>
        </div>
      </div>

        <div class="item">
          <img src="images/bg3.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>New book added</h3>
            <p>Submit borrow request now!</p>
          </div>
        </div>

      <div class="item">
        <img src="images/bg5.jpg" alt="Image">
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
      <div class="col-sm-3 row-xs-12">
      <a data-toggle="modal" data-target="#book-<?= $id ; ?>">
      <div class="panel panel-default text-center">

        <div class="panel-body">
          <center><img src="<?= $book['image'] ; ?>" class="img-responsive" width=80% alt="<?= $book['title']  ; ?>"></center>
        </div>
        <div class="panel-footer">
          <h3><?= $book['title'] ?></h3>
          <h4>by <?= $book['author'] ?></h4>
        </div>
          <div class="panel-footer-bottom">
          <?php if($book['availability']==1): ?>
          <green> Available </green>
          <?php else : ?>
          <red> Not Available</red>
        <?php endif; ?>
          </div>
      </div>
    </div>
  </a>

    <div class="modal fade" id="book-<?= $book['id']; ?>" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
              <div class="specs">
                <div class="col-sm-3">
                  <br>
                  <img src="<?= $book['image']; ?>" alt="<?= $book['title']; ?>" class="details img-responsive">
                  <br>
                  <div class="img-footer">
                    Avg Rating :
                    <br>
                    Availability : &nbsp;
                    <?php if($book['availability']==1): ?>
                      <green>Available</green>
                    <?php else : ?>
                      <red>Not Available</red>
                    <?php endif ?>
                  </div>
                </div>
          <div class="col-sm-9">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h1 align=left><?= $book['title'] ?></h1>
            <h4 align=left>by <?= $book['author'] ?></h4>
            <hr>

          <div class="col-sm-6 row-sm-4 rent">
            <ul class="nav nav-pills">
              <li class="active"><a data-toggle="pill" href="#<?= $id;?>menu1">Book Description</a></li>
              <li><a data-toggle="pill" href="#<?= $id;?>menu2">About the Author</a></li>
            </ul>
            <br>
            <info>
              Paperback, <?= $book['pages']; ?> pages<br>
              Published <?= $book['date_published']; ?><br>
              Added <?= $book['date_added']; ?>
            </info>
            <br><br>
            <p>Rent this book at a bottom-touching rent of <b><font text=18 style=bold >Rs 20</font></b> for a week!
            </p>
            <button class="btn">Rent it!</button>
          </div>
          <div class="box col-sm-6">
          <div class="tab-content">
            <div class="tab-pane fade in active" id="<?= $id;?>menu1">
                <h3 align=left>Book Description</h3>
                <p align=left><?= $book['description']; ?>
            </div>

                <?php

                $sql1 = "SELECT * FROM author WHERE name='".$book['author']."' ";
                $entry1 = $db ->query($sql1);
                if($entry1->num_rows !==0):
                $author = mysqli_fetch_assoc($entry1);
                ?>

            <div class="tab-pane fade" id="<?= $id;?>menu2">
                <h3 align=left>About the Author</h4>
                <p align=left><?= $author['description']; ?>
            </div>
          </div>
        <?php endif; ?>
        </div>
            </div>

              </div>
              <hr>
              <div class="comments">

                <h3 align=left>Reviews and Comments</h3>
                <br>
                <div class="comments-footer">

                  <?php
                  $sql2 = "SELECT * FROM comments WHERE book_id= '$id'";
                  $entry2 = $db ->query($sql2);
                  if($entry2->num_rows !==0):{
                  while($comment = mysqli_fetch_assoc($entry2)) {
                  ?>

                  <div class="media">
                  <div class="media-left">
                    <img src="img_avatar1.png" class="media-object" style="width:45px">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><?= $comment['author']; ?> <small><i>Posted on February 19, 2016</i></small></h4>
                    <p><?= $comment['comment_body']; ?></p>
                  </div>
                </div>
              <?php }
                    }
                    endif; ?>
                <br>


                  <form action="" method=get>
                    <div class="media">
                      <div class="media-left">
                        <img src="img_avatar5.png" class="media-object" style="width:45px">
                      </div>
                      <div class="media-body">
                        <textarea cols=130 rows=3 name="<?= $id; ?>" id="comment<?= $id; ?>txt">Comment here...</textarea>
                      </div>
                      <br><p align=right>
                      <input type="submit" name="add_comm" value="Comment">
                    </p>
                    </div>
                  </form>
                    <script>
                    $('#comment<?= $id; ?>txt').focus(function() {
                        if ( this.value == 'Comment here...' ) {
                            this.value = '';
                        }
                    })
                    .blur(function() {
                        if ( this.value == '' ) {
                            this.value = 'Comment here...';
                        }
                    });
                    </script>

                </div>
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
    <?php
    if (isset($_GET['add_comm'])) :{
      if($_SESSION['logged_in'] = true):{
        $user_id = $_SESSION['id'];
        $author = $_SESSION['firstname'].$_SESSION['surname'];
        for ($i=1; $i < 9; $i++) {
        if (isset ($_GET[$i])):{
        $comment = $_GET[$i];
        $book_id = $i;

                  $user_id = $_SESSION['id'];
                  $author = $_SESSION['firstname'].$_SESSION['surname'];


                  $sql = "INSERT INTO comments(user_id, author, comment_body, book_id) VALUES ('$user_id','$author','$comment', '$book_id')";
                  mysqli_query($db, $sql);
                  $page = 'index.php';
        }
        endif;
        }
      }
    endif;
      }
    endif;
      ?>

</body>
</html>
