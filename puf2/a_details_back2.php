<?php
session_start();



$email    = "";
$password = "";
$errors =array(); 


$db = mysqli_connect('localhost', 'root', '', 'puf');


if (isset($_POST['a_details_sub']))
 {
  // receive all input values from the form
  $m_phil_title = mysqli_real_escape_string($db, $_POST['m_phil_title']);
  $m_phil_award = mysqli_real_escape_string($db, $_POST['m_phil_award']);
  $m_phil_university = mysqli_real_escape_string($db, $_POST['m_phil_university']);
  $d_phil_title = mysqli_real_escape_string($db, $_POST['d_phil_title']);
  $d_phil_award= mysqli_real_escape_string($db, $_POST['d_phil_award']);
  $d_phil_university = mysqli_real_escape_string($db, $_POST['d_phil_university']);
  $post_title = mysqli_real_escape_string($db, $_POST['post_title']);
  $post_award = mysqli_real_escape_string($db, $_POST['post_award']);
  $post_university = mysqli_real_escape_string($db, $_POST['post_university']);
  $dsc_title = mysqli_real_escape_string($db, $_POST['dsc_title']);
  $dsc_award = mysqli_real_escape_string($db, $_POST['dsc_award']);
  $dsc_university = mysqli_real_escape_string($db, $_POST['dsc_university']);

  

  

 
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO a_research (m_phil_title,m_phil_award,m_phil_university,d_phil_title,d_phil_award,d_phil_university,
                                        post_title,post_award,post_university,dsc_title,dsc_award,dsc_university) 
      			  VALUES('$m_phil_title', '$m_phil_award', '$m_phil_university','$d_phil_title','$d_phil_award','$d_phil_university',
                '$post_title','$post_award','$post_university','$dsc_title','$dsc_award','$dsc_university')"; 
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now  successfully submitted";
  	/*header('location: p_details.php');*/
  }
}




?>