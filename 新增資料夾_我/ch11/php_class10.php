<?php
class Student { 
	const title = "�ǥ͸��";	//���O�`��
	public $int_Id;		//�y��
	public $str_Name;		//�m�W
	public $str_Sex;		//�ʧO
	
	public function setData($Id,$Name,$Sex){
		$this->int_Id = $Id;
		$this->str_Name = $Name;
		$this->str_Sex = $Sex;
	}
	public function showData(){
		echo "�y���G".$this->int_Id."<br />";
		echo "�m�W�G".$this->str_Name."<br />";
		echo "�ʧO�G".$this->str_Sex."<br />";
		echo "*****".self::title."����*****<br/>";
	}
} 
echo "*****".Student::title."�}�l*****<br/>";
$stdObject = new Student;
$stdObject->setData(1,"David","�k");
$stdObject->showData();
?>