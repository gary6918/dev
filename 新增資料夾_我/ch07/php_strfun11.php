<?php
$showStr = "My name is David.";
echo $showStr . "<hr />"; 
$showArray = count_chars($showStr, 1);
foreach ( $showArray as $i => $val) {
    echo "�r��  ".chr($i)." �X�{�F $val ���C <br />";
}
?>