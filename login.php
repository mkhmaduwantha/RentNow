<!-- <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<style>
		body{
			font-family: Arial,Georgia,"Times New Roman";
		}
	</style>
</head>

<body style="margin: 0px">

    <div>
        <form action="signIn.php" method = "post" enctype="multipart/form-data">
            <label>User name</label>
            <input type = "text" name="user_name" id = "user_name" required><br>
            <label>Password</label>
            <input type="password" name ="password" id = "password" required>
            <button>submit</button>
        </form>
    </div>
</body>
</html> -->
<?php
echo "<div>
		<form action='signIn.php' method = 'post' enctype='multipart/form-data'>
				<label>User name</label>
				<input type = 'text' name='user_name' id = 'user_name' required><br>
				<label>Password</label>
				<input type='password' name ='password' id = 'password' required>
				<button>submit</button>
		</form>
</div>"
?>
