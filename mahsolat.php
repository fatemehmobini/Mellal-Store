<?php
include("header.html")

?>

<br><br><br><br>
<h1 style="text-align:center">
محصولات فروشگاه
</h1>
<br><br><br><br>
<br><br><br><br><br><br>
<br><br>

<?php
$link=mysqli_connect("localhost","root","","mahsulha");
$query="SELECT*FROM masolat";
$result=mysqli_query($link,$query);
if(mysqli_connect_errno())
{exit("خطایی به این شرح رخ داده ".mysqli_connect_error());}

?>
<div class="row" style="width:100%;height:100%">
<?php
$counter=0;
while($row=mysqli_fetch_array($result))
{$counter++;
  ?>
  
<div class="col-4" style="width:33%;height:33%">
<div class="card">
<h4 style="color:purple;font: size 20px;">
<?php
echo($row['name_mahsol'])
?>
</h4>
<a href="mahsul.php?id=
<?php
echo($row['code_mahsol'])?>"style="text-decoration:none";
<center>

<img src="pic/<?php echo($row['tasvire_mahsol']);
?>";
</center>

</a>
</br>
قیمت:
<?php
echo($row['qeymate_mahsol'])
?>
&nbsp;ریال
<br>
تعداد موجودی:
<span style="color:red">
<?php
echo($row['tedade_mahsol'])

?>
</span>
<br><br>
توضیحات:
<sapn style="color:orange">
<?php
echo(substr ($row['tozihate_mahsol'],0,60))."...";
?>
</span>
<br>
</div>
</div>
<?php
if($counter%3==0)
{

?>

<div class="row" style="width:100%;height:100%">
</div>
<?php
}
}

if($counter%3!=0)
{

?>
<?php
}
?>

</div>
<br><br><br>
<?php


  include("footer.html");
?>