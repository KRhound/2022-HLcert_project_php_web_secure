<?php
session_start();

include("../../../connect_db.php");

$id = $_POST['id'];

$sql = sprintf("select * from myguests where id='%s';", addslashes($id));
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) == 1) {
  $rows = mysqli_fetch_assoc($result);
if($id == "admin" && ($_SERVER['REMOTE_ADDR']=="117.16.11.247" || $_SERVER['REMOTE_ADDR']=="121.179.154.211")){
  //특정 IP address에서만 관리자 로그인 가능
  //민감 정보 노출 X ini파일에 IP 정보 보관할 것(수정 요망)
  if (password_verify($_POST['password'], $rows['pw'])) {
    $_SESSION['userid'] = $id;
    $_SESSION['nickname'] = $rows['nickname'];
    if (isset($_SESSION['userid'])) {
?>
      <script>
        location.replace("../main/main");
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
    }} else {
      ?> <script>
          alert("접근불가");
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
