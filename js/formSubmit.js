//function signInit(){
//window.sign = document.getElementById('signUp');
//sign.disabled = true;
//}
//function checkPass(){
//    
//    var pass=document.getElementById('psw'),
//        passRe = document.getElementById('pswRepeat');
//    if (pass.value == passRe.value){
//        
//        sign.disabled = false;
//
//        alert(a);
//    }
//
//}
function signupSubmit(){
    var userName = document.getElementById("user_name").value;
    var firstName = document.getElementById("first_name").value;
    var lastName = document.getElementById("last_name").value;
    var email = document.getElementById("email").value;
    var psw = document.getElementById("psw").value;
    var pswRepeat = document.getElementById("pswRepeat").value;
    
    var request = new XMLHttpRequest(),
        data = new FormData();
    data.append("user_name",userName);
    data.append("first_name",firstName);
    data.append("last_name",lastName);
    data.append("email",email);
    data.append("psw",psw);
    request.open('POST','includes/submit.php',true);
    request.onload = function (e) {
        if (request.readyState === 4) {
            if (request.status === 200){
                document.getElementById('registrationStatus').innerHTML = request.responseText;
            } else {
                document.getElementById('registrationStatus').innerHTML = request.responseText;
            }
        }
    };
    request.onerror = function (e) {
        alert("Connection error!");
    };
    request.send(data);
    
};
function loginSubmit() {
    var loginUser = document.getElementById('login_user_name').value;
    var loginPass = document.getElementById('password').value;
    
    var loginRequest = new XMLHttpRequest(),
        loginData = new FormData();
    loginData.append('user_name',loginUser);
    loginData.append('password',loginPass);
    loginRequest.open('POST','includes/loginSubmit.php',true);
    loginRequest.onload=function (e){
        if (loginRequest.readyState ===4){
            if(loginRequest.status ===200){
                var response = loginRequest.responseText;
                var passwordInput = document.getElementById('password');
                var usernameInput = document.getElementById('login_user_name');
                
                if(response==="1"){ 
                    passwordInput.classList.add("is-valid");
                    usernameInput.classList.add("is-valid");
                    location.reload();
                } else if (response==="2"){
                    passwordInput.classList.add("is-invalid");
                } else if (response === "3"){
                    usernameInput.classList.add('is-invalid');
                } else {
                    alert(response);
                }
            } else {
                alert("Something went wrong");
            }
        }
    };
    loginRequest.onerror = function (e) {
        alert("Connection error!");
    };
    loginRequest.send(loginData);
}

