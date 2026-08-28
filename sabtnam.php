<?php

include("headerr.html")

?>
<br><br><br><br>
<div class="input-group">

<div class="container" style="padding:40px 40px;content-align:center;background-color:rgb(255,228,225);border:10px  Inset #C71585;border-radius:50px">
  <h2 style="text-align:center">فرم ثبت  سفارش</h2>
  <form name="sabtnam" action="action-regist.php" style="direction:rtl;text-align:right;">
    <div class="form-group">
      <label for="username">نام کاربری
     <span style="color:red">*</span>   
      </label>
      <input type="text" class="form-control" id="username" placeholder="نام کاربری خود را وارد کنید" name="username">
    </div>
    <label for="email">ایمیل</label>
      <input type="email" class="form-control" id="email" placeholder="ایمیل خود را وارد نمایید" name="email">
    
    
      <label for="pwd">پسوورد
      <span style="color:red">*</span> 
    </label>
      <input type="password" class="form-control" id="pwd" placeholder="گذرواژه خود را وارد نمایید" name="pswd">
   
 
      <label for="pwd">پسوورد
      <span style="color:red">*</span> 
      </label>

      <input type="password" class="form-control" id="pwd2" placeholder="گذرواژه خود را مجدد وارد نمایید" name="pswd2">
    
      <label for="phone">شماره موبایل</label>
      <input type="tel" class="form-control"  value="09" id="phone" placeholder="شماره تلفن خود را وارد کنید" name="phones" >
      <label for="address">آدرس
      <span style="color:red">*</span>   
      </label>
      <input type="text" class="form-control" id="address" placeholder="آدرس خود را دقیق وارد کنید" name="adres">
      <label for="code">کد پستی
      <span style="color:red">*</span>   
      </label>
      <input type="number" class="form-control" id="code" placeholder="" name="cod">
      

    <div class="checkbox">
<label><input type="checkbox" name="remember">به خاطر بسپارید
  </label>
    </div>
   
  <label for="myfile">تصویر خود را انتخاب نمایید.</label>
<div class="form-group">
  <input type="file" id="myfile" name="myfile">
</div>
 
<button type="submit" class=" btn-outline-dark"   style ="float:left;" >ثبت</button>
  </form>
</div>
</div>
<br><br><br><br>
<?php
     include("footer.html");   
?>
</body>
</html>









