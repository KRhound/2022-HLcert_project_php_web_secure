var id = document.querySelector("#id");

var pw1 = document.querySelector("#pswd1");
var pw2 = document.querySelector("#pswd2");

var user = document.querySelector("#name");

var nickname = document.querySelector("#nickname");

var yy = document.querySelector("#yy");
var mm = document.querySelector("#mm");
var dd = document.querySelector("#dd");

var gender = document.querySelector("#gender");

var email = document.querySelector("#email");

var mobile = document.querySelector("#mobile");

var error = document.querySelectorAll(".error_next_box");



id.addEventListener("blur", checkId);
pw1.addEventListener("blur", checkPw);
pw2.addEventListener("blur", comparePw);
user.addEventListener("blur", checkName);
nickname.addEventListener("blur", checkNickName);
yy.addEventListener("blur", checkBirth);
mm.addEventListener("blur", checkBirth);
dd.addEventListener("blur", checkBirth);
gender.addEventListener("blur", checkGender);
email.addEventListener("blur", checkEmail);
mobile.addEventListener("blur", checkMobile);

var error_count = [];
for (var i = 0; i < 9; i++) {
  error_count[i] = 1;
}
error_count[7] = 0;

//id
function checkId() {
  var idPattern = /[a-zA-Z0-9_-]{8,20}/;

  if(id.value == "") {
    error[0].innerHTML = "필수 정보입니다.";
    error[0].style.color = "red";
    error[0].style.display = "block";
    error_count[0] = 1;
  }
  else if(!idPattern.test(id.value)) {
    error[0].innerHTML = "5~20자의 영문 소문자, 숫자와 특수기호(_),(-)만 사용 가능합니다.";
    error[0].style.color = "red";
    error[0].style.display = "block";
    error_count[0] = 1;
  }
  else {
    error[0].innerHTML = "사용 가능한 아이디입니다.";
    error[0].style.color = "#08A600";
    error[0].style.display = "block";
    error_count[0] = 0;
  }
}



