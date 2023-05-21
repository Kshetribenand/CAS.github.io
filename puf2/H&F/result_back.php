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

$query1 = mysqli_query($conn,"select research_paper_1,claimed_score_1 from research where user_id = '$id'");
$result = mysqli_num_rows($query1);

?>