<?php
include 'db_connect.php';

// $content = trim(file_get_contents("php://input"));
// $decoded = json_decode($content, true);

$taskno = $_GET['task_no'];
$sql = "DELETE FROM tasks where task_no='".$taskno."'";

if (mysqli_query($conn, $sql)) {
  $response = [];
  $response["status"] = "success";
  $response["message"] = "Successfully deleted record";
  echo json_encode($response);
} else {
  $response = [];
  $response["status"] = "failure";
  $response["message"] = "Error deleting record";
  echo json_encode($response);
}

mysqli_close($conn);

?>