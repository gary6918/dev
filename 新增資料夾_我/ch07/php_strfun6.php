<?php
$showStr = "Genius is one percent inspiration and ninety-nine percent perspiration.";
echo "�Ѥ~�O�@���F�P�[�W�E�Q�E���V�O�C<hr />";
echo chunk_split($showStr, 25, "<br />")."<hr />";
echo wordwrap($showStr, 25, "<br />");
?>