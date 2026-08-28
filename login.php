<?php
include("headerr.html");
?>
<br><br>
    <div class="container" style="background-color:hsla(46,100%,78%,0.7);">
        <form action="action_login.php" method="post" name="login" class="was-validated" style="direction:rtl;text-align:right;padding:15px 15px;border: 60px dotted orange;border-radius:20px">
         
        <div class="form-group">
          <br><br>
            <label for="uname" style="font-size:25px;font-family:arial">نام کاربری<span style="color:red">*</span></label>
            <input type="text" class="form-control" id="uname" placeholder="لطفا نام کاربری خود را وارد نمایید." name="uname" required>
    
 </div>
          <div class="form-group">
            <label for="pwd" style="font-size:25px;font-family:arial;font-weight:800;text-align:right">گذرواژه</label>
            <input type="password" class="form-control" id="pwd" placeholder="لطفا گذر واژه خود را وارد نمایید" name="pswd" required>     
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="checkbox" type="checkbox" name="remember" required> مرا به خاطر بسپار
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">گذرواژه</div>
            </label>
          </div>
          <button type="submit" class="btn btn-primary" style="float:left">ورود</button>
          <br><br><br>
        </form>
      </div>  

      <br><br>
      <?php
include("footer.html");

?>
