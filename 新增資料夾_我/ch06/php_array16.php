<?php 
$a = array(20,25,18,34,20,45);
$b = array('�q�u��','�w��','�v����','�氮','�K�_��','���Y');
array_multisort($a,SORT_DESC,$b,SORT_ASC);
for($i=0;$i<count($a);$i++){
	echo $b[$i].' ��� $'.$a[$i].'<br />';
}
?>