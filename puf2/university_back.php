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

$email    = "";
$password = "";
$errors =array(); 


$db = mysqli_connect('localhost', 'root', '', 'puf2');


if (isset($_POST['university_btn']))
 {
  // receive all input values from the form
  $a_assessment = mysqli_real_escape_string($db, $_POST['a_assessment']);
  $a_claimed_applicant = mysqli_real_escape_string($db, $_POST['a_claimed_applicant']);
  $a_verified = mysqli_real_escape_string($db, $_POST['a_verified']);
  $a_remarks = mysqli_real_escape_string($db, $_POST['a_remarks']);
  $a_encl = mysqli_real_escape_string($db, $_POST['a_encl']);
  $b_assessment = mysqli_real_escape_string($db, $_POST['b_assessment']);
  $b_claimed_applicant = mysqli_real_escape_string($db, $_POST['b_claimed_applicant']);
  $b_verified = mysqli_real_escape_string($db, $_POST['b_verified']);
  $b_remarks = mysqli_real_escape_string($db, $_POST['b_remarks']);
  $b_encl = mysqli_real_escape_string($db, $_POST['b_encl']);
  $c_assessment = mysqli_real_escape_string($db, $_POST['c_assessment']);
  $c_claimed_applicant = mysqli_real_escape_string($db, $_POST['c_claimed_applicant']);
  $c_verified = mysqli_real_escape_string($db, $_POST['c_verified']);
  $c_remarks = mysqli_real_escape_string($db, $_POST['c_remarks']);
  $c_encl = mysqli_real_escape_string($db, $_POST['c_encl']);
  $d_assessment = mysqli_real_escape_string($db, $_POST['d_assessment']);
  $d_claimed_applicant = mysqli_real_escape_string($db, $_POST['d_claimed_applicant']);
  $d_verified = mysqli_real_escape_string($db, $_POST['d_verified']);
  $d_remarks = mysqli_real_escape_string($db, $_POST['d_remarks']);
  $d_encl = mysqli_real_escape_string($db, $_POST['d_encl']);
  $e_assessment = mysqli_real_escape_string($db, $_POST['e_assessment']);
  $e_claimed_applicant = mysqli_real_escape_string($db, $_POST['e_claimed_applicant']);
  $e_verified = mysqli_real_escape_string($db, $_POST['e_verified']);
  $e_remarks = mysqli_real_escape_string($db, $_POST['e_remarks']);
  $e_encl = mysqli_real_escape_string($db, $_POST['e_encl']);
  $f_assessment = mysqli_real_escape_string($db, $_POST['f_assessment']);
  $f_claimed_applicant = mysqli_real_escape_string($db, $_POST['f_claimed_applicant']);
  $f_verified = mysqli_real_escape_string($db, $_POST['f_verified']);
  $f_remarks = mysqli_real_escape_string($db, $_POST['f_remarks']);
  $f_encl = mysqli_real_escape_string($db, $_POST['f_encl']);
  $g_assessment = mysqli_real_escape_string($db, $_POST['g_assessment']);
  $g_claimed_applicant = mysqli_real_escape_string($db, $_POST['g_claimed_applicant']);
  $g_verified = mysqli_real_escape_string($db, $_POST['g_verified']);
  $g_remarks = mysqli_real_escape_string($db, $_POST['g_remarks']);
  $g_encl = mysqli_real_escape_string($db, $_POST['g_encl']);
  

  

 
  

  // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {

  	     $query = "INSERT INTO university (a_assessment,a_claimed_applicant,a_verified,a_remarks,a_encl,
                                          b_assessment,b_claimed_applicant,b_verified,b_remarks,b_encl,
                                          c_assessment,
                                          c_claimed_applicant,c_verified,c_remarks,c_encl,d_assessment,
                                          d_claimed_applicant,
                                          d_verified,d_remarks,d_encl,e_assessment,e_claimed_applicant,
                                          e_verified,
                                          e_remarks,e_encl,f_assessment,f_claimed_applicant,f_verified,
                                          f_remarks,f_encl,g_assessment,g_claimed_applicant,g_verified,
                                          g_remarks,g_encl,user_id) 

                   VALUES('$a_assessment','$a_claimed_applicant','$a_verified','$a_remarks','$a_encl',
                                          '$b_assessment','$b_claimed_applicant','$b_verified','$b_remarks','$b_encl',
                                          '$c_assessment',
                                          '$c_claimed_applicant','$c_verified','$c_remarks','$c_encl','$d_assessment',
                                          '$d_claimed_applicant',
                                          '$d_verified','$d_remarks','$d_encl','$e_assessment','$e_claimed_applicant',
                                          '$e_verified',
                                          '$e_remarks','$e_encl','$f_assessment','$f_claimed_applicant','$f_verified',
                                          '$f_remarks','$f_encl','$g_assessment','$g_claimed_applicant','$g_verified',
                                          '$g_remarks',
                                          '$g_encl','$id' )"; 
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now  successfully submitted";
  	/*header('location: p_details.php');*/
  }
}





?>