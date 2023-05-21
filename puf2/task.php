<?php
  include 'config1.php';
  include('dbConfig.php');
  include('config2.php');
if (!isset($_SESSION['USER_ID'])) {
  header("location:login.php");
  die();
}

$user = $_SESSION['UNSER_NAME'];
$query = mysqli_query($conn,"select * from login where email = '$user'");
$row =mysqli_fetch_array($query);
$id = $row['id'];

  $sql = "SELECT * FROM to_do_list where user_id= $id";
  $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);
?>

Total Task <span><?php echo $count; ?></span>
