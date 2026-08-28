<?php
include("header.html");
?>


<div class="container" style="padding: 40px 40px;align-items: center;align-self: center;align-content: center;background-color:antiquewhite;border: 3px solid black; margin-top: 20px;margin-bottom: 20px;direction: rtl;">
  <h2 style="text-align: center;">ثبت نام</h2>
  <form action="/action_page.php" style="text-align: right; direction: rtl;">
  <div class="form-group">
      <label for="username">نام کاربری
        <span style="color: red;">*</span>
      </label>
      <input type="text" class="form-control" id="username" placeholder="نام کاربری خود را وارد کنید " name="username">
    </div>
    <div class="form-group">
      <label for="email">ایمیل</label>
      <input type="email" class="form-control" id="email" placeholder="ایمیل خود را وارد کنید" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">پسوورد</label>
      <input type="password" class="form-control" id="pwd" placeholder="گذرواژه را وارد نمایید" name="pswd">
    </div>
    <div class="form-group">
      <label for="pwd">پسوورد</label>
      <input type="password" class="form-control" id="pwd2" placeholder="گذرواژه خود را مجددا وارد نمایید" name="pswd2">
    </div>
    <div class="checkbox">
        <label><input type="checkbox" name="remember"> به خاطر بسپارید</label>
      </div>
 
    <button type="button" class="btn btn-primary" onclick="checkblk()" style="float: left;">ثبت</button>
</br>
  </form>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
    <p>کلیه حقوق مادی و معنوی این سایت متعلق به مهتاب می باشد</p>
  </div>

</body>
</html>
