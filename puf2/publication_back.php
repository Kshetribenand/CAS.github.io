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


if (isset($_POST['publication_btn']))
 {
  // receive all input values from the form
  $Title_of_book_International = mysqli_real_escape_string($db, $_POST['Title_of_book_International']);
  $Author_International = mysqli_real_escape_string($db, $_POST['Author_International']);
  $Co_Author_International = mysqli_real_escape_string($db, $_POST['Co_Author_International']);
  $name_of_publisher_International = mysqli_real_escape_string($db, $_POST['name_of_publisher_International']);
  $ISBN_International = mysqli_real_escape_string($db, $_POST['ISBN_International']);
  $Claimed_Score_International = mysqli_real_escape_string($db, $_POST['Claimed_Score_International']);
  $HOD_Dean_International = mysqli_real_escape_string($db, $_POST['HOD_Dean_International']);
  $Encl_No_International = mysqli_real_escape_string($db, $_POST['Encl_No_International']);


  $Title_of_book_International_2 = mysqli_real_escape_string($db, $_POST['Title_of_book_International_2']);
  $Author_International_2 = mysqli_real_escape_string($db, $_POST['Author_International_2']);
  $Co_Author_International_2 = mysqli_real_escape_string($db, $_POST['Co_Author_International_2']);
  $name_of_publisher_International_2 = mysqli_real_escape_string($db, $_POST['name_of_publisher_International_2']);
  $ISBN_International_2 = mysqli_real_escape_string($db, $_POST['ISBN_International_2']);
  $Claimed_Score_International_2 = mysqli_real_escape_string($db, $_POST['Claimed_Score_International_2']);
  $HOD_Dean_International_2 = mysqli_real_escape_string($db, $_POST['HOD_Dean_International_2']);
  $Encl_No_International_2 = mysqli_real_escape_string($db, $_POST['Encl_No_International_2']);


  $Title_of_book_National = mysqli_real_escape_string($db, $_POST['Title_of_book_National']);
  $Author_National = mysqli_real_escape_string($db, $_POST['Author_National']);
  $Co_Author_National = mysqli_real_escape_string($db, $_POST['Co_Author_National']);
  $name_of_publisher_National = mysqli_real_escape_string($db, $_POST['name_of_publisher_National']);
  $ISBN_National = mysqli_real_escape_string($db, $_POST['ISBN_National']);
  $Claimed_Score_National = mysqli_real_escape_string($db, $_POST['Claimed_Score_National']);
  $HOD_Dean_National = mysqli_real_escape_string($db, $_POST['HOD_Dean_National']);
  $Encl_No_National = mysqli_real_escape_string($db, $_POST['Encl_No_National']);


  $Title_of_book_National_4 = mysqli_real_escape_string($db, $_POST['Title_of_book_National_4']);
  $Author_National_4 = mysqli_real_escape_string($db, $_POST['Author_National_4']);
  $Co_Author_National_4 = mysqli_real_escape_string($db, $_POST['Co_Author_National_4']);
  $name_of_publisher_National_4 = mysqli_real_escape_string($db, $_POST['name_of_publisher_National_4']);
  $ISBN_National_4 = mysqli_real_escape_string($db, $_POST['ISBN_National_4']);
  $Claimed_Score_National_4 = mysqli_real_escape_string($db, $_POST['Claimed_Score_National_4']);
  $HOD_Dean_National_4 = mysqli_real_escape_string($db, $_POST['HOD_Dean_National_4']);
  $Encl_No_National_4 = mysqli_real_escape_string($db, $_POST['Encl_No_National_4']);



  $Title_of_book_Edited_Book = mysqli_real_escape_string($db, $_POST['Title_of_book_Edited_Book']);
  $Author_Edited_Book = mysqli_real_escape_string($db, $_POST['Author_Edited_Book']);
  $Co_Author_Edited_Book = mysqli_real_escape_string($db, $_POST['Co_Author_Edited_Book']);
  $name_of_publisher_Edited_Book = mysqli_real_escape_string($db, $_POST['name_of_publisher_Edited_Book']);
  $ISBN_Edited_Book = mysqli_real_escape_string($db, $_POST['ISBN_Edited_Book']);
  $Claimed_Score_Edited_Book = mysqli_real_escape_string($db, $_POST['Claimed_Score_Edited_Book']);
  $HOD_Dean_Edited_Book = mysqli_real_escape_string($db, $_POST['HOD_Dean_Edited_Book']);
  $Encl_No_Edited_Book = mysqli_real_escape_string($db, $_POST['Encl_No_Edited_Book']);
  


$Title_of_book_Edited_Book_6 = mysqli_real_escape_string($db, $_POST['Title_of_book_Edited_Book_6']);
  $Author_Edited_Book_6 = mysqli_real_escape_string($db, $_POST['Author_Edited_Book_6']);
  $Co_Author_Edited_Book_6 = mysqli_real_escape_string($db, $_POST['Co_Author_Edited_Book_6']);
  $name_of_publisher_Edited_Book_6 = mysqli_real_escape_string($db, $_POST['name_of_publisher_Edited_Book_6']);
  $ISBN_Edited_Book_6 = mysqli_real_escape_string($db, $_POST['ISBN_Edited_Book_6']);
  $Claimed_Score_Edited_Book_6 = mysqli_real_escape_string($db, $_POST['Claimed_Score_Edited_Book_6']);
  $HOD_Dean_Edited_Book_6 = mysqli_real_escape_string($db, $_POST['HOD_Dean_Edited_Book_6']);
  $Encl_No_Edited_Book_6 = mysqli_real_escape_string($db, $_POST['Encl_No_Edited_Book_6']);
  


 $Title_of_book_Editor_Int = mysqli_real_escape_string($db, $_POST['Title_of_book_Editor_Int']);
  
  $Author_Editor_Int = mysqli_real_escape_string($db, $_POST['Author_Editor_Int']);
  $Co_Author_Editor_Int = mysqli_real_escape_string($db, $_POST['Co_Author_Editor_Int']);
  $name_of_publisher_Editor_Int = mysqli_real_escape_string($db, $_POST['name_of_publisher_Editor_Int']);
  $ISBN_Editor_Int = mysqli_real_escape_string($db, $_POST['ISBN_Editor_Int']);
  $Claimed_Score_Editor_Int = mysqli_real_escape_string($db, $_POST['Claimed_Score_Editor_Int']);
  $HOD_Dean_Editor_Int = mysqli_real_escape_string($db, $_POST['HOD_Dean_Editor_Int']);
  $Encl_No_Editor_Int = mysqli_real_escape_string($db, $_POST['Encl_No_Editor_Int']);



  $Title_of_book_Editor_Int_8 = mysqli_real_escape_string($db, $_POST['Title_of_book_Editor_Int_8']);
  $Author_Editor_Int_8 = mysqli_real_escape_string($db, $_POST['Author_Editor_Int_8']);
  $Co_Author_Editor_Int_8 = mysqli_real_escape_string($db, $_POST['Co_Author_Editor_Int_8']);
  $name_of_publisher_Editor_Int_8 = mysqli_real_escape_string($db, $_POST['name_of_publisher_Editor_Int_8']);
  $ISBN_Editor_Int_8 = mysqli_real_escape_string($db, $_POST['ISBN_Editor_Int_8']);
  $Claimed_Score_Editor_Int_8 = mysqli_real_escape_string($db, $_POST['Claimed_Score_Editor_Int_8']);
  $HOD_Dean_Editor_Int_8 = mysqli_real_escape_string($db, $_POST['HOD_Dean_Editor_Int_8']);
  $Encl_No_Editor_Int_8 = mysqli_real_escape_string($db, $_POST['Encl_No_Editor_Int_8']);
  


  $Title_of_book_Editor_Nat = mysqli_real_escape_string($db, $_POST['Title_of_book_Editor_Nat']);
  $Author_Editor_Nat = mysqli_real_escape_string($db, $_POST['Author_Editor_Nat']);
  $Co_Author_Editor_Nat = mysqli_real_escape_string($db, $_POST['Co_Author_Editor_Nat']);
  $name_of_publisher_Editor_Nat = mysqli_real_escape_string($db, $_POST['name_of_publisher_Editor_Nat']);
  $ISBN_Editor_Nat = mysqli_real_escape_string($db, $_POST['ISBN_Editor_Nat']);
  $Claimed_Score_Editor_Nat = mysqli_real_escape_string($db, $_POST['Claimed_Score_Editor_Nat']);
  $HOD_Dean_Editor_Nat = mysqli_real_escape_string($db, $_POST['HOD_Dean_Editor_Nat']);
  $Encl_No_Editor_Nat = mysqli_real_escape_string($db, $_POST['Encl_No_Editor_Nat']);



  $Title_of_book_Editor_Nat_10 = mysqli_real_escape_string($db, $_POST['Title_of_book_Editor_Nat_10']);
  $Author_Editor_Nat_10 = mysqli_real_escape_string($db, $_POST['Author_Editor_Nat_10']);
  $Co_Author_Editor_Nat_10 = mysqli_real_escape_string($db, $_POST['Co_Author_Editor_Nat_10']);
  $name_of_publisher_Editor_Nat_10 = mysqli_real_escape_string($db, $_POST['name_of_publisher_Editor_Nat_10']);
  $ISBN_Editor_Nat_10 = mysqli_real_escape_string($db, $_POST['ISBN_Editor_Nat_10']);
  $Claimed_Score_Editor_Nat_10 = mysqli_real_escape_string($db, $_POST['Claimed_Score_Editor_Nat_10']);
  $HOD_Dean_Editor_Nat_10 = mysqli_real_escape_string($db, $_POST['HOD_Dean_Editor_Nat_10']);
  $Encl_No_Editor_Nat_10 = mysqli_real_escape_string($db, $_POST['Encl_No_Editor_Nat_10']);



  $Title_of_book_Research = mysqli_real_escape_string($db, $_POST['Title_of_book_Research']);
  
  $Author_Research = mysqli_real_escape_string($db, $_POST['Author_Research']);
  $Co_Author_Research = mysqli_real_escape_string($db, $_POST['Co_Author_Research']);
  $name_of_publisher_Research = mysqli_real_escape_string($db, $_POST['name_of_publisher_Research']);
  $ISBN_Research = mysqli_real_escape_string($db, $_POST['ISBN_Research']);
  $Claimed_Score_Research = mysqli_real_escape_string($db, $_POST['Claimed_Score_Research']);
  $HOD_Dean_Research = mysqli_real_escape_string($db, $_POST['HOD_Dean_Research']);
  $Encl_No_Research = mysqli_real_escape_string($db, $_POST['Encl_No_Research']);




  $Title_of_book_Research_12 = mysqli_real_escape_string($db, $_POST['Title_of_book_Research_12']);
  
  $Author_Research_12 = mysqli_real_escape_string($db, $_POST['Author_Research_12']);
 
  $Co_Author_Research_12 = mysqli_real_escape_string($db, $_POST['Co_Author_Research_12']);
  $name_of_publisher_Research_12 = mysqli_real_escape_string($db, $_POST['name_of_publisher_Research_12']);
  $ISBN_Research_12 = mysqli_real_escape_string($db, $_POST['ISBN_Research_12']);
  $Claimed_Score_Research_12 = mysqli_real_escape_string($db, $_POST['Claimed_Score_Research_12']);
  $HOD_Dean_Research_12 = mysqli_real_escape_string($db, $_POST['HOD_Dean_Research_12']);
  $Encl_No_Research_12 = mysqli_real_escape_string($db, $_POST['Encl_No_Research_12']);




  $Title_of_book_Book = mysqli_real_escape_string($db, $_POST['Title_of_book_Book']);
  
  $Author_Book = mysqli_real_escape_string($db, $_POST['Author_Book']);
 
  $Co_Author_Book = mysqli_real_escape_string($db, $_POST['Co_Author_Book']);
  $name_of_publisher_Book = mysqli_real_escape_string($db, $_POST['name_of_publisher_Book']);
  $ISBN_Book = mysqli_real_escape_string($db, $_POST['ISBN_Book']);
  $Claimed_Score_Book = mysqli_real_escape_string($db, $_POST['Claimed_Score_Book']);
  $HOD_Dean_Book = mysqli_real_escape_string($db, $_POST['HOD_Dean_Book']);
  $Encl_No_Book = mysqli_real_escape_string($db, $_POST['Encl_No_Book']);



  $Title_of_book_Book_14 = mysqli_real_escape_string($db, $_POST['Title_of_book_Book_14']);
  
  $Author_Book_14 = mysqli_real_escape_string($db, $_POST['Author_Book_14']);
 
  $Co_Author_Book_14 = mysqli_real_escape_string($db, $_POST['Co_Author_Book_14']);
  $name_of_publisher_Book_14 = mysqli_real_escape_string($db, $_POST['name_of_publisher_Book_14']);
  $ISBN_Book_14 = mysqli_real_escape_string($db, $_POST['ISBN_Book_14']);
  $Claimed_Score_Book_14 = mysqli_real_escape_string($db, $_POST['Claimed_Score_Book_14']);
  $HOD_Dean_Book_14 = mysqli_real_escape_string($db, $_POST['HOD_Dean_Book_14']);
  $Encl_No_Book_14 = mysqli_real_escape_string($db, $_POST['Encl_No_Book_14']);
  // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {

  	     $query = "INSERT INTO publication1 (Title_of_book_International,Author_International,Co_Author_International,
                                          name_of_publisher_International,ISBN_International,Claimed_Score_International,HOD_Dean_International,Encl_No_International

            ,Title_of_book_International_2,Author_International_2,Co_Author_International_2,name_of_publisher_International_2,
            ISBN_International_2,Claimed_Score_International_2,HOD_Dean_International_2,Encl_No_International_2

            ,Title_of_book_National,Author_National,Co_Author_National,name_of_publisher_National,ISBN_National,
            Claimed_Score_National,HOD_Dean_National,Encl_No_National


            ,Title_of_book_National_4,Author_National_4,Co_Author_National_4,name_of_publisher_National_4,ISBN_National_4,Claimed_Score_National_4,HOD_Dean_National_4,Encl_No_National_4

             ,Title_of_book_Edited_Book,Author_Edited_Book,Co_Author_Edited_Book,name_of_publisher_Edited_Book,ISBN_Edited_Book,Claimed_Score_Edited_Book,HOD_Dean_Edited_Book,Encl_No_Edited_Book

             ,Title_of_book_Edited_Book_6,Author_Edited_Book_6,Co_Author_Edited_Book_6,name_of_publisher_Edited_Book_6,ISBN_Edited_Book_6,Claimed_Score_Edited_Book_6,HOD_Dean_Edited_Book_6,Encl_No_Edited_Book_6

             ,Title_of_book_Editor_Int,Author_Editor_Int,Co_Author_Editor_Int,name_of_publisher_Editor_Int,ISBN_Editor_Int,Claimed_Score_Editor_Int,HOD_Dean_Editor_Int,Encl_No_Editor_Int,user_id ) 

                   VALUES('$Title_of_book_International','$Author_International','$Co_Author_International',
                            '$name_of_publisher_International','$ISBN_International','$Claimed_Score_International',
                            '$HOD_Dean_International','$Encl_No_International',

                            '$Title_of_book_International_2','$Author_International_2','$Co_Author_International_2',
                            '$name_of_publisher_International_2','$ISBN_International_2','$Claimed_Score_International_2',
                            '$HOD_Dean_International_2','$Encl_No_International_2',

                            '$Title_of_book_National','$Author_National','$Co_Author_National',
                            '$name_of_publisher_National','$ISBN_National','$Claimed_Score_National',
                            '$HOD_Dean_National','$Encl_No_National',

                            '$Title_of_book_National_4','$Author_National_4','$Co_Author_National_4',
                            '$name_of_publisher_National_4','$ISBN_National_4','$Claimed_Score_National_4',
                            '$HOD_Dean_National_4','$Encl_No_National_4',

                            '$Title_of_book_Edited_Book','$Author_Edited_Book','$Co_Author_Edited_Book',
                            '$name_of_publisher_Edited_Book','$ISBN_Edited_Book','$Claimed_Score_Edited_Book',
                            '$HOD_Dean_Edited_Book','$Encl_No_Edited_Book',

                            '$Title_of_book_Edited_Book_6','$Author_Edited_Book_6','$Co_Author_Edited_Book_6',
                            '$name_of_publisher_Edited_Book_6','$ISBN_Edited_Book_6','$Claimed_Score_Edited_Book_6',
                            '$HOD_Dean_Edited_Book_6','$Encl_No_Edited_Book_6',

                            '$Title_of_book_Editor_Int','$Author_Editor_Int','$Co_Author_Editor_Int',
                            '$name_of_publisher_Editor_Int','$ISBN_Editor_Int','$Claimed_Score_Editor_Int',
                            '$HOD_Dean_Editor_Int','$Encl_No_Editor_Int','$id'
                            )"; 
      
                    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now  successfully submitted";
    /*header('location: p_details.php');*/
  }
    if (count($errors) == 0) {

         $query = "INSERT INTO publication2 (Title_of_book_Editor_Int_8,Author_Editor_Int_8,Co_Author_Editor_Int_8,name_of_publisher_Editor_Int_8,ISBN_Editor_Int_8,Claimed_Score_Editor_Int_8,HOD_Dean_Editor_Int_8,Encl_No_Editor_Int_8



             ,Title_of_book_Editor_Nat,Author_Editor_Nat,Co_Author_Editor_Nat,name_of_publisher_Editor_Nat,ISBN_Editor_Nat,Claimed_Score_Editor_Nat,HOD_Dean_Editor_Nat,Encl_No_Editor_Nat

             ,Title_of_book_Editor_Nat_10,Author_Editor_Nat_10,Co_Author_Editor_Nat_10,name_of_publisher_Editor_Nat_10,ISBN_Editor_Nat_10,Claimed_Score_Editor_Nat_10,HOD_Dean_Editor_Nat_10,Encl_No_Editor_Nat_10


             ,Title_of_book_Research,Author_Research,Co_Author_Research,name_of_publisher_Research,ISBN_Research,Claimed_Score_Research,HOD_Dean_Research,Encl_No_Research


             ,Title_of_book_Research_12,Author_Research_12,Co_Author_Research_12,name_of_publisher_Research_12,ISBN_Research_12,Claimed_Score_Research_12,HOD_Dean_Research_12,Encl_No_Research_12


             ,Title_of_book_Book,Author_Book,Co_Author_Book,name_of_publisher_Book,ISBN_Book,Claimed_Score_Book,HOD_Dean_Book,Encl_No_Book


             ,Title_of_book_Book_14,Author_Book_14,Co_Author_Book_14,name_of_publisher_Book_14,ISBN_Book_14,Claimed_Score_Book_14,HOD_Dean_Book_14,Encl_No_Book_14
             ,user_id ) 

                   VALUES('$Title_of_book_Editor_Int_8','$Author_Editor_Int_8','$Co_Author_Editor_Int_8',
                            '$name_of_publisher_Editor_Int_8','$ISBN_Editor_Int_8','$Claimed_Score_Editor_Int_8',
                            '$HOD_Dean_Editor_Int_8','$Encl_No_Editor_Int_8',

                            '$Title_of_book_Editor_Nat','$Author_Editor_Nat','$Co_Author_Editor_Nat',
                            '$name_of_publisher_Editor_Nat','$ISBN_Editor_Nat','$Claimed_Score_Editor_Nat',
                            '$HOD_Dean_Editor_Nat','$Encl_No_Editor_Nat',

                            '$Title_of_book_Editor_Nat_10','$Author_Editor_Nat_10','$Co_Author_Editor_Nat_10',
                            '$name_of_publisher_Editor_Nat_10','$ISBN_Editor_Nat_10','$Claimed_Score_Editor_Nat_10',
                            '$HOD_Dean_Editor_Nat_10','$Encl_No_Editor_Nat_10',

                            '$Title_of_book_Research','$Author_Research','$Co_Author_Research',
                            '$name_of_publisher_Research','$ISBN_Research','$Claimed_Score_Research',
                            '$HOD_Dean_Research','$Encl_No_Research',

                            '$Title_of_book_Research_12','$Author_Research_12','$Co_Author_Research_12',
                            '$name_of_publisher_Research_12','$ISBN_Research_12','$Claimed_Score_Research_12',
                            '$HOD_Dean_Research_12','$Encl_No_Research_12',

                            '$Title_of_book_Book','$Author_Book','$Co_Author_Book',
                            '$name_of_publisher_Book','$ISBN_Book','$Claimed_Score_Book',
                            '$HOD_Dean_Book','$Encl_No_Book',

                            '$Title_of_book_Book_14','$Author_Book_14','$Co_Author_Book_14',
                            '$name_of_publisher_Book_14','$ISBN_Book_14','$Claimed_Score_Book_14',
                            '$HOD_Dean_Book_14','$Encl_No_Book_14','$id'
                            )"; 


  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now  successfully submitted";
  	/*header('location: p_details.php');*/
  }
}





?>