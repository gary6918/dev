<?php
$fname = array("photo.jpg", "readme.doc","sheet.xls","note.txt");
$ftype = array(".txt"=>"��r��", ".doc"=>"Word��", ".xls"=>"Excel��", ".jpg"=>"�Ϥ���");
foreach($fname as $val){
	$ft = strstr($val, ".");
	foreach($ftype as $name => $desc){
		if ($name == $ft){
			echo $val ." �O " . $desc . "�A���ɦW�O ".substr($name,1)."�C<br />";
			break;
		}
	}
}
?> 