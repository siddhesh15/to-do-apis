<?php
include 'db_connect.php';

$task_name = $_GET['task_name'];
$task_priority = $_GET['task_priority'];
$user_no = $_GET['user_no'];

$sql = "INSERT INTO tasks (task_no,task_name,task_priority,user_no) VALUES (DEFAULT,'".$task_name."',".$task_priority.",".$user_no.")";

if (mysqli_query($conn, $sql)) {
  $response = [];
  $response["status"] = "success";
  $response["message"] = "Record added successfully";
  echo json_encode($response);
} else {
  $response = [];
  $response["status"] = "failure";
  $response["message"] = "Error adding record";
  echo json_encode($response);
}

mysqli_close($conn);

?>