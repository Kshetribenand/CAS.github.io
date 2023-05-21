<?php
include('dbConfig.php');
if (!isset($_SESSION['USER_ID'])) {
  header("location:login.php");
  die();
}

$user = $_SESSION['UNSER_NAME'];
$query = mysqli_query($conn,"select * from login where email = '$user'");
$row =mysqli_fetch_array($query);
$id = $row['id'];
echo $id;







$db = mysqli_connect('localhost', 'root', '', 'puf2');


if (isset($_POST['p_details_sub']))
 {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $marital = mysqli_real_escape_string($db, $_POST['marital']);
  $nation = mysqli_real_escape_string($db, $_POST['nation']);
  $category = mysqli_real_escape_string($db, $_POST['category']);
  $school = mysqli_real_escape_string($db, $_POST['school']);
  $designation = mysqli_real_escape_string($db, $_POST['designation']);
  $last_date = mysqli_real_escape_string($db, $_POST['last_date']);
  $position = mysqli_real_escape_string($db, $_POST['position']);
  $d_o_e = mysqli_real_escape_string($db, $_POST['d_o_e']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $address2 = mysqli_real_escape_string($db, $_POST['address2']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $post = mysqli_real_escape_string($db, $_POST['post']);
  $city = mysqli_real_escape_string($db, $_POST['city']);

  
      function validate_mobile($phone)
{
    return preg_match('/^[6-9]\d{9}$/', $phone);
}


 
  $login_check_query = "SELECT * FROM p_details WHERE firstname='$firstname' OR email='$email'  LIMIT 1";
  $result = mysqli_query($db, $login_check_query);
  $submit = mysqli_fetch_assoc($result);
  
  if ($submit) { // if user exists
    if ($submit['firstname'] === $firstname) {
      echo "<script type='text/javascript'> 
             alert('First Name already exist!') 
             </script>"; 
            

    }

    if ($submit['email'] === $email) {
     echo "<script type='text/javascript'> 
             alert('Email already exist!!') 
             </script>"; 
              return false;
    }

  }
  if(validate_mobile($phone)){
    echo  "<script type='text/javascript'> 
             alert('You are now  successfully submitted!') 
             </script>";
}else{
    echo  "<script type='text/javascript'> 
             alert('invalid phone number!') 
             </script>";
             return false;
}

  
 

  	$query = "INSERT INTO p_details (firstname, lastname, fname, dob, gender, marital, nation, category, school, designation,
                                      last_date, position, d_o_e, email, address, address2, phone, post, city,user_id) 
      			  VALUES('$firstname', '$lastname', '$fname','$dob','$gender','$marital','$nation','$category','$school','$designation',
                                    '$last_date','$position','$d_o_e','$email','$address','$address2','$phone', '$post' ,'$city','$id')"; 
  	mysqli_query($db, $query);
  	
  	
  
}





?>