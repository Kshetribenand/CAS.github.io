<?php
  // Include Connection
  include 'config1.php';

  $sql = "DELETE FROM to_do_list";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo 1;
  }else {
    echo "Error: {$sql}" . mysqli_error($conn);
  }
?>