//pw
function checkPw() {
  var pwPattern = /[a-zA-Z0-9~!@#$%^&*()_+|<>?:{}]{8,16}/;

  if(pw1.value == "") {
    error[1].innerHTML = "필수 정보입니다.";
    error[1].style.color = "red";
    error[1].style.display = "block";
    error_count[1] = 1;
  }
  else if(!pwPattern.test(pw1.value)) {
    error[1].innerHTML = "8~16자 영문 대 소문자, 숫자, 특수문자를 사용하세요.";
    error[1].style.color = "red";
    error[1].style.display = "block";
    error_count[1] = 1;
  }
  else {
    error[1].innerHTML = "사용 가능한 패스워드입니다.";
    error[1].style.color = "#08A600";
    error[1].style.display = "block";
    error_count[1] = 0;
  }
}



//pw_check
function comparePw() {
  if(pw2.value == "") {
    error[2].innerHTML = "필수 정보입니다.";
    error[2].style.color = "red";
    error[2].style.display = "block";
    error_count[2] = 1;
  }
  else if (pw2.value != pw1.value) {
    error[2].innerHTML = "비밀번호가 일치하지 않습니다.";
    error[2].style.color = "red";
    error[2].style.display = "block";
    error_count[2] = 1;
  }
  else {
    error[2].innerHTML = "비밀번호가 일치합니다."
    error[2].style.color = "#08A600";
    error[2].style.display = "block";
    error_count[2] = 0;
  }
}



var regExp = /[\{\}\[\]\/?.,;:|\)*~`!^\-+<>@\#$%&\\\=\(\'\"]/;

//name
function checkName() {
var namePattern = /[가-힣a-zA-Z]/;

  if (user.value == "") {
    error[3].innerHTML = "필수 정보입니다.";
    error[3].style.color = "red";
    error[3].style.display = "block";
    error_count[3] = 1;
  }
  else if (!namePattern.test(user.value) || user.value.indexOf(" ") > -1 || regExp.test(user.value)) {
    error[3].innerHTML = "한글과 영문 대 소문자를 사용하세요. (특수기호, 공백 사용 불가)";
    error[3].style.color = "red";
    error[3].style.display = "block";
    error_count[3] = 1;
  }
  else {
    error[3].innerHTML = "올바른 이름입니다.";
    error[3].style.color = "#08A600";
    error[3].style.display = "block";
    error_count[3] = 0;
  }
}

//nickname
function checkNickName() {
var nicknamePattern = /[가-힣a-zA-Z]/;

  if (nickname.value == "") {
    error[4].innerHTML = "필수 정보입니다.";
    error[4].style.color = "red";
    error[4].style.display = "block";
    error_count[4] = 1;
  }
  else if (!nicknamePattern.test(nickname.value) || nickname.value.indexOf(" ") > -1 || regExp.test(nickname.value)) {
    error[4].innerHTML = "한글과 영문 대 소문자를 사용하세요. (특수기호, 공백 사용 불가)";
    error[4].style.color = "red";
    error[4].style.display = "block";
    error_count[4] = 1;
  }
  else {
    error[4].innerHTML = "올바른 이름입니다.";
    error[4].style.color = "#08A600";
    error[4].style.display = "block";
    error_count[4] = 0;
  }
}


//생년월일
function checkBirth() {
  var yearPattern = /[0-9]{4}/;
  var datePattern = /\d{1,2}/;

  if (yy.value == "" || !yearPattern.test(yy.value)) {
    error[5].innerHTML = "태어난 년도 4자리를 정확하게 입력하세요.";
    error[5].style.color = "red";
    error[5].style.display = "block";
    error_count[5] = 1;
  }
  else if (mm.value == "월") {
    error[5].innerHTML = "태어난 월을 선택하세요.";
    error[5].style.color = "red";
    error[5].style.display = "block";
    error_count[5] = 1;
  }
  else if (yy.value == "" || !datePattern.test(dd.value) || dd.value > 31 || dd.value < 1) {
    error[5].innerHTML = "태어난 일(날짜) 2자리를 정확하게 입력하세요.";
    error_count[5] = 1;
  }
  else {
    error[5].innerHTML = "";
    error_count[5] = 0;
  }
}



//gender
function checkGender() {
  if (gender.value == "성별" || gender.value == "") {
    error[6].innerHTML = "필수 정보입니다.";
    error[6].style.color = "red";
    error[6].style.display = "block";
    error_count[6] = 1;
  }
  else {
    error[6].innerHTML = "";
    error_count[6] = 0;
  }
}



//email
function checkEmail() {
  var emailPattern = /([a-z0-9]{2,})@([a-z0-9-]{2,})\.([a-z0-9]{2,})/;

  if (email.value == "") {
    error[7].innerHTML = "";
    error_count[7] = 0;
  }
  else if (!emailPattern.test(email.value)) {
    error[7].innerHTML = "email 형식을 다시 확인하세요.";
    error[7].style.color = "red";
    error[7].style.display = "block";
    error_count[7] = 1;
  }
  else {
    error[7].innerHTML = "";
    error_count[7] = 0;
  }
}



//전화번호
function checkMobile() {
   var mobilePattern = /^01([0|1|6|7|8|9])([0-9]{3,4})([0-9]{4})$/;

   if (mobile.value == "") {
     error[8].innerHTML = "필수 정보입니다.";
     error[8].style.color = "red";
     error[8].style.display = "block";
     error_count[8] = 1;
   }
   else if (!mobilePattern.test(mobile.value)) {
     error[8].innerHTML = "전화번호를 다시 확인하세요.";
     error[8].style.color = "red";
     error[8].style.display = "block";
     error_count[8] = 1;
   }
   else {
     error[8].innerHTML = "";
     error_count[8] = 0;
   }
}



//에러검출 코드
function checkError() {
  var count = 0;
  for(var i = 0; i < error_count.length; i++){
    if (error_count[i] == 1) {
      count = 1;
      break;
    }
  }
  return count;
}

//서버에 데이터를 보내는 함수
function sendPost(url, params) {
    var form = document.createElement('form');
    form.setAttribute('method', 'post');
    form.setAttribute('target', '_blank');
    form.setAttribute('action', url);
    document.charset = "UTF-8";

    for (var key in params) {
      var hiddenField = document.createElement('input');
      hiddenField.setAttribute('type', 'hidden');
      hiddenField.setAttribute('name', key);
      hiddenField.setAttribute('value', params[key]);
      form.appendChild(hiddenField);
    }

    document.body.appendChild(form);
    form.submit();
}

//회원가입 버튼 코드
function loginMsgPage() {
  if (!checkError()) {
    var birth = yy.value + "-" + mm.value + "-" + dd.value;
    sendPost('./join_action',
    {id: id.value, pw: pw1.value, name: user.value,
    nickname: nickname.value, birth: birth, gender: gender.value,
    email: email.value, mobile: mobile.value} );
    window.location.href = '../login/login';
  }
  else {
    error[9].innerHTML = "실패 하였습니다.";
    error[9].style.color = "red";
    error[9].style.display = "block";
  }
}
