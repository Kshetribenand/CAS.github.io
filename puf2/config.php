<?php
session_start();

// initializing variables

$email    = "";
$password = "";
$errors =array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'puf');

// REGISTER USER
if (isset($_POST['reg_suc'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
 
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['c_password']);
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $phone = mysqli_real_escape_string($db, $_POST['phone']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "firstname is required"); }
  if (empty($lastname)) { array_push($errors, "lastname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $login_check_query = "SELECT * FROM login WHERE first_name='$firstname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $login_check_query);
  $login = mysqli_fetch_assoc($result);
  
  if ($login) { // if user exists
    if ($login['first_name'] === $firstname) {
      echo "<script>
    alert('First name already exists');
    
    </script>";
    }

    if ($login['email'] === $email) {
      echo "<script>
    alert('Same email already used !!!!!');
    
    </script>";
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO login (first_name, last_name, password, email, phone) 
  			  VALUES('$firstname', '$lastname', '$password', '$email', '$phone')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	/*header('location: login.php');*/
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	echo "<script>
    alert('Email required');
    
    </script>";
  }
  if (empty($password)) {
  	echo "<script>
    alert('password required');
    
    </script>";
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {


  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		echo "<script>
    alert('invalid email or password ');
    
    </script>";
  	}
  }

/*
    if (count($errors) == 0) {

    $password = md5($password);
    $query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);

    if ($results>0) {
      $query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $row = mysqli_query($db, $query);
    
    $_SESSION['USER_ID']=$row['id'];
    $_SESSION['UNSER_NAME']=$row['email'];
    header("location:index.php");
  }
  else{
    $msg="Please Enter Valid Details !";
  }
    }
*/

}




?>