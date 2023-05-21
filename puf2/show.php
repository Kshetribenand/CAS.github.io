<?php
  //include 'config1.php';
  include('dbConfig.php');
  //include('config2.php');
if (!isset($_SESSION['USER_ID'])) {
  header("location:login.php");
  die();
}

$user = $_SESSION['UNSER_NAME'];
$query = mysqli_query($conn,"select * from login where email = '$user'");
$rows =mysqli_fetch_array($query);
$id = $rows['id'];
  

  $sql = "SELECT txt,txt1 FROM to_do_list where user_id=$id";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>

<li><p><?php echo $row['txt']; ?>
  <?php echo $row['txt1']; ?>
</p> <button id="delete" data-id="<?php $row['id'];?>  "><i class="fa fa-trash" ></i></button></li>

<?php } 
}else { echo "<div style='text-align:center;'>Hooray, no task here.</div>"; } ?>
