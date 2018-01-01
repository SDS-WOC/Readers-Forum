<?php

$errors = array();
$firstname = "";
$surname = "";
$email = "";

$firstname = ($_POST['firstname']);
$surname = ($_POST['surname']);
$email = ($_POST['email']);
$password_1 = ($_POST['password_1']);
$password_2 = ($_POST['password_2']);
$gender = ($_POST['gender']);


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
if(empty($gender)):{
  array_push($errors, "Gender is required");
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

//$query = "SELECT * FROM registration WHERE email='$email'";
//$result = mysqli_query($db, $query);

//if(mysqli_num_rows($result) > 0):{
//  array_push($errors, "User with this email already exists!");
//}
//endif;


if (count($errors)==0) :{
     $password = password_hash($password_1, PASSWORD_BCRYPT);
    $sql = "INSERT INTO registration(firstname, surname, email, password, gender )
                VALUES('$firstname', '$surname','$email', '$password', '$gender')";

    mysqli_query($db, $sql);
    $_SESSION['email'] = $email;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['surname'] = "&nbsp;".$surname;
    $_SESSION['gender'] = $gender;
    $_SESSION['logged_in'] = true;
    if($gender == "M"){
      $_SESSION['dp'] = "male.jpg";
    }
    elseif($gender == "F"){
      $_SESSION['dp'] = "female.jpg";
    }
    $_SESSION['success'] = "You are now logged in.";

    header('location: index.php');
  }
  endif;

   ?>
