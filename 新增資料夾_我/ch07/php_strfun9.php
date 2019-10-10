<?php
$showStr = "忠孝仁愛信義和平";
$showWord = str_split($showStr,2);
foreach ($showWord as $value){
	echo $value."<br />";
}
?>