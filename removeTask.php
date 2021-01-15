<?php
include 'db_connect.php';

$taskno = 2;
$sql = "DELETE FROM tasks where task_no='".$taskno."'";

if (mysqli_query($conn, $sql)) {
  $response = [];
  $response["status"] = "success";
  $response["message"] = "Record deleted successfully";
  echo json_encode($response);
} else {
  $response = [];
  $response["status"] = "failure";
  $response["message"] = "Error deleting record";
  echo json_encode($response);
}

mysqli_close($conn);

?>