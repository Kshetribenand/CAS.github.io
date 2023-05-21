<?php

  // Include Connection
  include('config2.php');
  include('dbConfig.php');
  if (!isset($_SESSION['USER_ID'])) {
  header("location:login.php");
  die();
}


  
  $user = $_SESSION['UNSER_NAME'];
  $query = mysqli_query($conn,"select * from login where email = '$user'");
  $row =mysqli_fetch_array($query);
  $id =  $row['id'];


  $query1 = mysqli_query($conn,"select id from login where id = '$id' ");
        $result = mysqli_num_rows($query1);
          if ($result){
             $rows =  mysqli_fetch_array($query1);
             //echo implode(" ",$rows);
             
             $user_id = $rows['id'];
          
              $txt = $_POST['txt'];
              $txt1 =  $_POST['txt1'];
              $sql = "INSERT INTO to_do_list (txt , txt1, user_id) VALUES ('$txt','$txt1','$user_id')";
              $result = mysqli_query($conn, $sql);

  if ($result) {
    echo 3;
    
  }
  
  else {
    echo "Error: {$sql}" . mysqli_error($conn);
  }  
}
/*
  if (isset($_POST['btn']))
 {
  // receive all input values from the form
  $txt = mysqli_real_escape_string($db, $_POST['txt_c']);
  $txt1 = mysqli_real_escape_string($db, $_POST['txt1_c']);

    $query = "INSERT INTO to_do_list (txt , txt1) VALUES ('$txt','$txt1')";
    $result = mysqli_query($conn, $sql);
     if ($result) {
    echo 2;
  }else {
    echo "Error: {$sql}" . mysqli_error($conn);
  }  


    mysqli_query($db, $query);
    $_SESSION['success'] = "You are now  successfully submitted";

  }*/

?>
