<?php
	$lottery = range(1,42,1);	
	$result = array_rand($lottery,6);
	sort($result);
	echo "�����ֳz�}�����X���G";
	foreach ($result as $val){
		echo $lottery[$val]." ";
	}
?>