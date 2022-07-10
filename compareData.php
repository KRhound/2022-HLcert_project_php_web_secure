<?php
function compareData() {
  $arr = [];
  $arr[0] = $_POST['id'];
  $arr[1] = $_POST['pw'];

  // Create connection
  $conn = mysqli_connect("127.0.0.1", "root", "3733990", "user_db");
  $conn->set_charset("utf8");

  if (mysqli_connect_errno()) {
    $error_msg = "Connect failed: " + mysqli_connect_error() + "\n";
    error_log ($error_msg, 3, "C:\Bitnami\wampstack-8.1.7-0\apache2\logs\error.log");
    exit();
  }

  $sql = "SELECT id, pw FROM MyGuests;";

  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
     if ($row["id"] == $arr[0] && $row["pw"] == $arr[1]) {
       echo "<script>location.href='./main/main.php'</script>";
     }
   }
  }
  else{

  }
  mysqli_close($conn);
}

compareData();
echo("<script>self.close()</script>");
?>
