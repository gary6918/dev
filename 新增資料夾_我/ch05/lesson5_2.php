<?php
srand((double)microtime()*1000000);
for($i=0;$i<6;$i++){
$a = rand(1,42);
	echo "第".($i+1)."個號碼是：".$a ."<br />";
}
?>
