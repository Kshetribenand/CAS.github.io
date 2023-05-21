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


if (isset($_POST['t_btn']))
 {
  // receive all input values from the form
  $t_1_odd_assigned = mysqli_real_escape_string($db, $_POST['t_1_odd_assigned']);
  $t_1_odd_taught = mysqli_real_escape_string($db, $_POST['t_1_odd_taught']);
  $t_1_odd_encl = mysqli_real_escape_string($db, $_POST['t_1_odd_encl']);
  $t_1_even_assigned = mysqli_real_escape_string($db, $_POST['t_1_even_assigned']);
  $t_1_even_taught = mysqli_real_escape_string($db, $_POST['t_1_even_taught']);
  $t_1_even_encl = mysqli_real_escape_string($db, $_POST['t_1_even_encl']);
  $t_2_odd_assigned = mysqli_real_escape_string($db, $_POST['t_2_odd_assigned']);
  $t_2_odd_taught = mysqli_real_escape_string($db, $_POST['t_2_odd_taught']);
  $t_2_odd_encl = mysqli_real_escape_string($db, $_POST['t_2_odd_encl']);
  $t_2_even_assigned = mysqli_real_escape_string($db, $_POST['t_2_even_assigned']);
  $t_2_even_taught = mysqli_real_escape_string($db, $_POST['t_2_even_taught']);
  $t_2_even_encl = mysqli_real_escape_string($db, $_POST['t_2_even_encl']);
  $t_3_odd_assigned = mysqli_real_escape_string($db, $_POST['t_3_odd_assigned']);
  $t_3_odd_taught = mysqli_real_escape_string($db, $_POST['t_3_odd_taught']);
  $t_3_odd_encl = mysqli_real_escape_string($db, $_POST['t_3_odd_encl']);
  $t_3_even_assigned = mysqli_real_escape_string($db, $_POST['t_3_even_assigned']);
  $t_3_even_taught = mysqli_real_escape_string($db, $_POST['t_3_even_taught']);
  $t_3_even_encl = mysqli_real_escape_string($db, $_POST['t_3_even_encl']);
  $t_4_odd_assigned = mysqli_real_escape_string($db, $_POST['t_4_odd_assigned']);
  $t_4_odd_taught = mysqli_real_escape_string($db, $_POST['t_4_odd_taught']);
  $t_4_odd_encl = mysqli_real_escape_string($db, $_POST['t_4_odd_encl']);
  $t_4_even_assigned = mysqli_real_escape_string($db, $_POST['t_4_even_assigned']);
  $t_4_even_taught = mysqli_real_escape_string($db, $_POST['t_4_even_taught']);
  $t_4_even_encl = mysqli_real_escape_string($db, $_POST['t_4_even_encl']);
  $t_5_odd_assigned = mysqli_real_escape_string($db, $_POST['t_5_odd_assigned']);
  $t_5_odd_taught = mysqli_real_escape_string($db, $_POST['t_5_odd_taught']);
  $t_5_odd_encl = mysqli_real_escape_string($db, $_POST['t_5_odd_encl']);
  $t_5_even_assigned = mysqli_real_escape_string($db, $_POST['t_5_even_assigned']);
  $t_5_even_taught = mysqli_real_escape_string($db, $_POST['t_5_even_taught']);
  $t_5_even_encl = mysqli_real_escape_string($db, $_POST['t_5_even_encl']);
  $t_6_odd_assigned = mysqli_real_escape_string($db, $_POST['t_6_odd_assigned']);
  $t_6_odd_taught = mysqli_real_escape_string($db, $_POST['t_6_odd_taught']);
  $t_6_odd_encl = mysqli_real_escape_string($db, $_POST['t_6_odd_encl']);
  $t_6_even_assigned = mysqli_real_escape_string($db, $_POST['t_6_even_assigned']);
  $t_6_even_taught = mysqli_real_escape_string($db, $_POST['t_6_even_taught']);
  $t_6_even_encl = mysqli_real_escape_string($db, $_POST['t_6_even_encl']);
  $assessment_period_a = mysqli_real_escape_string($db, $_POST['assessment_period_a']);
  $assessment_period_b = mysqli_real_escape_string($db, $_POST['assessment_period_b']);
  $overall_pc = mysqli_real_escape_string($db, $_POST['overall_pc']);
 

  

 
  

  // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {

  	     $query = "INSERT INTO teaching (t_1_odd_assigned,t_1_odd_taught,t_1_odd_encl,t_1_even_assigned,t_1_even_taught,
                                          t_1_even_encl,t_2_odd_assigned,t_2_odd_taught,t_2_odd_encl,t_2_even_assigned,
                                          t_2_even_taught,
                                          t_2_even_encl,t_3_odd_assigned,t_3_odd_taught,t_3_odd_encl,t_3_even_assigned,
                                          t_3_even_taught,
                                          t_3_even_encl,t_4_odd_assigned,t_4_odd_taught,t_4_odd_encl,t_4_even_assigned,
                                          t_4_even_taught,
                                          t_4_even_encl,t_5_odd_assigned,t_5_odd_taught,t_5_odd_encl,t_5_even_assigned,
                                          t_5_even_taught,t_5_even_encl,t_6_odd_assigned,t_6_odd_taught,t_6_odd_encl,
                                          t_6_even_assigned,
                                          t_6_even_taught,
                                          t_6_even_encl,assessment_period_a,assessment_period_b,overall_pc ,user_id ) 

                   VALUES('$t_1_odd_assigned','$t_1_odd_taught','$t_1_odd_encl','$t_1_even_assigned','$t_1_even_taught',
                                          '$t_1_even_encl','$t_2_odd_assigned','$t_2_odd_taught','$t_2_odd_encl','$t_2_even_assigned',
                                          '$t_2_even_taught',
                                          '$t_2_even_encl','$t_3_odd_assigned','$t_3_odd_taught','$t_3_odd_encl','$t_3_even_assigned',
                                          '$t_3_even_taught',
                                          '$t_3_even_encl','$t_4_odd_assigned','$t_4_odd_taught','$t_4_odd_encl','$t_4_even_assigned',
                                          '$t_4_even_taught',
                                          '$t_4_even_encl','$t_5_odd_assigned','$t_5_odd_taught','$t_5_odd_encl','$t_5_even_assigned',
                                          '$t_5_even_taught','$t_5_even_encl','$t_6_odd_assigned','$t_6_odd_taught','$t_6_odd_encl',
                                          '$t_6_even_assigned',
                                          '$t_6_even_taught',
                                          '$t_6_even_encl','$assessment_period_a','$assessment_period_b','$overall_pc','$id')"; 
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now  successfully submitted";
  	/*header('location: p_details.php');*/
  }
}





?>