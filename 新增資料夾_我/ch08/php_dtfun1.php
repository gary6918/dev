<?php
echo "getdate() �禡���ϥ�<hr />";
$nowTime = getdate();
foreach($nowTime as $Key => $Value){
	echo "$Key => $Value <br />";
}
echo "<hr />localtime() �禡���ϥ�<hr />";
$nowTime = localtime(time(),1);
foreach($nowTime as $Key => $Value){
	echo "$Key => $Value <br />";
}
echo "<hr />gettimeofday() �禡���ϥ�<hr />";
$nowTime = gettimeofday();
foreach($nowTime as $Key => $Value){
	echo "$Key => $Value <br />";
}
?>
