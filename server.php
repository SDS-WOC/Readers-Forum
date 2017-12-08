<?php
   $password="";
   $errors = array();
   $db = mysqli_connect('localhost', 'root', '');

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
      array_push($errors, "Password is required");
    }
    if($password_1 != $password_2){
      array_push($errors, "Passwords do not match");
    }

    if (count($errors)==0)
         $password = password_hash($password_1, PASSWORD_DEFAULT);
        $sql = "INSERT INTO registration (firstname, surname, email, password )
                    VALUES($firstname, $surname, $email, $password)";
        mysqli_query($db, $sql);

  }
 ?>
