<?php
$showStr = "Genius is one percent inspiration and ninety-nine percent perspiration."; 
echo "�Ѥ~�O�@���F�P�[�W�E�Q�E���V�O�C<hr />";
$tok = strtok ($showStr," ");
while ($tok) { 
	echo "$tok<br>"; 
	$tok = strtok (" "); 
}
?>