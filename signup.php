<link rel='stylesheet' type='text/css' href='css/form.css'>
     <div align = 'center' >
     <h1>Sign Up</h1>
     
    <p>Please fill in this form to create an account.</p>
    <hr>
	 <form onsubmit='return false'>
     
  <div class='container' align='center'>
    
    <label for='first_name'><b></b></label>
    <input class ='form-control' type='text' id='first_name' placeholder='First Name' name='first_name' required>
    
    <label for='last_name'><b></b></label>
    <input class ='form-control' type='text' id='last_name' placeholder='First Name' name='last_name' required>
    
    <label for='user_name'><b></b></label>
    <input class ='form-control' type='text' placeholder='Pick a Username' name='user_name' id='user_name' required>
    
    <label for='email'><b></b></label>
    <input class ='form-control' type='text' placeholder='Enter Email' name='email' id= 'email' required>

    <label for='psw'><b></b></label>
    <input class ='form-control' type='password' placeholder='Enter Password' name='psw' id='psw' required>
      
    <label for='psw-repeat'><b></b></label>
    <input class ='form-control ' type='password' placeholder='Repeat Password' name='psw-repeat' id='pswRepeat' onchange="checkPass()" required><br>
    <label>
      <input type='checkbox' checked='checked' name='checkBox' style='margin-bottom:15px' id='agree'> I have read and agree to the
    <a href='#' style='color:dodgerblue'>Terms of Use & Privacy Policy</a>
    </label>


    <div class='clearfix'>
      <button type='button' class='cancelbtn btn btn-danger' id='cancel'>Cancel</button>
      <button type='button' class='signupbtn btn btn-primary' onclick='signupSubmit()' id="signUp" >Sign Up</button>
    </div>
    <label id="registrationStatus"></label>
  </div>
</form>


<script src='js/formSubmit.js'></script>
</div>
