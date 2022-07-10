<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>

    <style>
        .table {
            border: 1px solid #444444;
            margin-top: 30px;
        }

        .title {
            height: 45px;
            font-size: 23.5px;
            text-align: center;
            background-color: #08a600;
            color: white;
            width: 1000px;
        }

        .id {
            text-align: center;
            background-color: #EEEEEE;
            width: 30px;
            height: 33px;
        }

        .id2 {
            background-color: white;
            width: 60px;
            height: 33px;
            padding-left: 10px;
        }

        .hit {
            background-color: #EEEEEE;
            width: 30px;
            text-align: center;
            height: 33px;
        }

        .hit2 {
            background-color: white;
            width: 60px;
            height: 33px;
            padding-left: 10px;
        }

        .content {
            padding: 20px;
            border-top: 1px solid #444444;
            height: 500px;
        }

        .btn {
            width: 700px;
            height: 200px;
            text-align: center;
            margin: auto;
            margin-top: 50px;
        }

        .btn1 {
            height: 50px;
            width: 100px;
            font-size: 20px;
            text-align: center;
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
        }

        .comment_input {
            width: 700px;
            height: 500px;
            text-align: center;
            margin: auto;
        }

        .text3 {
            font-weight: bold;
            float: left;
            margin-left: 20px;
        }

        .com_id {
            width: 100px;
        }

        .comment {
            width: 500px;
        }
    </style>
</head>

<body>
    <?php
    $connect = mysqli_connect('127.0.0.1', 'root', '3733990', 'user_db');
    $number = $_GET['number'];
    session_start();
    $query = "select title, content, date, hit, id from board where number = $number";
    $result = $connect->query($query);
    $rows = mysqli_fetch_assoc($result);

    $hit = "update board set hit = hit + 1 where number = $number";
    $connect->query($hit);
    ?>

    <table class="table" align=center>
        <tr>
            <td colspan="4" class="title"><?php echo $rows['title'] ?></td>
        </tr>
        <tr>
            <td class="id">작성자</td>
            <td class="id2"><?php echo $rows['id'] ?></td>
            <td class="hit">조회수</td>
            <td class="hit2"><?php echo $rows['hit'] ?></td>
        </tr>


        <tr>
            <td colspan="4" class="content" valign="top">
                <?php echo $rows['content'] ?></td>
        </tr>
    </table>

    <div class="btn">
        <button class="btn1" onclick="location.href='./board.php'">목록</button>&nbsp;&nbsp;
        <button class="btn1" onclick="location.href='./modify.php?number=<?= $number ?>&id=<?= $_SESSION['userid'] ?>'">수정</button>&nbsp;&nbsp;
        <button class="btn1" onclick="location.href='./delete_action.php?number=<?= $number ?>&id=<?= $_SESSION['userid'] ?>'">삭제</button>
    </div>
</body>

</html>
