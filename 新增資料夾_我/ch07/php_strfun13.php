<?php
$showStr = "���ͱz�n�A�w����{��W�դu�@�ǡI";
echo $showStr. "<br />";
echo strtr($showStr, "��W�դu�@��", "��W�դj����") . "<br />"; 
$replaceStr = array("����"=>"�p�j", "��W�դu�@��"=>"��W�դj����");
echo strtr($showStr, $replaceStr) . "<br />"; 
echo str_replace("��W�դu�@��", "��W��", $showStr) . "<br />"; 
echo substr_replace($showStr, "�p�j", 0, 4); 
?>