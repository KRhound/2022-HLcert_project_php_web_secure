<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>로비</title>

    <!--내부 스타일시트 적용-->
    <style>
    html {
        height: 100%;
    }

    body {
        margin: 0;
        height: 100%;
        background: #f5f6f7;
        font-family: Dotum,'돋움',Helvetica,sans-serif;
    }

    #header {
        padding-top: 0px;
        padding-bottom: 20px;
        text-align: center;
    }

    .btn_main {
        margin: 0px 0 20px;
    }

    #btn1 {
        width: 10%;
        padding: 21px 0 17px;

        border: 0;
        cursor: pointer;
        color: #fff;
        background-color: #08a600;
        font-size: 30px;
        font-weight: 1000;
        font-family: Dotum,'돋움',Helvetica,sans-serif;
    }

    #btn2 {
        width: 20%;
        padding: 21px 0 17px;

        border: 0;
        cursor: pointer;
        color: "black";
        background-color: #f5f6f7;

        font-size: 20px;
        font-weight: 1000;
        font-family: Dotum,'돋움',Helvetica,sans-serif;
    }

    #btn3 {
      width: 20%;
      padding: 21px 0 17px;
      float:right;

      border: 0;
      cursor: pointer;
      color: "black";
      background-color: #f5f6f7;

      font-size: 20px;
      font-weight: 1000;
      font-family: Dotum,'돋움',Helvetica,sans-serif;
    }

    #btn4 {
      width: 20%;
      padding: 21px 0 17px;
      float:right;

      border: 0;
      cursor: pointer;
      color: "black";
      background-color: #f5f6f7;

      font-size: 20px;
      font-weight: 1000;
      font-family: Dotum,'돋움',Helvetica,sans-serif;
    }
    </style>

  </head>
  <body>
    <div id="header">
      <div id="content">
      </div>
    </div>

    <div class="header">

      <div class="content">
        <!--로고-->
        <div class="btn_area">
          <button type="button" id="btn1" onclick="location.reload()">
            <span>로비</span>
          </button>
          <button type="button" id="btn2" onclick="location.href='../notice_board/board'">
            <span>게시판</span>
          </button>

            <?php
            $connect = mysqli_connect('127.0.0.1', 'root', '3733990', 'user_db') or die("connect failed");
            $query = "select * from board order by number desc";
            $result = mysqli_query($connect, $query);

            $total = mysqli_num_rows($result);

            session_start();

            if (isset($_SESSION['userid'])) {
              ?><b><?php echo $_SESSION['userid']; ?></b>님 반갑습니다.
              <button type="button" id="btn3" onclick="location.href='../login/logout_action'">logout</button>
              <br />
              <?php
            } else {
              ?>
            <button type="button" id="btn4" onclick="location.href='../login/login'">login</button>
            <br />
          <?php
          }
          ?>
        </div>

    </div>
  </body>
</html>
