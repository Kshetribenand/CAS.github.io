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


if (isset($_POST['research_btn']))
 {
  // receive all input values from the form
  $research_paper_1 = mysqli_real_escape_string($db, $_POST['research_paper_1']);
  $journal_name_1 = mysqli_real_escape_string($db, $_POST['journal_name_1']);
  $vol_year_1 = mysqli_real_escape_string($db, $_POST['vol_year_1']);
  $impact_factor_1 = mysqli_real_escape_string($db, $_POST['impact_factor_1']);
  $authorship_1 = mysqli_real_escape_string($db, $_POST['authorship_1']);
  $ugc_listed_1 = mysqli_real_escape_string($db, $_POST['ugc_listed_1']);
  $claimed_score_1 = mysqli_real_escape_string($db, $_POST['claimed_score_1']);
  $score_hod_1 = mysqli_real_escape_string($db, $_POST['score_hod_1']);
  $encl_1 = mysqli_real_escape_string($db, $_POST['encl_1']);
  $research_paper_2 = mysqli_real_escape_string($db, $_POST['research_paper_2']);
  $journal_name_2 = mysqli_real_escape_string($db, $_POST['journal_name_2']);
  $vol_year_2 = mysqli_real_escape_string($db, $_POST['vol_year_2']);
  $impact_factor_2 = mysqli_real_escape_string($db, $_POST['impact_factor_2']);
  $authorship_2 = mysqli_real_escape_string($db, $_POST['authorship_2']);
  $ugc_listed_2 = mysqli_real_escape_string($db, $_POST['ugc_listed_2']);
  $claimed_score_2 = mysqli_real_escape_string($db, $_POST['claimed_score_2']);
  $score_hod_2 = mysqli_real_escape_string($db, $_POST['score_hod_2']);
  $encl_2 = mysqli_real_escape_string($db, $_POST['encl_2']);
  $research_paper_3 = mysqli_real_escape_string($db, $_POST['research_paper_3']);
  $journal_name_3 = mysqli_real_escape_string($db, $_POST['journal_name_3']);
  $vol_year_3 = mysqli_real_escape_string($db, $_POST['vol_year_3']);
  $impact_factor_3 = mysqli_real_escape_string($db, $_POST['impact_factor_3']);
  $authorship_3 = mysqli_real_escape_string($db, $_POST['authorship_3']);
  $ugc_listed_3 = mysqli_real_escape_string($db, $_POST['ugc_listed_3']);
  $claimed_score_3 = mysqli_real_escape_string($db, $_POST['claimed_score_3']);
  $score_hod_3 = mysqli_real_escape_string($db, $_POST['score_hod_3']);
  $encl_3 = mysqli_real_escape_string($db, $_POST['encl_3']);
  $research_paper_4 = mysqli_real_escape_string($db, $_POST['research_paper_4']);
  $journal_name_4 = mysqli_real_escape_string($db, $_POST['journal_name_4']);
  $vol_year_4 = mysqli_real_escape_string($db, $_POST['vol_year_4']);
  $impact_factor_4 = mysqli_real_escape_string($db, $_POST['impact_factor_4']);
  $authorship_4 = mysqli_real_escape_string($db, $_POST['authorship_4']);
  $ugc_listed_4 = mysqli_real_escape_string($db, $_POST['ugc_listed_4']);
  $claimed_score_4 = mysqli_real_escape_string($db, $_POST['claimed_score_4']);
  $score_hod_4 = mysqli_real_escape_string($db, $_POST['score_hod_4']);
  $encl_4 = mysqli_real_escape_string($db, $_POST['encl_4']);
  

  

 
  

  // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {

  	     $query = "INSERT INTO research (research_paper_1,journal_name_1,vol_year_1,impact_factor_1,authorship_1,
                                          ugc_listed_1,claimed_score_1,score_hod_1,encl_1,
                                          research_paper_2,journal_name_2,vol_year_2,impact_factor_2,authorship_2,
                                          ugc_listed_2,claimed_score_2,score_hod_2,encl_2,research_paper_3,journal_name_3,vol_year_3,impact_factor_3,authorship_3,
                                          ugc_listed_3,claimed_score_3,score_hod_3,encl_3,research_paper_4,journal_name_4,vol_year_4,impact_factor_4,authorship_4,
                                          ugc_listed_4,claimed_score_4,score_hod_4,encl_4,user_id) 

                   VALUES('$research_paper_1','$journal_name_1','$vol_year_1','$impact_factor_1',
                                          '$authorship_1','$ugc_listed_1','$claimed_score_1','$score_hod_1','$encl_1',
                                          '$research_paper_2','$journal_name_2','$vol_year_2','$impact_factor_2',
                                          '$authorship_2','$ugc_listed_2','$claimed_score_2','$score_hod_2','$encl_2',
                                          '$research_paper_3','$journal_name_3','$vol_year_3','$impact_factor_3',
                                          '$authorship_3','$ugc_listed_3','$claimed_score_3','$score_hod_3','$encl_3',
                                          '$research_paper_4','$journal_name_4','$vol_year_4','$impact_factor_4',
                                          '$authorship_4','$ugc_listed_4','$claimed_score_4','$score_hod_4','$encl_4','$id'
                                          )"; 
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now  successfully submitted";
  	/*header('location: p_details.php');*/
  }
}





?>