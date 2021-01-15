<?php
include 'db_connect.php';

$task_no = 4;
$task_priority = 5;
$sql = "UPDATE tasks SET task_priority='".$task_priority."' WHERE task_no='".$task_no."'";

if (mysqli_query($conn, $sql)) {
  $response = [];
  $response["status"] = "success";
  $response["message"] = "Record updated successfully";
  echo json_encode($response);
} else {
  $response = [];
  $response["status"] = "failure";
  $response["message"] = "Error updating record";
  echo json_encode($response);
}

mysqli_close($conn);

?>