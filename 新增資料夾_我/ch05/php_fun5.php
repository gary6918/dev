<?php
	$x = 2;
	function showDouble(&$x){
		$x = $x * 2 ;
		echo "�禡�����Ȭ��G" . $x ."<br />";
	}
	showDouble($x);
	echo "�禡�~���Ȭ��G" . $x ."<br />";;
?>