<?php
  // Include Connection
  include 'config1.php';

  $id = $_POST['id'];

  $sql = "DELETE FROM to_do_list WHERE id='$id'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo ;
  }else {
    echo "Error: {$sql}" . mysqli_error($conn);
  }
?>
