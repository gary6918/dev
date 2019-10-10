<?php
class Student { 
	public $int_Id;		//�y��
	public $str_Name;		//�m�W
	public $str_Sex;		//�ʧO
	public $int_Chinese;	//��妨�Z
	public $int_English;	//�^�y���Z
	public $int_Maths;		//�ƾǦ��Z
	private $total_scores;	//�`���Z
	private $average_scores;	//�������� 
	
	private function totalScores(){
		return $this->int_Chinese + $this->int_English + $this->int_Maths;
	}
	private function averageScores(){
		return round($this->total_scores/3);
	}
	public function setData($Id,$Name,$Sex,$Chinese,$English,$Maths){
		$this->int_Id = $Id;
		$this->str_Name = $Name;
		$this->str_Sex = $Sex;
		$this->int_Chinese = $Chinese;
		$this->int_English = $English;
		$this->int_Maths = $Maths;
		$this->total_scores=$this->totalScores();
		$this->average_scores=$this->averageScores();		
	}
	public function showData(){
		echo "�y���G".$this->int_Id."<br />";
		echo "�m�W�G".$this->str_Name."<br />";
		echo "�ʧO�G".$this->str_Sex."<br />";
		echo "��妨�Z�G".$this->int_Chinese."<br />";
		echo "�^�y���Z�G".$this->int_English."<br />";
		echo "�ƾǦ��Z�G".$this->int_Maths."<br />";
		echo "�`���G".$this->total_scores."<br />";
		echo "�������ơG".$this->average_scores."<br />";
	}
} 

$stdObject = new Student;
$stdObject->setData(1,"David","�k",92,85,80);
$stdObject->showData();
?>