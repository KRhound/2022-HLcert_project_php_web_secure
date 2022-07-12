<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>로그인</title>

    <!--내부 스타일시트 적용-->
    <link rel="shortcut icon" href="#">
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
        padding-top: 62px;
        padding-bottom: 20px;
        text-align: center;
    }

    #wrapper {
        position: relative;
        height: 100%;
    }

    #content {
      position: relative;
      left: 50%;
      transform: translate(-50%);
      width: 460px;
    }

    #bir_wrap{
      display table;
      width: 100%
    }

    h3 {
      margin: 19px 0 8px;
      font-size: 14px;
      font-weight: 700;
    }

    .int {
      display: block;
      position: relative;
      width: 100%;
      height: 29px;
      border: none;
      background: #fff;
      font-size: 15px;
    }

    .box {
      display: block;
      width: 100%;
      height: 51px;
      border: solid 1px #dadada;
      padding: 10px 14px 10px 14px;
      box-sizing: border-box;
      background: #fff;
      position: relative;
    }

    .box.int_id {
      padding-right: 40px;
    }

    .box.int_pass {
      padding-right: 40px;
    }

    .error_next_box {
      margin-top: 9px;
      font-size:  12px;
      color: red;
      display: none;
    }

    .btn_area {
        margin: 30px 0 15px;
    }

    #btnJoin {
        width: 100%;
        padding: 21px 0 17px;

        border: 0;
        cursor: pointer;
        color: #fff;
        background-color: #08a600;
        font-size: 20px;
        font-weight: 400;
        font-family: Dotum,'돋움',Helvetica,sans-serif;
    }

    </style>

  </head>
  <body>
    <div id="header">
      <p style="font-size:25px; text-align:center; color:#08a600"><b>login</b></p>
          <div id="wrapper">
          <div id="content">
        </div>
      </div>
    </div>

    <div id="wrapper">
      <!--id-->
      <div id="content">
        <div>
          <form method="POST" action="login_action.php">
            <h3><label for="Login">아이디</label></h3>
            <p><span class="box int_id">
                <input type="password" name="id" id="id" class="int" maxlength=20>
              </span></p>
              <span class="error_next_box"></span>
            </div>

            <!--pw1-->
            <div>
              <h3><label for="Login">비밀번호</label></h3>

              <p><span class="box int_pass">
                <input type="password" name="password" id="pswd" class="int" maxlength=16>
              </span></p>
              <span class="error_next_box"></span>
            </div>
            <div class="btn_area">
              <button type="submit" id="btnJoin">
                <span>로그인</span>
              </button>
              <span class="error_next_box"></span>
            </div>
            <div class="btn_area">
              <button type="button" id="btnJoin" onclick="location.href='../join/join.php'">회원가입</button>
          </div>
        </div>
      </form>
    </div>
    <!--외부 자바스크립 적용-->
    <script src="login.js"></script>
  </body>
</html>
