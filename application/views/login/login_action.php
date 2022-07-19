<?php
session_start();

include("../../../connect_db.php");

$id = $_POST['id'];

$sql = sprintf("select * from myguests where id='%s';", addslashes($id));
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);

  if (password_verify($_POST['password'], $row['pw'])) {
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
