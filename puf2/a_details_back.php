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

/*
if( empty(session_id()) && !headers_sent()){
    session_start();
}*/

$email    = "";
$password = "";
$errors =array(); 


$db = mysqli_connect('localhost', 'root', '', 'puf2');


if (isset($_POST['a_details_sub']))
 {
  // receive all input values from the form
  $high_subject = mysqli_real_escape_string($db, $_POST['high_subject']);
  $high_board = mysqli_real_escape_string($db, $_POST['high_board']);
  $high_pass = mysqli_real_escape_string($db, $_POST['high_pass']);
  $high_mark = mysqli_real_escape_string($db, $_POST['high_mark']);
  $high_grade = mysqli_real_escape_string($db, $_POST['high_grade']);
  $puc_subject = mysqli_real_escape_string($db, $_POST['puc_subject']);
  $puc_board = mysqli_real_escape_string($db, $_POST['puc_board']);
  $puc_pass = mysqli_real_escape_string($db, $_POST['puc_pass']);
  $puc_mark = mysqli_real_escape_string($db, $_POST['puc_mark']);
  $puc_grade = mysqli_real_escape_string($db, $_POST['puc_grade']);
  $b_subject = mysqli_real_escape_string($db, $_POST['b_subject']);
  $b_board = mysqli_real_escape_string($db, $_POST['b_board']);
  $b_pass = mysqli_real_escape_string($db, $_POST['b_pass']);
  $b_mark = mysqli_real_escape_string($db, $_POST['b_mark']);
  $b_grade = mysqli_real_escape_string($db, $_POST['b_grade']);
  $m_subject = mysqli_real_escape_string($db, $_POST['m_subject']);
  $m_board = mysqli_real_escape_string($db, $_POST['m_board']);
  $m_pass = mysqli_real_escape_string($db, $_POST['m_pass']);
  $m_mark = mysqli_real_escape_string($db, $_POST['m_mark']);
  $m_grade = mysqli_real_escape_string($db, $_POST['m_grade']);
  $Net_subject = mysqli_real_escape_string($db, $_POST['Net_subject']);
  $Net_board = mysqli_real_escape_string($db, $_POST['Net_board']);
  $Net_pass = mysqli_real_escape_string($db, $_POST['Net_pass']);
  $Net_mark = mysqli_real_escape_string($db, $_POST['Net_mark']);
  $Net_grade = mysqli_real_escape_string($db, $_POST['Net_grade']);

  

 
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO a_scholastic (high_subject,high_board,high_pass,high_mark,high_grade,puc_subject,puc_board,puc_pass,puc_mark,
                                      puc_grade,b_subject,b_board,b_pass,b_mark,b_grade,m_subject,m_board,m_pass,
                                      m_mark,m_grade,Net_subject,Net_board,Net_pass,Net_mark,Net_grade,user_id) 
      			  VALUES('$high_subject', '$high_board', '$high_pass','$high_mark','$high_grade','$puc_subject','$puc_board','$puc_pass',
                '$puc_mark','$puc_grade','$b_subject','$b_board','$b_pass','$b_mark','$b_grade','$m_subject','$m_board', '$m_pass' ,
                '$m_mark', '$m_grade', '$Net_subject', '$Net_board', '$Net_pass', '$Net_mark', '$Net_grade','$id')"; 
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now  successfully submitted";
  	/*header('location: p_details.php');*/
  }
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
                                        post_title,post_award,post_university,dsc_title,dsc_award,dsc_university,user_id) 
              VALUES('$m_phil_title', '$m_phil_award', '$m_phil_university','$d_phil_title','$d_phil_award','$d_phil_university',
                '$post_title','$post_award','$post_university','$dsc_title','$dsc_award','$dsc_university','$id')"; 
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now  successfully submitted";
    /*header('location: p_details.php');*/
  }
}

