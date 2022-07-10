<?php
session_start();

$conn = mysqli_connect("127.0.0.1", "root", "3733990", "user_db") or die("connect failed");
$conn->set_charset("utf8");

$id = $_POST['id'];
$pw = $_POST['password'];

echo $_POST['id'];
echo $_POST['password'];

$sql = "select * from myguests where id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);

  if ($row['pw'] == $pw) {
    $_SESSION['userid'] = $id;
    $_SESSION['pw'] = $pw;
    if (isset($_SESSION['userid'])) {
?>
      <script>
        location.replace("../main/main.php");
      </script>
<?php
    } else {
      echo "session failed";
    }
  } else {
        ?> <script>
            alert("아이디 또는 비밀번호를 확인해주세요.");
            history.back();
        </script>
    <?php
    }
} else {
    ?> <script>
        alert("아이디 또는 비밀번호를 확인해주세요.");
        history.back();
    </script>
<?php
}
?>
