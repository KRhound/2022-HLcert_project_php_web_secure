<?php
function dataRecording() {
  $arr = [];
  $arr[0] = $_POST['id'];
  $arr[1] = password_hash($_POST['pw'], PASSWORD_DEFAULT);
  $arr[2] = $_POST['name'];
  $arr[3] = $_POST['nickname'];
  $arr[4] = $_POST['birth'];
  $arr[5] = $_POST['gender'];
  $arr[6] = $_POST['email'];
  $arr[7] = $_POST['mobile'];

  include("../connect_db.php");

  if (mysqli_connect_errno()) {
    $error_msg = "Connect failed: " + mysqli_connect_error() + "\n";
    error_log ($error_msg, 3, "C:\Bitnami\wampstack-8.1.7-0\apache2\logs\error.log");
    exit();
  }

  $sql = "INSERT INTO myguests (id, pw, name, nickname, birth, gender, email, phone)
  VALUES ('$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]', '$arr[4]', '$arr[5]', '$arr[6]', '$arr[7]')";

  if (!mysqli_query($connect, $sql)) {
    $error_msg = "Errormessage: " + mysqli_error($link) + "\n";
    error_log ($error_msg, 3, "C:\Bitnami\wampstack-8.1.7-0\apache2\logs\error.log");
  }

  mysqli_close($connect);
}

dataRecording();
echo("<script>self.close()</script>");
?>
