<?php
$setResult=setcookie("TestCookie", "�o�OCookie�����e");
?>
<html>
<head>
	<title>Cookie �s������</title>
</head>
<body>
<?php
if($setResult){
	if(isset($_COOKIE["TestCookie"])){
		echo "Cookie�����e���G".$_COOKIE["TestCookie"];
	}else{
		echo "Cookie �x�s���\�A�Э��㭶�����!";
	}
}
?>
</body>
</html>