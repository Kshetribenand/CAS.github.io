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


if (isset($_POST['ict_btn']))
 {
  // Activity- pedagogy1
//Claimed Score -pedagogy2
//Verified Score by HOD/Dean -pedagogy3
//Encl. No. pedagogy4
  $pedagogy1 = mysqli_real_escape_string($db, $_POST['pedagogy1']);
  $pedagogy2 = mysqli_real_escape_string($db, $_POST['pedagogy2']);
  $pedagogy3 = mysqli_real_escape_string($db, $_POST['pedagogy3']);
  $pedagogy4 = mysqli_real_escape_string($db, $_POST['pedagogy4']);
  $pedagogy5 = mysqli_real_escape_string($db, $_POST['pedagogy5']);
  $pedagogy6 = mysqli_real_escape_string($db, $_POST['pedagogy6']);
  $pedagogy7 = mysqli_real_escape_string($db, $_POST['pedagogy7']);
  $pedagogy8 = mysqli_real_escape_string($db, $_POST['pedagogy8']);


  $courses1 = mysqli_real_escape_string($db, $_POST['courses1']);
  $courses2 = mysqli_real_escape_string($db, $_POST['courses2']);
  $courses3 = mysqli_real_escape_string($db, $_POST['courses3']);
  $courses4 = mysqli_real_escape_string($db, $_POST['courses4']);
  $courses5 = mysqli_real_escape_string($db, $_POST['courses5']);
  $courses6 = mysqli_real_escape_string($db, $_POST['courses6']);
  $courses7 = mysqli_real_escape_string($db, $_POST['courses7']);
  $courses8 = mysqli_real_escape_string($db, $_POST['courses8']);


  $quadrants1 = mysqli_real_escape_string($db, $_POST['quadrants1']);
  $quadrants2 = mysqli_real_escape_string($db, $_POST['quadrants2']);
  $quadrants3 = mysqli_real_escape_string($db, $_POST['quadrants3']);
  $quadrants4 = mysqli_real_escape_string($db, $_POST['quadrants4']);
  $quadrants5 = mysqli_real_escape_string($db, $_POST['quadrants5']);
  $quadrants6 = mysqli_real_escape_string($db, $_POST['quadrants6']);
  $quadrants7 = mysqli_real_escape_string($db, $_POST['quadrants7']);
  $quadrants8 = mysqli_real_escape_string($db, $_POST['quadrants8']);


  $per_module1 = mysqli_real_escape_string($db, $_POST['per_module1']);
  $per_module2 = mysqli_real_escape_string($db, $_POST['per_module2']);
  $per_module3 = mysqli_real_escape_string($db, $_POST['per_module3']);
  $per_module4 = mysqli_real_escape_string($db, $_POST['per_module4']);
  $per_module5 = mysqli_real_escape_string($db, $_POST['per_module5']);
  $per_module6 = mysqli_real_escape_string($db, $_POST['per_module6']);
  $per_module7 = mysqli_real_escape_string($db, $_POST['per_module7']);
  $per_module8 = mysqli_real_escape_string($db, $_POST['per_module8']);



  $content1 = mysqli_real_escape_string($db, $_POST['content1']);
  $content2 = mysqli_real_escape_string($db, $_POST['content2']);
  $content3 = mysqli_real_escape_string($db, $_POST['content3']);
  $content4 = mysqli_real_escape_string($db, $_POST['content4']);
  $content5 = mysqli_real_escape_string($db, $_POST['content5']);
  $content6 = mysqli_real_escape_string($db, $_POST['content6']);
  $content7 = mysqli_real_escape_string($db, $_POST['content7']);
  $content8 = mysqli_real_escape_string($db, $_POST['content8']);
  


$coordinator1 = mysqli_real_escape_string($db, $_POST['coordinator1']);
  $coordinator2 = mysqli_real_escape_string($db, $_POST['coordinator2']);
  $coordinator3 = mysqli_real_escape_string($db, $_POST['coordinator3']);
  $coordinator4 = mysqli_real_escape_string($db, $_POST['coordinator4']);
  $coordinator5 = mysqli_real_escape_string($db, $_POST['coordinator5']);
  $coordinator6 = mysqli_real_escape_string($db, $_POST['coordinator6']);
  $coordinator7 = mysqli_real_escape_string($db, $_POST['coordinator7']);
  $coordinator8 = mysqli_real_escape_string($db, $_POST['coordinator8']);
  


 $e_Content1 = mysqli_real_escape_string($db, $_POST['e_Content1']);
  
  $e_Content2 = mysqli_real_escape_string($db, $_POST['e_Content2']);
  $e_Content3 = mysqli_real_escape_string($db, $_POST['e_Content3']);
  $e_Content4 = mysqli_real_escape_string($db, $_POST['e_Content4']);
  $e_Content5 = mysqli_real_escape_string($db, $_POST['e_Content5']);
  $e_Content6 = mysqli_real_escape_string($db, $_POST['e_Content6']);
  $e_Content7 = mysqli_real_escape_string($db, $_POST['e_Content7']);
  $e_Content8 = mysqli_real_escape_string($db, $_POST['e_Content8']);



  $e_Content_per_module1 = mysqli_real_escape_string($db, $_POST['e_Content_per_module1']);
  $e_Content_per_module2 = mysqli_real_escape_string($db, $_POST['e_Content_per_module2']);
  $e_Content_per_module3 = mysqli_real_escape_string($db, $_POST['e_Content_per_module3']);
  $e_Content_per_module4 = mysqli_real_escape_string($db, $_POST['e_Content_per_module4']);
  $e_Content_per_module5 = mysqli_real_escape_string($db, $_POST['e_Content_per_module5']);
  $e_Content_per_module6 = mysqli_real_escape_string($db, $_POST['e_Content_per_module6']);
  $e_Content_per_module7 = mysqli_real_escape_string($db, $_POST['e_Content_per_module7']);
  $e_Content_per_module8 = mysqli_real_escape_string($db, $_POST['e_Content_per_module8']);
  


  $e_Content_module_complete1 = mysqli_real_escape_string($db, $_POST['e_Content_module_complete1']);
  $e_Content_module_complete2 = mysqli_real_escape_string($db, $_POST['e_Content_module_complete2']);
  $e_Content_module_complete3 = mysqli_real_escape_string($db, $_POST['e_Content_module_complete3']);
  $e_Content_module_complete4 = mysqli_real_escape_string($db, $_POST['e_Content_module_complete4']);
  $e_Content_module_complete5 = mysqli_real_escape_string($db, $_POST['e_Content_module_complete5']);
  $e_Content_module_complete6 = mysqli_real_escape_string($db, $_POST['e_Content_module_complete6']);
  $e_Content_module_complete7 = mysqli_real_escape_string($db, $_POST['e_Content_module_complete7']);
  $e_Content_module_complete8 = mysqli_real_escape_string($db, $_POST['e_Content_module_complete8']);



  $e_Content_complete_course1 = mysqli_real_escape_string($db, $_POST['e_Content_complete_course1']);
  $e_Content_complete_course2 = mysqli_real_escape_string($db, $_POST['e_Content_complete_course2']);
  $e_Content_complete_course3 = mysqli_real_escape_string($db, $_POST['e_Content_complete_course3']);
  $e_Content_complete_course4 = mysqli_real_escape_string($db, $_POST['e_Content_complete_course4']);
  $e_Content_complete_course5 = mysqli_real_escape_string($db, $_POST['e_Content_complete_course5']);
  $e_Content_complete_course6 = mysqli_real_escape_string($db, $_POST['e_Content_complete_course6']);
  $e_Content_complete_course7 = mysqli_real_escape_string($db, $_POST['e_Content_complete_course7']);
  $e_Content_complete_course8 = mysqli_real_escape_string($db, $_POST['e_Content_complete_course8']);



 
  // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {

  	     $query = "INSERT INTO ict_1 (pedagogy1,pedagogy2,pedagogy3,
                                          pedagogy4,pedagogy5,pedagogy6,pedagogy7,pedagogy8

            ,courses1,courses2,courses3,courses4,
            courses5,courses6,courses7,courses8

            ,quadrants1,quadrants2,quadrants3,quadrants4,quadrants5,
            quadrants6,quadrants7,quadrants8


            ,per_module1,per_module2,per_module3,per_module4,per_module5,per_module6,per_module7,per_module8

             ,content1,content2,content3,content4,content5,content6,content7,content8 ,user_id) 

                   VALUES('$pedagogy1','$pedagogy2','$pedagogy3',
                            '$pedagogy4','$pedagogy5','$pedagogy6',
                            '$pedagogy7','$pedagogy8',

                            '$courses1','$courses2','$courses3',
                            '$courses4','$courses5','$courses6',
                            '$courses7','$courses8',

                            '$quadrants1','$quadrants2','$quadrants3',
                            '$quadrants4','$quadrants5','$quadrants6',
                            '$quadrants7','$quadrants8',

                            '$per_module1','$per_module2','$per_module3',
                            '$per_module4','$per_module5','$per_module6',
                            '$per_module7','$per_module8',

                            '$content1','$content2','$content3',
                            '$content4','$content5','$content6',
                            '$content7','$content8','$id' )"; 
        mysqli_query($db, $query);
                   
  }
    if (count($errors) == 0) {

         $query = "INSERT INTO ict_2 (coordinator1,coordinator2,coordinator3,coordinator4,coordinator5,coordinator6,coordinator7,coordinator8



             ,e_Content1,e_Content2,e_Content3,e_Content4,e_Content5,e_Content6,e_Content7,e_Content8

             ,e_Content_per_module1,e_Content_per_module2,e_Content_per_module3,e_Content_per_module4,e_Content_per_module5,e_Content_per_module6,e_Content_per_module7,e_Content_per_module8


             ,e_Content_module_complete1,e_Content_module_complete2,e_Content_module_complete3,e_Content_module_complete4,e_Content_module_complete5,e_Content_module_complete6,e_Content_module_complete7,e_Content_module_complete8


             ,e_Content_complete_course1,e_Content_complete_course2,e_Content_complete_course3,e_Content_complete_course4,e_Content_complete_course5,e_Content_complete_course6,e_Content_complete_course7,e_Content_complete_course8,user_id ) 

                   VALUES('$coordinator1','$coordinator2','$coordinator3',
                            '$coordinator4','$coordinator5','$coordinator6',
                            '$coordinator7','$coordinator8',

                            '$e_Content1','$e_Content2','$e_Content3',
                            '$e_Content4','$e_Content5','$e_Content6',
                            '$e_Content7','$e_Content8',

                            '$e_Content_per_module1','$e_Content_per_module2','$e_Content_per_module3',
                            '$e_Content_per_module4','$e_Content_per_module5','$e_Content_per_module6',
                            '$e_Content_per_module7','$e_Content_per_module8',

                            '$e_Content_module_complete1','$e_Content_module_complete2','$e_Content_module_complete3',
                            '$e_Content_module_complete4','$e_Content_module_complete5','$e_Content_module_complete6',
                            '$e_Content_module_complete7','$e_Content_module_complete8',

                            '$e_Content_complete_course1','$e_Content_complete_course2','$e_Content_complete_course3',
                            '$e_Content_complete_course4','$e_Content_complete_course5','$e_Content_complete_course6',
                            '$e_Content_complete_course7','$e_Content_complete_course8','$id' )"; 


  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now  successfully submitted";
  	/*header('location: p_details.php');*/
  }
}





?>