<?php
include("../../../connect_db.php");

session_start();

if(isset($_SESSION['tok']) && $_POST['tok'] == $_SESSION['tok']){

$number = $_POST['number'];
$title = $_POST['title'];
$content = $_POST['content'];
$password = $_POST['pw'];

$date = date('Y-m-d H:i:s');

  $stmt = $connect->prepare("select title, content, date, id, password from board where number = $number");
  $stmt->execute();
  $result = $stmt->get_result();
  $rows = $result->fetch_assoc();

if ($result && $rows['password'] == $password) {
  $query = "update board set title='$title', content='$content', date='$date' where number=$number";
  $result = $connect->query($query);
  if ($result) {
?>
    <script>
        alert("수정되었습니다.");
        location.replace("./read?number=<?= $number ?>");
    </script>
<?php
  }
  else {
?>
    <script>
      alert("다시 시도해주세요.");
      history.back();
    </script>
<?php
  }
}
else if ($rows['password'] != $password) {
?>
  <script>
    alert("비밀번호를 확인해주세요.");
    history.back();
  </script>
<?php
}
else {
?>
  <script>
    alert("다시 시도해주세요.");
    history.back();
  </script>
<?php
}} else {
  ?>
    <script>
      alert("비 정상적인 접근입니다.");
      history.back();
    </script>
  <?php
  } 
?>
