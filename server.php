<?php


   session_start();
   $password="";
   $errors = array();
   $db = mysqli_connect('localhost', 'root', '', 'Athena');

   if (isset($_POST['register']))
    {
    $firstname = ($_POST['firstname']);
    $surname = ($_POST['surname']);
    $email = ($_POST['email']);
    $password_1 = ($_POST['password_1']);
    $password_2 = ($_POST['password_2']);


    if(empty($firstname)) : {
      array_push($errors, "First Name is required");
    }
    endif;
    if(empty($surname)):{
      array_push($errors, "Surname is required");
    }
    endif;
    if(empty($email)):{
      array_push($errors, "Email is required");
    }
    endif;
    if(empty($password_1)):{
      array_push($errors, "Password is required");
    }
    endif;
    if($password_1 != $password_2):{
      array_push($errors, "Passwords do not match");
    }
    endif;

    if (count($errors)==0) :{
         $password = password_hash($password_1, PASSWORD_DEFAULT);
        $sql = "INSERT INTO registration(firstname, surname, email, password )
                    VALUES('$firstname', '$surname','$email', '$password')";

        mysqli_query($db, $sql);
        $_SESSION['email'] = $email;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['success'] = "You are now logged in.";
        header('location: index.php');
      }
      endif;
  }


  if (isset($_POST['login'])) :{

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
        $query = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
        $result = mysqli_query($db, $query);

        if(mysqli_num_rows($result) == 1):{
          $_SESSION['email'] = $email;
          $_SESSION['firstname'] = $firstname;
          $_SESSION['success'] = "You are now logged in.";
          echo "<script>window.top.location='index.php'</script>";

        }

      else:{
          array_push($errors, "Wrong username/password combination");
          header('location: login.php', true);
        }
        endif;
      }
      endif;
    }
    endif;

    if (isset ($_GET['logout'])) :{
      session_destroy();
      unset($_SESSION['email']);
      unset($_SESSION['firstname']);
      session_write_close();
      header('location : login.php', true);
      exit();
    }
    endif;


 ?>
