<?php
$student = array(array('�m�W'=>'������', '�ͤ�'=>'2000/3/14', '�q��'=>'0227042762'), 
				array('�m�W'=>'���a�g', '�ͤ�'=>'2000/6/6', '�q��'=>'0220938123'),
				array('�m�W'=>'�����', '�ͤ�'=>'2000/7/15', '�q��'=>'0225021314'),
				array('�m�W'=>'�B�l��', '�ͤ�'=>'2000/8/7', '�q��'=>'0425307996'),
				array('�m�W'=>'���F��', '�ͤ�'=>'2000/12/24', '�q��'=>'0227408965'));

foreach($student as $data){
	$birth = sscanf($data['�ͤ�'], "%d/%d/%d");
	$cbirth = vsprintf("%d�~%02d��%02d��", $birth);
	$phone = sprintf("(%02d)%08d",substr($data['�q��'],0,2),substr($data['�q��'],2,10));
	echo "�m�W�G".$data['�m�W']."�B�ͤ�G".$cbirth."�B�q�ܡG".$phone."�C<br />";
}
?>
