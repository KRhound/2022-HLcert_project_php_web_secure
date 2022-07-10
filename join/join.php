<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>회원가입</title>

    <!--외부 스타일시트 적용-->
    <link rel="stylesheet" href="join_style.css">
    <link rel="shortcut icon" href="#">

  </head>
  <body>
    <div id="header">
          <div id="wrapper">
          <div id="content">
        </div>
      </div>
    </div>

    <div id="wrapper">
      <!--id-->
      <div id="content">
        <div>
          <h3><label for="Join">아이디</label></h3>
          <span class="box int_id">
              <input type="text" id="id" class="int" maxlength=20>
              <span class="step_url">@aaa.com</span>
          </span>
          <span class="error_next_box"></span>
        </div>

        <!--pw1-->
        <div>
          <h3><label for="Join">비밀번호</label></h3>

          <span class="box int_pass">
              <input type="text" id="pswd1" class="int" maxlength=16>
          </span>
          <span class="error_next_box"></span>
        </div>


        <!--pw2-->
        <div>
          <h3><label for="Join">비밀번호 재확인</label></h3>

          <span class="box int_pass_check">
              <input type="text" id="pswd2" class="int" maxlength=16>
          </span>
          <span class="error_next_box"></span>
        </div>

        <!--name-->
        <div>
          <h3><label for="Join">이름</label></h3>

          <span class="box">
              <input type="text" id="name" class="int" maxlength=20>
          </span>
          <span class="error_next_box"></span>
        </div>

        <!--BIRTH_YY-->
        <div>
          <h3><label for="Join">생년월일</label></h3>

          <div id="bir_wrap">

            <div id="bir_yy">
              <span class="box">
                <input type="text" id="yy" class="int" maxlength=4 placeholder="년(4자)">
              </span>
            </div>

            <!--BIRTH_MM-->
            <div id="bir_mm">
              <span class="box">
                <select id="mm">
                  <option>월</option>
                  <option value="01">1</option>
                  <option value="02">2</option>
                  <option value="03">3</option>
                  <option value="04">4</option>
                  <option value="05">5</option>
                  <option value="06">6</option>
                  <option value="07">7</option>
                  <option value="08">8</option>
                  <option value="09">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </span>
            </div>

            <!--BIRTH_DD-->
            <div id="bir_dd">
              <span class="box">
                <input type="text" id="dd" class="int" maxlength=2 placeholder="일(2자)">
              </span>
            </div>
          </div>
          <span class="error_next_box"></span>
        </div>

        <!--Gender-->
        <div>
          <h3><label for="Join">성별</label></h3>

          <span class="box">
            <select id="gender">
              <option>성별</option>
              <option value="M">남자</option>
              <option value="F">여자</option>
              <option value="">선택 안함</option>
            </select>
          </span>
          <span class="error_next_box"></span>
        </div>

        <!--E_mail-->
        <div>
          <h3><label for="Join">본인 확인 이메일</label><label for="email_s">(선택)</label></h3>

          <span class="box">
              <input type="text" id="email" class="int" maxlength=64 placeholder="선택입력">
          </span>
          <span class="error_next_box"></span>
        </div>

        <!--phone_num-->
        <div>
          <h3><label for="Join">휴대전화</label></h3>

          <span class="box">
              <input type="text" id="mobile" class="int" maxlength=64 placeholder="전화번호 입력">
          </span>
          <span class="error_next_box"></span>
        </div>

        <!-- JOIN BTN-->
        <div class="btn_area">
          <button type="button" id="btnJoin" onclick="loginMsgPage()">
            <span>가입하기</span>
          </button>
          <span class="error_next_box"></span>
        </div>
      </div>
    </div>
    <!--외부 자바스크립 적용-->
    <script src="join.js"></script>
  </body>
</html>
