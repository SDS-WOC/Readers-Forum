<?php

  $errors = array();
  $firstname = "";
  $surname = "";
  $email = "";

   $email = ($_POST['email']);
   $password = ($_POST['password']);

   if(empty($email)):{
     array_push($errors, "Email is required");
   }
   endif;
   if(empty($password)):{
     array_push($errors, "Password is required");
   }
   endif;
   if (count($errors)==0) :{
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "SELECT * FROM registration WHERE email='$email'";
        $result = mysqli_query($db, $query);

        if(mysqli_num_rows($result) == 1):{

          $user = $result->fetch_assoc();
          if (password_verify($_POST['password'], $user['password']))
          {
          $_SESSION['email'] = $user[$email];
          $_SESSION['firstname'] = $user[$firstname];
          $_SESSION['surname'] = $user[$surname];
          $_SESSION['logged_in'] = true;
          $_SESSION['success'] = "You are now logged in.";

          header('location: index.php');
          }
          else {
            array_push($errors, "Incorrect password!");
          }

        }

      else:{
          array_push($errors, "User with that email doesn't exist!");
          header('location: login.php');
        }
        endif;
      }
      endif;


  ?>
