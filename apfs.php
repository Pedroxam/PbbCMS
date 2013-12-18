<?php

/*  Shoping PBB Forums By JahanPay
Author : Pedram Asbaghi Pour(Pedroxam) @ PersianSkyteam.com 
view Project on : https://github.com/Pedroxam/PbbCMS
*/


// configs set
$backurl = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
$sitename = 'عنوان سايت شما';

//here is Style
echo '<html dir="rtl">
	  <head>
	  <title>'.$sitename.'</title>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <style>
body {
	background: #555555 ;
	color: #ff0000;
	text-align: center;
	line-height: 1.3;
	font-family: Tahoma;
	font-size: 13px;
}

a:link {
	color: #026CB1;
	text-decoration: none;
}

a:visited {
	color: #026CB1;
	text-decoration: none;
}

a:hover, a:active {
	color: #ff0000;
	text-decoration: underline;
	font-weight: bold;
}

.tbl{
	direction:rtl;
	font-family:Tahoma;
	font-size:12px
}

table{
	background: #f1f1f1;
	border:1px black solid;
}

.right{

	background-color:#F2F8FF;
	width:150px;
	line-height:25px;
	font-size:12px;
	color:#003D59
	boarder: 1px solid #000000;
}

.center{

	background-color:#F2F8FF;
	width:600;
	line-height:25px;
	font-size:12px;
	color:#003D59
	boarder: 1px solid #000000;
}
input,select,option,textarea{
	font-family:Tahoma;
	font-size:11px;
}

#sent{
	display:block;
	background-color:#EEFBEE;
	border:1px green dashed;
	font-family:Tahoma;
	width:580px;
	margin:20px auto 20px auto;
	font-size:12px;
	text-align:center;
	padding:10px;
	box-shadow: -10px -10px 0px yellow;
	border-radius: 5px;
}

#err{
	display:block;
	background-color:#FFF8F4;
	border:1px maroon dashed;
	font-family:Tahoma;
	width:580px;
	margin:20px auto 20px auto;
	font-size:12px;
	text-align:center;
	padding:10px
}

.auto-style2 {
	text-align: center;
}

.auto-style3 {
	text-align: center;
	font-family: Tahoma;
	font-size: small;
}

.auto-style4 {
	text-align: center;
}

.auto-style5 {
	list-style-type: circle;
}

.auto-style6 {
	color: #0000FF;
}

.auto-style7 {
	font-family: Tahoma;
}
.auto-style9 {
	font-family: Tahoma;
	font-weight: normal;
}

.auto-style10 {
	text-align: right;
}
.auto-style11 {
	text-align: center;
	color: #0000FF;
	font-size: large;
}

</style>
	  </head>
	  <body>';
