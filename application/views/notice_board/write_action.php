<?php
include("../../../connect_db.php");

session_start();

$id = $_SESSION['userid'];
$pw = $_POST['pw'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d H:i:s');

$URL = './board';


$query = "INSERT INTO board (number, title, content, date, hit, id, password)
        values(null,'$title', '$content', '$date', 0, '$id', '$pw')";


$result = $connect->query($query);
if ($result) {
?> <script>
        alert("게시글이 등록되었습니다.");
        location.replace("<?php echo $URL ?>");
    </script>
<?php
} else {
  ?> <script>
          alert("게시글 등록에 실패하였습니다.");
          history.back();
      </script>
  <?php
}

mysqli_close($connect);
?>
