<?php
$dateStr = "2005-11-24 04:30:25"; 
$timestamp = strtotime($dateStr);
echo "�X�ͮɶ��G" . $dateStr . "<br />";
echo "�h������G" . date("Y-m-d",strtotime("- 10 months",$timestamp)) . "<br />";
echo "�������G" . date("Y-m-d",strtotime("+ 1 month",$timestamp)) . "<br />";
echo "�P������G" . date("Y-m-d",strtotime("+ 1 year",$timestamp)) . "<br />";
?>