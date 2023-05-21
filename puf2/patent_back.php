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


if (isset($_POST['patent_btn']))
 {
  // receive all input values from the form
  $patents_name_author = mysqli_real_escape_string($db, $_POST['patents_name_author']);
  $patents_int_national = mysqli_real_escape_string($db, $_POST['patents_int_national']);
  $patents_year = mysqli_real_escape_string($db, $_POST['patents_year']);
  $patents_claim_score = mysqli_real_escape_string($db, $_POST['patents_claim_score']);
  $patents_score_hod = mysqli_real_escape_string($db, $_POST['patents_score_hod']);
  $patents_encl = mysqli_real_escape_string($db, $_POST['patents_encl']);


  $patents_name_author2 = mysqli_real_escape_string($db, $_POST['patents_name_author2']);
  $patents_int_national2 = mysqli_real_escape_string($db, $_POST['patents_int_national2']);
  $patents_year2 = mysqli_real_escape_string($db, $_POST['patents_year2']);
  $patents_claim_score2 = mysqli_real_escape_string($db, $_POST['patents_claim_score2']);
  $patents_score_hod2 = mysqli_real_escape_string($db, $_POST['patents_score_hod2']);
  $patents_encl2 = mysqli_real_escape_string($db, $_POST['patents_encl2']);


  $policy_doc_details = mysqli_real_escape_string($db, $_POST['policy_doc_details']);
  $policy_doc_int_national_state = mysqli_real_escape_string($db, $_POST['policy_doc_int_national_state']);
  $policy_doc_year = mysqli_real_escape_string($db, $_POST['policy_doc_year']);
  $policy_doc_claim_score = mysqli_real_escape_string($db, $_POST['policy_doc_claim_score']);
  $policy_doc_score_hod = mysqli_real_escape_string($db, $_POST['policy_doc_score_hod']);
  $policy_doc_encl = mysqli_real_escape_string($db, $_POST['policy_doc_encl']);


  $policy_doc_details2 = mysqli_real_escape_string($db, $_POST['policy_doc_details2']);
  $policy_doc_int_national_state2 = mysqli_real_escape_string($db, $_POST['policy_doc_int_national_state2']);
  $policy_doc_year2 = mysqli_real_escape_string($db, $_POST['policy_doc_year2']);
  $policy_doc_claim_score2 = mysqli_real_escape_string($db, $_POST['policy_doc_claim_score2']);
  $policy_doc_score_hod2 = mysqli_real_escape_string($db, $_POST['policy_doc_score_hod2']);
  $policy_doc_encl2 = mysqli_real_escape_string($db, $_POST['policy_doc_encl2']);



  $fellowship_name = mysqli_real_escape_string($db, $_POST['fellowship_name']);
  $fellowship_awarding_institute = mysqli_real_escape_string($db, $_POST['fellowship_awarding_institute']);
  $fellowship_int_national_state = mysqli_real_escape_string($db, $_POST['fellowship_int_national_state']);
  $fellowship_date_awarded = mysqli_real_escape_string($db, $_POST['fellowship_date_awarded']);
  $fellowship_claim_score = mysqli_real_escape_string($db, $_POST['fellowship_claim_score']);
  $fellowship_score_hod = mysqli_real_escape_string($db, $_POST['fellowship_score_hod']);
  $fellowship_encl = mysqli_real_escape_string($db, $_POST['fellowship_encl']);
  


$fellowship_name2 = mysqli_real_escape_string($db, $_POST['fellowship_name2']);
  $fellowship_awarding_institute2 = mysqli_real_escape_string($db, $_POST['fellowship_awarding_institute2']);
  $fellowship_int_national_state2 = mysqli_real_escape_string($db, $_POST['fellowship_int_national_state2']);
  $fellowship_date_awarded2 = mysqli_real_escape_string($db, $_POST['fellowship_date_awarded2']);
  $fellowship_claim_score2 = mysqli_real_escape_string($db, $_POST['fellowship_claim_score2']);
  $fellowship_score_hod2 = mysqli_real_escape_string($db, $_POST['fellowship_score_hod2']);
  $fellowship_encl2 = mysqli_real_escape_string($db, $_POST['fellowship_encl2']);
  
  




 
  // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {

  	     $query = "INSERT INTO patent (patents_name_author,patents_int_national,patents_year,
                                          patents_claim_score,patents_score_hod,patents_encl

            ,patents_name_author2,patents_int_national2,patents_year2,patents_claim_score2,
            patents_score_hod2,patents_encl2

            ,policy_doc_details,policy_doc_int_national_state,policy_doc_year,policy_doc_claim_score,policy_doc_score_hod,
            policy_doc_encl


            ,policy_doc_details2,policy_doc_int_national_state2,policy_doc_year2,policy_doc_claim_score2,policy_doc_score_hod2,policy_doc_encl2

             ,fellowship_name,fellowship_awarding_institute,fellowship_int_national_state,fellowship_date_awarded,fellowship_claim_score,fellowship_score_hod,fellowship_encl

             ,fellowship_name2,fellowship_awarding_institute2,fellowship_int_national_state2,fellowship_date_awarded2,fellowship_claim_score2,fellowship_score_hod2,fellowship_encl2,user_id ) 

                   VALUES('$patents_name_author','$patents_int_national','$patents_year',
                            '$patents_claim_score','$patents_score_hod','$patents_encl',

                            '$patents_name_author2','$patents_int_national2','$patents_year2',
                            '$patents_claim_score2','$patents_score_hod2','$patents_encl2',

                            '$policy_doc_details','$policy_doc_int_national_state','$policy_doc_year',
                            '$policy_doc_claim_score','$policy_doc_score_hod','$policy_doc_encl',

                            '$policy_doc_details2','$policy_doc_int_national_state2','$policy_doc_year2',
                            '$policy_doc_claim_score2','$policy_doc_score_hod2','$policy_doc_encl2',

                            '$fellowship_name','$fellowship_awarding_institute','$fellowship_int_national_state',
                            '$fellowship_date_awarded','$fellowship_claim_score','$fellowship_score_hod',
                            '$fellowship_encl',

                            '$fellowship_name2','$fellowship_awarding_institute2','$fellowship_int_national_state2',
                            '$fellowship_date_awarded2','$fellowship_claim_score2','$fellowship_score_hod2',
                            '$fellowship_encl2','$id' )"; 
       

  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now  successfully submitted";
  	/*header('location: p_details.php');*/
  }
}





?>