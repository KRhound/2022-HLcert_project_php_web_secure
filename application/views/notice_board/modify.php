<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <style>
        table.table2 {
            border-collapse: separate;
            border-spacing: 1px;
            text-align: left;
            line-height: 1.5;
            border-top: 1px solid #ccc;
            margin: 20px 10px;
        }

        table.table2 tr {
            width: 50px;
            padding: 10px;
            font-weight: bold;
            vertical-align: top;
            border-bottom: 1px solid #ccc;
        }

        table.table2 td {
            width: 100px;
            padding: 10px;
            vertical-align: top;
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>

<body>
 <?php
  include("../../../connect_db.php");
  
  $number = $_GET['number'];

  $stmt = $connect->prepare("select title, content, date, id, password from board where number = $number");
  $stmt->execute();
  $result = $stmt->get_result();
  $rows = $result->fetch_assoc();

  $title = $rows['title'];
  $content = $rows['content'];
  $userid = $rows['id'];
  $password = '';

  session_start();

  $URL = "./board";

  if (!isset($_SESSION['userid'])) {
    ?>
    <script>
        alert("권한이 없습니다.");
        location.replace("<?php echo $URL ?>");
    </script>
    <?php
      }
      else if ($_SESSION['userid'] == $userid || ($_SESSION['userid'] == "admin")) {
            $tok = md5(uniqid(rand(), true));
            $_SESSION['tok'] = $tok;
    ?>
    <form method="POST" action="modify_action">
        <table style="padding-top:50px" align=center width=auto border=0 cellpadding=2>
            <tr>
            <input type="hidden" name="tok" value="<?php echo $tok; ?>">
            <!-- CSRF Token -->
                <td style="height:40; float:center; background-color:#08a600">
                    <p style="font-size:25px; text-align:center; color:white; margin-top:15px; margin-bottom:15px"><b>게시글 작성하기</b></p>
                </td>
            </tr>
            <tr>
                <td bgcolor=white>
                    <table class="table2">
                        <tr>
                            <td>작성자</td>
                            <td><input type="text" name="name" size=30 value="<?= $_SESSION['userid'] ?>"></td>
                        </tr>

                        <tr>
                            <td>제목</td>
                            <td><input type="text" name="title" size=70 value="<?= $title ?>"></td>
                        </tr>

                        <tr>
                            <td>내용</td>
                            <td><textarea name="content" cols=75 rows=15><?= $content ?></textarea></td>
                        </tr>

                        <tr>
                            <td>비밀번호</td>
                            <td><input type="password" name="pw" size=15 maxlength=15 value="<?= $password ?>"></td>
                        </tr>
                    </table>

                    <center>
                      <input type="hidden" name="number" value="<?= $number ?>">
                      <input style="height:26px; width:47px; font-size:16px;" type="submit" value="작성">
                    </center>
                </td>
            </tr>
        </table>
      </form>
    <?php  } else {
    ?> <script>
            alert("권한이 없습니다.");
            location.replace("<?php echo $URL ?>");
        </script>
    <?php   }
    ?>
</body>

</html>
