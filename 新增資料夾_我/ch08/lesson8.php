<?php
//�����Y
$head = <<<calendar
  <tr>
    <td align="center">�P����</td>
    <td align="center">�P���@</td>
    <td align="center">�P���G</td>
    <td align="center">�P���T</td>
    <td align="center">�P���|</td>
    <td align="center">�P����</td>
    <td align="center">�P����</td>
  </tr>
calendar;
$timestamp = strtotime(date("Y-m-01"));
$thisMonthDays = date("t",$timestamp);		//�Ӥ릳�X��
$thisMonthStart = date("w",$timestamp);		//�Ӥ�1���O�Ӷg�ĴX��
$body = "<tr>";
for ($i=0;$i<$thisMonthStart;$i++){
	$body .= "<td align=\"center\">&nbsp;</td>";
}
$col = $thisMonthStart;
for ($i=1;$i<=$thisMonthDays;$i++){			//��ܤ��
	if($col == 7){
		$body .= "</tr><tr>";
		$col = 0;
	}
	$body .= "<td align=\"center\">$i</td>";
	$col++;
}
for ($i=$col;$i<7;$i++){
	$body .= "<td align=\"center\">&nbsp;</td>";
}
$body .= "<tr>";
echo "<table width=\"100%\" border=\"1\">",$head,$body,"</table>";
?>