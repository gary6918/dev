<?php
	function showData(){
		$i = func_num_args();
		if ($i==0){
			echo "�S�����w�ǥ͸�ơI <br/>";
		}else{
			echo "���Z�ǥͦ��G";
			$student = func_get_args();
			foreach ($student as $data){
				echo $data."�A";
			}
			echo "�̫�@�Ӭ��G".func_get_arg($i-1)."�C<br />";
			
		}
	}
	showData();
	showData("������", "���a�g", "�����", "�B�l��", "���F��");
?>