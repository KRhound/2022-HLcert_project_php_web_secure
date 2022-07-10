<?php
$connect = mysqli_connect('127.0.0.1', 'root', '3733990', 'user_db') or die("connect failed");

$number = $_POST['number'];
$title = $_POST['title'];
$content = $_POST['content'];
$password = $_POST['pw'];

$date = date('Y-m-d H:i:s');

$query = "select title, content, date, id, password from board where number = $number";
$result = $connect->query($query);
$rows = mysqli_fetch_assoc($result);

if ($result && $rows['password'] == $password) {
  $query = "update board set title='$title', content='$content', date='$date' where number=$number";
  $result = $connect->query($query);
  if ($result) {
?>
    <script>
        alert("수정되었습니다.");
        location.replace("./read.php?number=<?= $number ?>");
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
}
?>
