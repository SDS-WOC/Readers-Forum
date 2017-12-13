<?php


   session_start();
$errors = array();

   $db = mysqli_connect('localhost', 'root', '', 'Athena');

   if (isset($_POST['register'])) :
    {
      require 'register.php';
  }
  endif;

  if (isset($_POST['login'])) :{

      require 'login.php';

  }
  endif;



 ?>
