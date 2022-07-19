<!DOCTYPE html>
<html>
  <head>
    <?php
    include("../../../connect_db.php");
    $query = "select * from board order by number desc";
    $result = mysqli_query($connect, $query);

    session_start();

    if (isset($_SESSION['userid'])) {
    ?><b style="width: 700px;
    height: 200px;
    text-align: right;
    margin: auto;
    margin-top: 50px;"><?php echo $_SESSION['userid']; ?></b>님 환영합니다.
        <button onclick="location.href='../login/logout_action.php'" style="height: 50px;
        width: 80px;
        height: 30px;
        float:right;
        font-size: 15.5px;
        text-align: center;
        background-color: white;
        border: 2px solid black;
        border-radius: 10px;">로그아웃</button>
        <br />
    <?php
    } else {
    ?>
        <button onclick="location.href='../login/login.php'" style="height: 50px;
        width: 80px;
        height: 30px;
        float:right;
        font-size: 15.5px;
        text-align: center;
        background-color: white;
        border: 2px solid black;
        border-radius: 10px;">로그인</button>
        <br />
    <?php
    }
    ?>


    <button onclick="location.href='../main/main.php'" style="height: 50px;
        width: 80px;
        height: 30px;
        float:left;
        font-size: 15.5px;
        text-align: center;
        background-color: white;
        border: 2px solid black;
        border-radius: 10px;">로비</button>
    <br />
    <meta charset="utf-8">
    <title>게시판</title>
    <style>
      th, td {
        border-bottom: 1px solid #ddddda;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <div id="header">
      <p style="font-size:25px; text-align:center"><b>자유게시판</b></p>
          <div id="wrapper">
          <div id="content">
        </div>
      </div>
    </div>

    <div id="wrapper">
      <div id="content">

        <table class="table boards_list" style="margin-left: auto; margin-right: auto; text-align: center; border: 1px solid #ddddda">
          <thead>
            <tr>
              <th style="background-color:#08a600; color:white; text-align: center;">번호</th>
              <th style="background-color:#08a600; color:white; text-align: center;">제목</th>
              <th style="background-color:#08a600; color:white; text-align: center;">작성자</th>
              <th style="background-color:#08a600; color:white; text-align: center;">작성일</th>
              <th style="background-color:#08a600; color:white; text-align: center;">조회수</th>
            </tr>
          </thead>

          <?php
            $total = mysqli_num_rows($result); //구현 x

            while ($board = mysqli_fetch_assoc($result)) {
          ?>
          <tbody>
            <tr>
              <td width="100"><?=$board['number'];?></td>
              <td width="500">
                <a href="./read.php?number=<?php echo $board['number'] ?>">
                            <?php echo $board['title'] ?>
              </td>
              <td width="120"><?=$board['id'];?></td>
              <td width="160"><?=$board['date'];?></td>
              <td width="70"><?=$board['hit'];?></td>
            </tr>
          </tbody>
          <?php
            }
          ?>
        </table>
      </div>
      <?php if (isset($_SESSION['userid'])) { ?>
      <div style="width: 700px;
      height: 200px;
      text-align: right;
      margin: auto;
      margin-top: 50px;">
        <button type="button" id="btn" style="height: 50px;
        width: 80px;
        height: 30px;
        font-size: 18px;
        text-align: center;
        background-color: white;
        border: 2px solid black;
        border-radius: 10px;" onclick="location.href='./write.php'">
          <span>글작성</span>
        </button>
      <?php } ?>
      </div>
    </div>
  </body>
</html>
