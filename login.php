<link rel='stylesheet' href='css/form.css'>

<div align = 'center' class='loginform'>
	<h1>Log In to your account</h1>
	<hr>
	<div>
			<form  onsubmit='return false;'>
					<input class = 'form-control' type = 'text' name='user_name' id = 'login_user_name' required placeholder='User Name'><br>
					<input class = 'form-control' type='password' name ='password' id = 'password' required placeholder='Password'><br>
					<button class= 'loginbtn btn btn-primary' onclick="loginSubmit()">login</button>
			</form>
	</div>
</div>
<script src="js/formSubmit.js"></script>
