<?php
$encodeStr = "abcd1234";
echo "��r��G" . $encodeStr . "<br />";
echo "str_rot13�[�K�G" . str_rot13($encodeStr) . "<br />";
echo "crypt�[�K�G" . crypt($encodeStr) . "<br />";
echo "md5�[�K�G" . md5($encodeStr) . "<br />";
echo "sha1�[�K�G" . sha1($encodeStr);
?>