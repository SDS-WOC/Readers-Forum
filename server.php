<?php

   $errors = array();
   $db = mysqli_connect('localhost', 'root', 'registration');

   if (isset($_POST['register']))
  {
    $firstname = ($_POST['firstname']);
    $surname = ($_POST['surname']);
    $email = ($_POST['email']);
    $password_1 = ($_POST['password_1']);
    $password_2 = ($_POST['password_2']);

    if(empty($firstname)){
      array_push($errors, "First Name is required");
    }
    if(empty($surname)){
      array_push($errors, "Surname is required");
    }
    if(empty($email)){
      array_push($errors, "Email is required");
    }
    if(empty($password_1)){
      array_push($errors, "Please specify a password");
    }
    if($password_1 != $password_2){
      array_push($errors, "Passwords do not match");
    }

    if (count($errors)==0)
         $password = md5($password_1);
        $sql = "INSERT INTO users (firstname, surname, email, password )
                    VALUES($firstname, $surname, $email, $password)";
        mysqli_query($db, $sql);

  }
 ?>
