<?php 
 


//session_start();
 
$db = mysqli_connect('localhost', 'root', '', 'puf2');


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
  // a user does not already exist with the same email and/or email
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

  if (count) {
    $password = $password_1;//encrypt the password before saving in the database

    $query = "INSERT INTO login (first_name, last_name, password, email, phone) 
          VALUES('$firstname', '$lastname', '$password', '$email', '$phone')";
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now logged in";
   header('location: login.php');
  }
}

if (isset($_POST['login_user'])) {
 
  $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "puf2";
     $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        //$sql = "select * from login where email = '$email' ";  
        $sql = "SELECT id, email FROM login WHERE email= '$email' AND password= '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
         
        if($count == 1){  
          
           $_SESSION['USER_ID']=$row['id'];

    $_SESSION['UNSER_NAME']=$row['email'];


    header("location: index.php");
    echo "<script>
    alert('successfully login ');
    
    </script>"; 
        }  
        else{  
            echo "<script>
    alert(' login fail ');
    
    </script>";
        }   

 /* 
  $email = mysqli_real_escape_string($db,$_POST['email']);
 
  $password = mysqli_real_escape_string($db,$_POST['password']);
 
  $sql = mysqli_query($db,"select * from login where email='$email' is not null ");
    
  $num=mysqli_num_rows($sql);

  if ($num>0) {
     
    //$row=mysqli_fetch_assoc($sql);

    echo implode(" ", $num);

    $_SESSION['USER_ID']=$num['id'];

    $_SESSION['UNSER_NAME']=$num['email'];


    header("location:index.php");
    
  }

  else{

    echo "<script>
    alert('invalid email or password ');
    
    </script>";
  }*/
}





?>
