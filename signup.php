<?php
echo
	 '<link rel="stylesheet" type="text/css" href="css/form.css">
	 <form action="action_page.php" style="border:1px solid #ccc">
  <div class="container" align="center">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="first_name"><b></b></label>
    <input type="text" placeholder="First Name" name="first_name" required>
    
    <label for="last_name"><b></b></label>
    <input type="text" placeholder="First Name" name="last_name" required>

    <label for="email"><b></b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b></b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b></b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>

    <label>
      <input type="checkbox" checked="checked" name="checkBox" style="margin-bottom:15px"> I have read and agree to the
    <a href="#" style="color:dodgerblue">Terms of Use & Privacy Policy</a>
    </label>


    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
'
?>
