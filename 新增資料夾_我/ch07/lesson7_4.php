<?php  
	$strData = "���q�H�c service@e-happy.com.tw�A�ڪ��H�c�O david@e-happy.com.tw";
	$regex = "/([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})/";
	echo preg_replace($regex,"<a href=\"mailto:\\0\">\\0</a>",$strData);
?>


