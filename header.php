<div style="background-color: chocolate; margin-top: 0px;height: 12%;width: 100%;display: flex">
  <div style="width: 40%;">
    <h1 align="left" style="margin-bottom:-12px;margin-top: 0px;margin-left: 10px; font-size: 50px;color:antiquewhite">RentNow</h1>
    <h5 align="left" style="margin-top: 0px;margin-left: 14px;color:antiquewhite ">Rent here Hire here</h5>
  </div>
  <div id="navi" style="width: 60%;height: 100%" align="right">
    <nav style=" margin-top: 20px ; height: 50%; width: inherit; margin-right: 10px">
      <div style="height: 100%">
      <?php 
        if (!isset($_SESSION['userID'])){
          echo'<input class="btn btn-primary" type="button" id="login" value="Login" style="height: 100%;width: 90px" onClick="login()";  >
          <input class="btn btn-primary" type="button" id="sign" value="Sign Up" style="height: 100%;width: 90px" onClick="signup()">;';
          
        }else {
          echo '
            <form action = "includes/logout.php" method="post">
            <input class="btn btn-danger" type="submit" id="logout" value="logout" style="height: 100%;width: 90px" onClick="logout()"  >
            </form>';
          
        }
        ?>

        

      </div>
    </nav>
  </div>
</div>
