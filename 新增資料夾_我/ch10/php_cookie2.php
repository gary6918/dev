<?php
$dateStr = date("Y-m-d 23:59:59");
if(isset($_COOKIE["counter"])){
	$counter = $_COOKIE["counter"];
	$counter++;	
	setcookie("counter", $counter, strtotime($dateStr));
}else{
	setcookie("counter", "0", strtotime($dateStr));
	header("Location: php_cookie2.php");
}
?>
<html>
<head>
	<title>�����s������</title>
</head>
<body>
<?php
echo "�z�����s�����������Ƭ�".$counter."��";
?>
</body>
</html>