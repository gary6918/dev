<?php
	$showStr1="�j�a";
	$showStr2="  �@�_��  ";
	$showStr3="PHP�I";
	echo $showStr1.$showStr2.$showStr3."<br />";
	echo $showStr1.trim($showStr2).$showStr3."<br />";
	echo $showStr1.ltrim($showStr2).$showStr3."<br />";
	echo $showStr1.rtrim($showStr2).$showStr3."<br />";
	echo $showStr1.chop($showStr2).$showStr3;
?>