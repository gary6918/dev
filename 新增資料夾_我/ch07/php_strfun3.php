<?php
	$showStr="('��W�դu�@��'[�ۧڤ��к��}])http://www.e-happy.com.tw?aboutme=true";
	echo $showStr."<hr />";
	echo quotemeta($showStr)."<hr />";
	echo addslashes($showStr)."<hr />";
	echo addcslashes($showStr,"'[]")."<hr />";
	$showStr1 = addslashes($showStr);
	$showStr2 = addcslashes($showStr,"'[]");
	echo stripslashes($showStr1)."<hr />";
	echo stripcslashes($showStr2);
?>