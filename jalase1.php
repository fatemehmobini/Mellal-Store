<?php
echo("hello world!");
echo("<br><br>");
#انواع متغیر ها در زبان پی اچ پی سه نوع اند
$add1=5;
$add2=7;
echo strlen("maedeh abdi");
echo("<br>");
echo str_word_count("in the name of God");
echo("<br>");
echo strrev("salam");
echo("<br>");
echo strpos("hello world","world");
echo("<br>");

//position jaygah az 0 shoru mishe//
echo strpos("hello fatemeh","e");
echo("<br>");
echo strpos("shqhayq and negar","q");
echo("<br>");
echo str_replace("sara","zahra","sara emami");
echo("<br>");
$x=-598;
var_dump(is_int($x));
echo("<br>");
$y=-34.00;
var_dump(is_float($y));
echo("<br>");
$z=34.8;
$int_cast=(int)$z;
echo($int_cast);
$p=45;
var_dump(is_numeric($p));
$w=-546;
var_dump(is_numeric($w));
$t="67.87"+100;
var_dump(is_numeric($t));
echo(pi());
echo("<br>");
echo(min(19,25,54,187));
echo("<br>");
echo(min(-20,18,12,20,34));
echo("<br>");
echo(abs(-56.7));
echo("<br>");
echo(sqrt(1024)."<br>");
echo("<br>");
echo(round(64.4));
echo("<br>");
echo(rand(3,8));
echo("<br>");
define("mytest","inavalin clase");
echo mytest;
echo("<br>");
define("test","jalase aval");
echo test;

echo("<br>");
$m="reza";
$n="greek";
echo $m." ".$n;
echo("<br>");
$t=date("H"."M");
echo($t);
echo("<br>");
$favcolor="red";

switch($favcolor)
{case "red":
 echo"vour favorite color is:red";
 break;
 case "green":
    echo"your favorite color is:purple";
break;
default:
echo"خاک تو سرت";


}
echo("<br>");


echo("<br>");

echo("<br>");















?>







































