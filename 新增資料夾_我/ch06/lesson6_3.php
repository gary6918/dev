<?php
	$lottery = range(1,42,1);
	shuffle($lottery);
	$result = array_slice($lottery,0,6);
	sort($result);
	echo "�����ֳz�}�����X���G";
	foreach ($result as $val){
		echo $val." ";
	}
?>