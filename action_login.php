<?php
include("headerr.html");
?>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<?php
if(isset($_post['uname'])&&!empty($_post['uname'])&&isset($_post['pwd'])&&!empty(['pwd']))
{$uname=$_post['uname'];
$pwd=$_post['pwd'];
}
else
{echo ("please fill out the forms completely");}
$link=mysqli_connect("localhost","root","","edari shop");
if(mysqli_connect_errno())
{exit("خطایی رخ داده است:".mysqli_connect_error());}
mysqli_query($link,"SET NAMES UTF8");
$query="SELECT * FROM users WHERE realname='$uname' AND `password`='$pwd'";
$result=mysqli_query($link,$query);
$row=mysqli_query($link,$query);
if($row)
{
    echo("خوش آمدید به سایت ما");

}
?>



<?php
include("footer.html");

?>