if (isset($_POST['a_details_sub']))
 {
  // receive all input values from the form
  $prior_title = mysqli_real_escape_string($db, $_POST['prior_title']);
  $prior_employe = mysqli_real_escape_string($db, $_POST['prior_employe']);
  $prior_joining = mysqli_real_escape_string($db, $_POST['prior_joining']);
  $prior_leaving = mysqli_real_escape_string($db, $_POST['prior_leaving']);
  $prior_salary= mysqli_real_escape_string($db, $_POST['prior_salary']);
  $prior_reason = mysqli_real_escape_string($db, $_POST['prior_reason']);
  $prior1_title = mysqli_real_escape_string($db, $_POST['prior1_title']);
  $prior1_employe = mysqli_real_escape_string($db, $_POST['prior1_employe']);
  $prior1_joining = mysqli_real_escape_string($db, $_POST['prior1_joining']);
  $prior1_leaving = mysqli_real_escape_string($db, $_POST['prior1_leaving']);
  $prior1_salary = mysqli_real_escape_string($db, $_POST['prior1_salary']);
  $prior1_reason = mysqli_real_escape_string($db, $_POST['prior1_reason']);

  

  

 
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    $query = "INSERT INTO a_prior_position (prior_title,prior_employe,prior_joining,prior_leaving,prior_salary,prior_reason,
                          prior1_title, prior1_employe,prior1_joining,prior1_leaving,prior1_salary,prior1_reason,user_id) 
              VALUES('$prior_title', '$prior_employe', '$prior_joining','$prior_leaving','$prior_salary','$prior_reason',
                '$prior1_title','$prior1_employe','$prior1_joining','$prior1_leaving','$prior1_salary','$prior1_reason','$id')"; 
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now  successfully submitted";
    /*header('location: p_details.php');*/
  }
}
if (isset($_POST['a_details_sub']))
 {
  // receive all input values from the form
  $after_title = mysqli_real_escape_string($db, $_POST['after_title']);
  $after_employe = mysqli_real_escape_string($db, $_POST['after_employe']);
  $after_joining = mysqli_real_escape_string($db, $_POST['after_joining']);
  $after_leaving = mysqli_real_escape_string($db, $_POST['after_leaving']);
  $after_level= mysqli_real_escape_string($db, $_POST['after_level']);
 
  $after1_title = mysqli_real_escape_string($db, $_POST['after1_title']);
  $after1_employe = mysqli_real_escape_string($db, $_POST['after1_employe']);
  $after1_joining = mysqli_real_escape_string($db, $_POST['after1_joining']);
  $after1_leaving = mysqli_real_escape_string($db, $_POST['after1_leaving']);
  $after1_level = mysqli_real_escape_string($db, $_POST['after1_level']);
  

  

  

 
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    $query = "INSERT INTO a_after_position (after_title,after_employe,after_joining,after_leaving,after_level,
                          after1_title, after1_employe,after1_joining,after1_leaving,after1_level,user_id) 
              VALUES('$after_title', '$after_employe', '$after_joining','$after_leaving','$after_level',
                '$after1_title','$after1_employe','$after1_joining','$after1_leaving','$after1_level','$id')"; 
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now  successfully submitted";
    /*header('location: p_details.php');*/
  }
}
if (isset($_POST['a_details_sub']))
 {
  // receive all input values from the form
  $pg_experience = mysqli_real_escape_string($db, $_POST['pg_experience']);
  $ug_experience = mysqli_real_escape_string($db, $_POST['ug_experience']);
  $research_experience = mysqli_real_escape_string($db, $_POST['research_experience']);
  $field_spec = mysqli_real_escape_string($db, $_POST['field_spec']);
 

  

  

 
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    $query = "INSERT INTO a_experience (pg_experience,ug_experience,research_experience,field_spec,user_id) 
              VALUES('$pg_experience', '$ug_experience', '$research_experience','$field_spec','$id')"; 
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now  successfully submitted";
    /*header('location: p_details.php');*/
  }
}
if (isset($_POST['a_details_sub']))
 {
  // receive all input values from the form
  $courses = mysqli_real_escape_string($db, $_POST['courses']);
  $place = mysqli_real_escape_string($db, $_POST['place']);
  $short_joining = mysqli_real_escape_string($db, $_POST['short_joining']);
  $short_leaving = mysqli_real_escape_string($db, $_POST['short_leaving']);
  $agency = mysqli_real_escape_string($db, $_POST['agency']);
 

  

  

 
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    $query = "INSERT INTO a_orientation (courses,place,short_joining,short_leaving,agency,user_id) 
              VALUES('$courses', '$place', '$short_joining','$short_leaving','$agency','$id')"; 
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now  successfully submitted";
    /*header('location: p_details.php');*/
  }
}
if (isset($_POST['a_details_sub']))
 {
  // receive all input values from the form
  $candidate = mysqli_real_escape_string($db, $_POST['candidate']);
  $f_p_time = mysqli_real_escape_string($db, $_POST['f_p_time']);
  $viva = mysqli_real_escape_string($db, $_POST['viva']);
  $m_y_degree = mysqli_real_escape_string($db, $_POST['m_y_degree']);
  

  

  

 
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    $query = "INSERT INTO a_phd_awarded (candidate,f_p_time,viva,m_y_degree,user_id) 
              VALUES('$candidate', '$f_p_time', '$viva','$m_y_degree','$id')"; 
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now  successfully submitted";
    echo "<script>
    alert('You have successfully submitted ');
    
    </script>";
    header('location: academic_details.php');

  }
}
  
}




?>