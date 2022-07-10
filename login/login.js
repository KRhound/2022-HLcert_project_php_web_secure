var id = document.querySelector("#id");
var pswd = document.querySelector("#pswd");
var error = document.querySelectorAll(".error_next_box");



id.addEventListener("blur", checkId);
pswd.addEventListener("blur", checkPw);



var error_count = [];
for (var i = 0; i < 2; i++) {
  error_count[i] = 1;
}

//id
function checkId() {
  var idPattern = /[a-zA-Z0-9_-]{5,20}/;

  if(id.value == "") {
    error[0].innerHTML = "아이디를 입력하세요.";
    error[0].style.color = "red";
    error[0].style.display = "block";
    error_count[0] = 1;
  }
  else if(!idPattern.test(id.value)) {
    error[0].innerHTML = "형식에 맞지 않는 아이디입니다.";
    error[0].style.color = "red";
    error[0].style.display = "block";
    error_count[0] = 1;
  }
  else {
    error[0].style.display = "none";
    error_count[0] = 0;
  }
}



//pw
function checkPw() {
  var pwPattern = /[a-zA-Z0-9~!@#$%^&*()_+|<>?:{}]{8,16}/;

  if(pswd.value == "") {
    error[1].innerHTML = "비밀번호를 입력하세요.";
    error[1].style.color = "red";
    error[1].style.display = "block";
    error_count[1] = 1;
  }
  else if(!pwPattern.test(pswd.value)) {
    error[1].innerHTML = "형식에 맞지 않는 비밀번호입니다.";
    error[1].style.color = "red";
    error[1].style.display = "block";
    error_count[1] = 1;
  }
  else {
    error[1].style.display = "none";
    error_count[1] = 0;
  }
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

function windowClose(){
  location.reload();
  window.close();
}

//회원가입 버튼 코드
function checkLogin() {
  if (checkError()) {
    error[3].innerHTML = "실패 하였습니다.";
    error[3].style.color = "red";
    error[3].style.display = "block";
  }
  else {
    error[3].style.display = "none";
  }
}