if(isset($_GET['au'])){
echo '<div class="fname">
	  برگشت از عمليات پرداخت، با موفقيت انجام شد.
	  <br />
	  <a href="http://'.$_SERVER['SERVER_NAME'].'">مشاهده سايت '.$sitename.'</a></div>';
	  exit();
}
if(isset($_POST['submit'])){
	$desc = 'نام محصول: '.$_POST['product_name'].'
	کد محصول: '.$_POST['product_id'].'
	نام کاربري: '.$_POST['name'].'
	ايميل کاربر: '.$_POST['email'].'
	تلفن کاربر: '.$_POST['tel'].'
	آدرس کاربر: '.$_POST['address'].'
	کد پستي: '.$_POST['postalcode'];
	
	
	echo '<table width="600" align="center" class="tbl" ><tr><td class="right"><div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">نام محصول</span> : </label></td><td class="left">'.$_POST['product_name'].'</td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">کد محصول</span> : </label></td><td class="left">'.$_POST['product_id'].'</td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">قيمت</span> : </label></td><td class="left">'.$_POST['price'].' تومان</td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">نام کاربري</span> : </label></td><td class="left">'.$_POST['name'].'</td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">ايميل کاربر</span> : </label></td><td class="left">'.$_POST['email'].'</td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">تلفن کاربر</span> : </label></td><td class="left">'.$_POST['tel'].'</td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">محل سکونت </span> : </label></td><td class="left">'.$_POST['address'].'</td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">کد پستي</span> : </label></td><td class="left">'.$_POST['postalcode'].'</td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">تاييد اطلاعات</span>: </label></td><td class="left"><div style="text-align: justify;"><span style="color: rgb(255, 0, 0);">ايا اطلاعات ثبتي را تاييد ميکنيد.</span></div></div>'.
	'<form action='http://www.jahanpay.com/pay/submit' method=post >
<input type='hidden' name='gateway' value='[darghah_pardakht]' />
مبلغ به تومان  <input type=text name='pricefield' dir=ltr value='' /> <br>
توضیحات <input type=text name='exfield'  dir=rtl /> <br>
<input type=hidden name='callback'   value='' />
<input type='submit' style='
	background:#00AAFF;
	border:1px solid transparent;
	color:white;
	font-size:11px;
	padding:2px 4px 2px 4px;
	border-bottom:2px solid  #009BE6;
	margin:3px;
	font-family:tahoma,sans-serif,arial,times;
	border-radius:4px
	' value='اتصال به درگاه پرداخت جهان پی' /></form>	</table><table width="600" align="center" class="tbl" ><tr><td class="center"><center>تهیه و تنظیم: <a href="http://Persianskyteam.com.com"> Pedram Asbaghi </a> | پشتيباني پلاگین: <a href="http://Forum.Persianskyteam.com">PersianSkyteam </a> | امکان قرار دادن پرداخت انلاین توسط <a href="https://Jahanpay.com/">جهان پی</a> </center></td></tr></table>';
}
else{
	echo '<form method="post" action="?wsdl"><input type="hidden" name="gateway" value="'.$_GET['darghah_pardakht'].'"><input type="hidden" name="product_name" value="'.$_GET['product_name'].'"><input type="hidden" name="product_id" value="'.$_GET['product_id'].'"><input type="hidden" name="pricefield" value="'.$_GET['amount'].'"><table width="600" align="center" class="tbl" ><tr><td class="right">'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">نام حساب جهان پی</span> : </label></td><td class="left">'.$_GET['darghah_pardakht'].'</td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">نام محصول</span> : </label></td><td class="left">'.$_GET['product_name'].'</td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">کد محصول</span> : </label></td><td class="left">'.$_GET['product_id'].'</td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">قيمت</span> : </label></td><td class="left">'.$_GET['amount'].' تومان</td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">نام کاربري</span> : </label></td><td class="left"><input type="text" name="name"></td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">ايميل کاربر</span> : </label></td><td class="left"><input type="text" dir="ltr" name="email"></td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">تلفن کاربر</span> : </label></td><td class="left"><input type="text" dir="ltr" name="tel"></td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">آدرس کاربر</span> : </label></td><td class="left"><input type="text" name="address"></td></tr></div>'.
	'<div class="fname"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">کد پستي</span> : </label></td><td class="left"><input type="text" name="postalcode"></td></tr></div>'.
	'<div class="submit"><tr><td class="right"><label for="lname"><span style="color: rgb(0, 0, 205);">پرداخت توسط جهان پی</span> : </td><td class="left"><input type="submit" name="submit" value="ادامه خريد" tasrget="_new"></form></td></tr></div></td></tr></table>
	<table width="600" align="center" class="tbl" ><tr><td class="center"><center>تهیه و تنظیم : <a href="http://Persianskyteam.com"> Pedram Asbaghi </a> | پشتیبانی از پلاگین: <a href="http://Forum.Persianskyteam.com/">PesianSkyteam</a> | امکان قرار دادن پرداخت انلاین توسط <a href="https://Jahanpay.com/">جهان پی</a> </center></td></tr></table>';
}

echo '</body>
	  </html>';

?>
