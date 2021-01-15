<?php
include 'db_connect.php';

$username = $_GET['username'];
$userpass = $_GET['userpass'];

$sql = "SELECT user_name FROM users where user_name='".$username."' && user_pass='".$userpass."'";
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
  $response["message"] = "Invalid User Details";
  echo json_encode($response);
}

mysqli_close($conn);


?>