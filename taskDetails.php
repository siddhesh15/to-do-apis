<?php
include 'db_connect.php';

$sql = "SELECT task_no, task_name, task_priority FROM tasks ORDER BY task_priority ASC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $dbdata = array();
  
  while($row = mysqli_fetch_assoc($result)) {
      $dbdata[] = $row;
  }
  $response = [];
  $response["status"] = "success";
  $response["data"] = $dbdata;
  echo json_encode($response);
} else {
  $response = [];
  $response["status"] = "failure";
  echo json_encode($response);
}

mysqli_close($conn);


?>