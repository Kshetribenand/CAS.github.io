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


if (isset($_POST['guidance_btn']))
 {
  // receive all input values from the form
  $ph_d_scholar_name = mysqli_real_escape_string($db, $_POST['ph_d_scholar_name']);
  $ph_d_title_of_thesis = mysqli_real_escape_string($db, $_POST['ph_d_title_of_thesis']);
  $ph_d_thesis_submitted = mysqli_real_escape_string($db, $_POST['ph_d_thesis_submitted']);
  $ph_d_university = mysqli_real_escape_string($db, $_POST['ph_d_university']);
  $ph_d_m_y = mysqli_real_escape_string($db, $_POST['ph_d_m_y']);
  $ph_d_claim_score = mysqli_real_escape_string($db, $_POST['ph_d_claim_score']);
  $ph_d_score_by_hod = mysqli_real_escape_string($db, $_POST['ph_d_score_by_hod']);
  $ph_d_encl = mysqli_real_escape_string($db, $_POST['ph_d_encl']);


  $ph_d_scholar_name2 = mysqli_real_escape_string($db, $_POST['ph_d_scholar_name2']);
  $ph_d_title_of_thesis2 = mysqli_real_escape_string($db, $_POST['ph_d_title_of_thesis2']);
  $ph_d_thesis_submitted2 = mysqli_real_escape_string($db, $_POST['ph_d_thesis_submitted2']);
  $ph_d_university2 = mysqli_real_escape_string($db, $_POST['ph_d_university2']);
  $ph_d_m_y2 = mysqli_real_escape_string($db, $_POST['ph_d_m_y2']);
  $ph_d_claim_score2 = mysqli_real_escape_string($db, $_POST['ph_d_claim_score2']);
  $ph_d_score_by_hod2 = mysqli_real_escape_string($db, $_POST['ph_d_score_by_hod2']);
  $ph_d_encl2 = mysqli_real_escape_string($db, $_POST['ph_d_encl2']);


  $mphil_scholar_name = mysqli_real_escape_string($db, $_POST['mphil_scholar_name']);
  $mphil_title_of_thesis = mysqli_real_escape_string($db, $_POST['mphil_title_of_thesis']);
  $mphil_thesis_submitted = mysqli_real_escape_string($db, $_POST['mphil_thesis_submitted']);
  $mphil_university = mysqli_real_escape_string($db, $_POST['mphil_university']);
  $mphil_m_y = mysqli_real_escape_string($db, $_POST['mphil_m_y']);
  $mphil_claim_score = mysqli_real_escape_string($db, $_POST['mphil_claim_score']);
  $mphil_score_by_hod = mysqli_real_escape_string($db, $_POST['mphil_score_by_hod']);
  $mphil_encl = mysqli_real_escape_string($db, $_POST['mphil_encl']);


  $mphil_scholar_name2 = mysqli_real_escape_string($db, $_POST['mphil_scholar_name2']);
  $mphil_title_of_thesis2 = mysqli_real_escape_string($db, $_POST['mphil_title_of_thesis2']);
  $mphil_thesis_submitted2 = mysqli_real_escape_string($db, $_POST['mphil_thesis_submitted2']);
  $mphil_university2 = mysqli_real_escape_string($db, $_POST['mphil_university2']);
  $mphil_m_y2 = mysqli_real_escape_string($db, $_POST['mphil_m_y2']);
  $mphil_claim_score2 = mysqli_real_escape_string($db, $_POST['mphil_claim_score2']);
  $mphil_score_by_hod2 = mysqli_real_escape_string($db, $_POST['mphil_score_by_hod2']);
  $mphil_encl2 = mysqli_real_escape_string($db, $_POST['mphil_encl2']);



  $completed_title_project = mysqli_real_escape_string($db, $_POST['completed_title_project']);
  $completed_name_pi = mysqli_real_escape_string($db, $_POST['completed_name_pi']);
  $completed_fund = mysqli_real_escape_string($db, $_POST['completed_fund']);
  $completed_grant_sanction = mysqli_real_escape_string($db, $_POST['completed_grant_sanction']);
  $completed_duration_from = mysqli_real_escape_string($db, $_POST['completed_duration_from']);
  $completed_duration_to = mysqli_real_escape_string($db, $_POST['completed_duration_to']);
  $completed_claim_score = mysqli_real_escape_string($db, $_POST['completed_claim_score']);
  $completed_score_hod = mysqli_real_escape_string($db, $_POST['completed_score_hod']);
  $completed_encl = mysqli_real_escape_string($db, $_POST['completed_encl']);
  


$completed_title_project2 = mysqli_real_escape_string($db, $_POST['completed_title_project2']);
  $completed_name_pi2 = mysqli_real_escape_string($db, $_POST['completed_name_pi2']);
  $completed_fund2 = mysqli_real_escape_string($db, $_POST['completed_fund2']);
  $completed_grant_sanction2 = mysqli_real_escape_string($db, $_POST['completed_grant_sanction2']);
  $completed_duration_from2 = mysqli_real_escape_string($db, $_POST['completed_duration_from2']);
  $completed_duration_to2 = mysqli_real_escape_string($db, $_POST['completed_duration_to2']);
  $completed_claim_score2 = mysqli_real_escape_string($db, $_POST['completed_claim_score2']);
  $completed_score_hod2 = mysqli_real_escape_string($db, $_POST['completed_score_hod2']);
  $completed_encl2 = mysqli_real_escape_string($db, $_POST['completed_encl2']);
  
  


 $ongoing_title_project = mysqli_real_escape_string($db, $_POST['ongoing_title_project']);
  
  $ongoing_pi = mysqli_real_escape_string($db, $_POST['ongoing_pi']);
  $ongoing_funding_angency = mysqli_real_escape_string($db, $_POST['ongoing_funding_angency']);
  $ongoing_grant_sanction = mysqli_real_escape_string($db, $_POST['ongoing_grant_sanction']);
  $ongoing_duration_from = mysqli_real_escape_string($db, $_POST['ongoing_duration_from']);
  $ongoing_duration_to = mysqli_real_escape_string($db, $_POST['ongoing_duration_to']);
  $ongoing_claim_score = mysqli_real_escape_string($db, $_POST['ongoing_claim_score']);
  $ongoing_score_hod = mysqli_real_escape_string($db, $_POST['ongoing_score_hod']);
  $ongoing_encl = mysqli_real_escape_string($db, $_POST['ongoing_encl']);



  $ongoing_title_project2 = mysqli_real_escape_string($db, $_POST['ongoing_title_project2']);
  $ongoing_pi2 = mysqli_real_escape_string($db, $_POST['ongoing_pi2']);
  $ongoing_funding_angency2 = mysqli_real_escape_string($db, $_POST['ongoing_funding_angency2']);
  $ongoing_grant_sanction2 = mysqli_real_escape_string($db, $_POST['ongoing_grant_sanction2']);
  $ongoing_duration_from2 = mysqli_real_escape_string($db, $_POST['ongoing_duration_from2']);
  $ongoing_duration_to2 = mysqli_real_escape_string($db, $_POST['ongoing_duration_to2']);
  $ongoing_claim_score2 = mysqli_real_escape_string($db, $_POST['ongoing_claim_score2']);
  $ongoing_score_hod2 = mysqli_real_escape_string($db, $_POST['ongoing_score_hod2']);
  $ongoing_encl2 = mysqli_real_escape_string($db, $_POST['ongoing_encl2']);
  


  $consultancy_title_nature_project = mysqli_real_escape_string($db, $_POST['consultancy_title_nature_project']);
  $consultancy_agency = mysqli_real_escape_string($db, $_POST['consultancy_agency']);
  $consultancy_grant_component = mysqli_real_escape_string($db, $_POST['consultancy_grant_component']);
  $consultancy_duration_from = mysqli_real_escape_string($db, $_POST['consultancy_duration_from']);
  $consultancy_duration_to = mysqli_real_escape_string($db, $_POST['consultancy_duration_to']);
  $consultancy_claim_score = mysqli_real_escape_string($db, $_POST['consultancy_claim_score']);
  $consultancy_score_hod = mysqli_real_escape_string($db, $_POST['consultancy_score_hod']);
  $consultancy_encl = mysqli_real_escape_string($db, $_POST['consultancy_encl']);



  $consultancy_title_nature_project2 = mysqli_real_escape_string($db, $_POST['consultancy_title_nature_project2']);
  $consultancy_agency2 = mysqli_real_escape_string($db, $_POST['consultancy_agency2']);
  $consultancy_grant_component2 = mysqli_real_escape_string($db, $_POST['consultancy_grant_component2']);
  $consultancy_duration_from2 = mysqli_real_escape_string($db, $_POST['consultancy_duration_from2']);
  $consultancy_duration_to2 = mysqli_real_escape_string($db, $_POST['consultancy_duration_to2']);
  $consultancy_claim_score2 = mysqli_real_escape_string($db, $_POST['consultancy_claim_score2']);
  $consultancy_score_hod2 = mysqli_real_escape_string($db, $_POST['consultancy_score_hod2']);
  $consultancy_encl2 = mysqli_real_escape_string($db, $_POST['consultancy_encl2']);



 
  // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {

  	     $query = "INSERT INTO guidance_1 (ph_d_scholar_name,ph_d_title_of_thesis,ph_d_thesis_submitted,
                                          ph_d_university,ph_d_m_y,ph_d_claim_score,ph_d_score_by_hod,ph_d_encl

            ,ph_d_scholar_name2,ph_d_title_of_thesis2,ph_d_thesis_submitted2,ph_d_university2,
            ph_d_m_y2,ph_d_claim_score2,ph_d_score_by_hod2,ph_d_encl2

            ,mphil_scholar_name,mphil_title_of_thesis,mphil_thesis_submitted,mphil_university,mphil_m_y,
            mphil_claim_score,mphil_score_by_hod,mphil_encl


            ,mphil_scholar_name2,mphil_title_of_thesis2,mphil_thesis_submitted2,mphil_university2,mphil_m_y2,mphil_claim_score2,mphil_score_by_hod2,mphil_encl2

             ,completed_title_project,completed_name_pi,completed_fund,completed_grant_sanction,completed_duration_from,completed_duration_to,completed_claim_score,completed_score_hod,completed_encl

             ,completed_title_project2,completed_name_pi2,completed_fund2,completed_grant_sanction2,completed_duration_from2,completed_duration_to2,completed_claim_score2,completed_score_hod2,completed_encl2,user_id) 

                   VALUES('$ph_d_scholar_name','$ph_d_title_of_thesis','$ph_d_thesis_submitted',
                            '$ph_d_university','$ph_d_m_y','$ph_d_claim_score',
                            '$ph_d_score_by_hod','$ph_d_encl',

                            '$ph_d_scholar_name2','$ph_d_title_of_thesis2','$ph_d_thesis_submitted2',
                            '$ph_d_university2','$ph_d_m_y2','$ph_d_claim_score2',
                            '$ph_d_score_by_hod2','$ph_d_encl2',

                            '$mphil_scholar_name','$mphil_title_of_thesis','$mphil_thesis_submitted',
                            '$mphil_university','$mphil_m_y','$mphil_claim_score',
                            '$mphil_score_by_hod','$mphil_encl',

                            '$mphil_scholar_name2','$mphil_title_of_thesis2','$mphil_thesis_submitted2',
                            '$mphil_university2','$mphil_m_y2','$mphil_claim_score2',
                            '$mphil_score_by_hod2','$mphil_encl2',

                            '$completed_title_project','$completed_name_pi','$completed_fund',
                            '$completed_grant_sanction','$completed_duration_from','$completed_duration_to',
                            '$completed_claim_score','$completed_score_hod','$completed_encl'
                            ,

                            '$completed_title_project2','$completed_name_pi2','$completed_fund2',
                            '$completed_grant_sanction2','$completed_duration_from2','$completed_duration_to2',
                            '$completed_claim_score2','$completed_score_hod2','$completed_encl2' ,'$id' )"; 
        mysqli_query($db, $query);
                   
  }
    if (count($errors) == 0) {

         $query = "INSERT INTO guidance_2 (ongoing_title_project,ongoing_pi,ongoing_funding_angency,ongoing_grant_sanction,ongoing_duration_from,ongoing_duration_to,ongoing_claim_score,ongoing_score_hod,ongoing_encl



             ,ongoing_title_project2,ongoing_pi2,ongoing_funding_angency2,ongoing_grant_sanction2,ongoing_duration_from2,ongoing_duration_to2,ongoing_claim_score2,ongoing_score_hod2,ongoing_encl2

             ,consultancy_title_nature_project,consultancy_agency,consultancy_grant_component,consultancy_duration_from,consultancy_duration_to,consultancy_claim_score,consultancy_score_hod,consultancy_encl


             ,consultancy_title_nature_project2,consultancy_agency2,consultancy_grant_component2,consultancy_duration_from2,consultancy_duration_to2,consultancy_claim_score2,consultancy_score_hod2,consultancy_encl2 ,user_id) 

                   VALUES('$ongoing_title_project','$ongoing_pi','$ongoing_funding_angency',
                            '$ongoing_grant_sanction','$ongoing_duration_from','$ongoing_duration_to',
                            '$ongoing_claim_score','$ongoing_score_hod','$ongoing_encl',

                            '$ongoing_title_project2','$ongoing_pi2','$ongoing_funding_angency2',
                            '$ongoing_grant_sanction2','$ongoing_duration_from2','$ongoing_duration_to2',
                            '$ongoing_claim_score2','$ongoing_score_hod2','$ongoing_encl2',

                            '$consultancy_title_nature_project','$consultancy_agency','$consultancy_grant_component',
                            '$consultancy_duration_from','$consultancy_duration_to','$consultancy_claim_score',
                            '$consultancy_score_hod','$consultancy_encl',

                            '$consultancy_title_nature_project2','$consultancy_agency2','$consultancy_grant_component2',
                            '$consultancy_duration_from2','$consultancy_duration_to2','$consultancy_claim_score2',
                            '$consultancy_score_hod2','$consultancy_encl2' ,'$id')"; 


  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now  successfully submitted";
  	/*header('location: p_details.php');*/
  }
}





?>