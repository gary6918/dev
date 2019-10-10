<?php 
echo strftime("%A, %d %b %Y %H:%M:%S")."<br />";
echo gmstrftime("%A, %d %b %Y %H:%M:%S")."<br />";
setlocale(LC_ALL, 'cht_taiwan');
//setlocale(LC_ALL, "zh_TW");
echo strftime("%A, %d %b %Y %H:%M:%S")."<br />";
echo gmstrftime("%A, %d %b %Y %H:%M:%S");
?>