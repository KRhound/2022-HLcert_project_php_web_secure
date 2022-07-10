<?php
function dataRecording() {
  $arr = [];
  $arr[0] = $_POST['id'];
  $arr[1] = $_POST['pw'];
  $arr[2] = $_POST['name'];
  $arr[3] = $_POST['birth'];
  $arr[4] = $_POST['gender'];
  $arr[5] = $_POST['email'];
  $arr[6] = $_POST['mobile'];

  // Create connection
  $conn = mysqli_connect("127.0.0.1", "root", "3733990", "user_db");
  $conn->set_charset("utf8");

  if (mysqli_connect_errno()) {
    $error_msg = "Connect failed: " + mysqli_connect_error() + "\n";
    error_log ($error_msg, 3, "C:\Bitnami\wampstack-8.1.7-0\apache2\logs\error.log");
    exit();
  }

  $sql = "INSERT INTO myguests (Id, Pw, Name, Birth, Gender, Email, Phone)
  VALUES ('$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]', '$arr[4]', '$arr[5]', '$arr[6]')";

  if (!mysqli_query($conn, $sql)) {
    $error_msg = "Errormessage: " + mysqli_error($link) + "\n";
    error_log ($error_msg, 3, "C:\Bitnami\wampstack-8.1.7-0\apache2\logs\error.log");
  }

  mysqli_close($conn);
}

dataRecording();
echo("<script>self.close()</script>");
?>
