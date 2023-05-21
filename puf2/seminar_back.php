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


if (isset($_POST['seminar_btn']))
 {
  // receive all input values from the form
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $event_name = mysqli_real_escape_string($db, $_POST['event_name']);
  $organiser_institute = mysqli_real_escape_string($db, $_POST['organiser_institute']);
  $duration = mysqli_real_escape_string($db, $_POST['duration']);
  $invited_oral_poster = mysqli_real_escape_string($db, $_POST['invited_oral_poster']);
  $int_national_or_any_level = mysqli_real_escape_string($db, $_POST['int_national_or_any_level']);
  $claim_score = mysqli_real_escape_string($db, $_POST['claim_score']);
  $score_hod = mysqli_real_escape_string($db, $_POST['score_hod']);
  $encl = mysqli_real_escape_string($db, $_POST['encl']);




  $title2 = mysqli_real_escape_string($db, $_POST['title2']);
  $event_name2 = mysqli_real_escape_string($db, $_POST['event_name2']);
  $organiser_institute2 = mysqli_real_escape_string($db, $_POST['organiser_institute2']);
  $duration2 = mysqli_real_escape_string($db, $_POST['duration2']);
  $invited_oral_poster2 = mysqli_real_escape_string($db, $_POST['invited_oral_poster2']);
  $int_national_or_any_level2 = mysqli_real_escape_string($db, $_POST['int_national_or_any_level2']);
  $claim_score2 = mysqli_real_escape_string($db, $_POST['claim_score2']);
  $score_hod2 = mysqli_real_escape_string($db, $_POST['score_hod2']);
  $encl2 = mysqli_real_escape_string($db, $_POST['encl2']);




  $period_from = mysqli_real_escape_string($db, $_POST['period_from']);
  $period_to = mysqli_real_escape_string($db, $_POST['period_to']);
  $from_year = mysqli_real_escape_string($db, $_POST['from_year']);
  $to_year = mysqli_real_escape_string($db, $_POST['to_year']);
  $first_sem = mysqli_real_escape_string($db, $_POST['first_sem']);
  $sec_sem = mysqli_real_escape_string($db, $_POST['sec_sem']);
  $third_sem = mysqli_real_escape_string($db, $_POST['third_sem']);
  $fourth_sem = mysqli_real_escape_string($db, $_POST['fourth_sem']);
  $fifth_sem = mysqli_real_escape_string($db, $_POST['fifth_sem']);
  $six_sem = mysqli_real_escape_string($db, $_POST['six_sem']);
  $total_claimed_score = mysqli_real_escape_string($db, $_POST['total_claimed_score']);



  $total_claimed_first_sem = mysqli_real_escape_string($db, $_POST['total_claimed_first_sem']);
  $total_claimed_sec_sem = mysqli_real_escape_string($db, $_POST['total_claimed_sec_sem']);
  $total_claimed_thirth_sem = mysqli_real_escape_string($db, $_POST['total_claimed_thirth_sem']);
  $total_claimed_fourth_sem = mysqli_real_escape_string($db, $_POST['total_claimed_fourth_sem']);
  $total_claimed_fifth_sem = mysqli_real_escape_string($db, $_POST['total_claimed_fifth_sem']);
  $total_claimed_six_sem = mysqli_real_escape_string($db, $_POST['total_claimed_six_sem']);
  $total_claimed_all_sem = mysqli_real_escape_string($db, $_POST['total_claimed_all_sem']);



  $from_period = mysqli_real_escape_string($db, $_POST['from_period']);
  $to_period = mysqli_real_escape_string($db, $_POST['to_period']);
  $from_year = mysqli_real_escape_string($db, $_POST['from_year']);
  $to_year = mysqli_real_escape_string($db, $_POST['to_year']);
  $first_sem = mysqli_real_escape_string($db, $_POST['first_sem']);
  $sec_sem = mysqli_real_escape_string($db, $_POST['sec_sem']);
  $third_sem = mysqli_real_escape_string($db, $_POST['third_sem']);
$fourth_sem = mysqli_real_escape_string($db, $_POST['fourth_sem']);
  $fifth_sem = mysqli_real_escape_string($db, $_POST['fifth_sem']);
  $six_sem = mysqli_real_escape_string($db, $_POST['six_sem']);
  $total_claimed_score = mysqli_real_escape_string($db, $_POST['total_claimed_score']);



  $total_claimed_first_sem = mysqli_real_escape_string($db, $_POST['total_claimed_first_sem']);
  $total_claimed_sec_sem = mysqli_real_escape_string($db, $_POST['total_claimed_sec_sem']);
  $total_claimed_thirth_sem = mysqli_real_escape_string($db, $_POST['total_claimed_thirth_sem']);
  $total_claimed_fourth_sem = mysqli_real_escape_string($db, $_POST['total_claimed_fourth_sem']);
  $total_claimed_fifth_sem = mysqli_real_escape_string($db, $_POST['total_claimed_fifth_sem']);
  $total_claimed_six_sem = mysqli_real_escape_string($db, $_POST['total_claimed_six_sem']);
  $total_claimed_all_score = mysqli_real_escape_string($db, $_POST['total_claimed_all_score']);
  
  





 
  // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {

  	     $query = "INSERT INTO invited_lecture (title,event_name,organiser_institute,
                                          duration,invited_oral_poster,int_national_or_any_level,claim_score,score_hod,encl

                                        ,title2,event_name2,organiser_institute2,duration2,
                                         invited_oral_poster2,int_national_or_any_level2,claim_score2,score_hod2,encl2,user_id) 

                   VALUES('$title','$event_name','$organiser_institute',
                            '$duration','$invited_oral_poster','$int_national_or_any_level',
                            '$claim_score','$score_hod','$encl',

                            '$title2','$event_name2','$organiser_institute2',
                            '$duration2','$invited_oral_poster2','$int_national_or_any_level2',
                            '$claim_score2','$score_hod2','$encl2','$id' )"; 
        mysqli_query($db, $query);
                   
  }
    if (count($errors) == 0) {

         $query = "INSERT INTO applicant_claimed_score_in_research_component (period_from,period_to,from_year,to_year,first_sem,sec_sem,third_sem,
                                            fourth_sem,fifth_sem,six_sem,total_claimed_score

                                            ,total_claimed_first_sem,total_claimed_sec_sem,total_claimed_thirth_sem,
                                            total_claimed_fourth_sem,total_claimed_fifth_sem,total_claimed_six_sem,total_claimed_all_sem,user_id ) 

                   VALUES('$period_from','$period_to','$from_year',
                            '$to_year','$first_sem','$sec_sem',
                            '$third_sem','$fourth_sem','$fifth_sem',
                            '$six_sem','$total_claimed_score',



                            '$total_claimed_first_sem',
                            '$total_claimed_sec_sem','$total_claimed_thirth_sem','$total_claimed_fourth_sem',
                            '$total_claimed_fifth_sem','$total_claimed_six_sem','$total_claimed_all_sem','$id')"; 


  	mysqli_query($db, $query);
  	
  }
  if (count($errors) == 0) {

         $query = "INSERT INTO verified_score_by_the_hod_dean_in_research_component (from_period,to_period,from_year,to_year,first_sem,sec_sem,
                                            third_sem,fourth_sem,fifth_sem,six_sem,total_claimed_score,


                                        total_claimed_first_sem,total_claimed_sec_sem,total_claimed_thirth_sem,
                                         total_claimed_fourth_sem,total_claimed_fifth_sem,total_claimed_six_sem,total_claimed_all_score,user_id) 

                   VALUES('$from_period','$to_period','$from_year',
                            '$to_year','$first_sem','$sec_sem',
                            '$third_sem','$fourth_sem','$fifth_sem','$six_sem','$total_claimed_score',

                            '$total_claimed_first_sem','$total_claimed_sec_sem','$total_claimed_thirth_sem',
                            '$total_claimed_fourth_sem','$total_claimed_fifth_sem','$total_claimed_six_sem',
                            '$total_claimed_all_score','$id')"; 
        mysqli_query($db, $query);
        $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now  successfully submitted";
    /*header('location: p_details.php');*/           
  }
}





?>