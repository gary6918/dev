<?php 
header("Content-Type: text/html; charset=utf-8");
require_once("connMysql.php");
//顯示照片SQL敘述句
$query_RecPhoto = "SELECT `album`.`album_title`,`albumphoto`.* FROM `album`,`albumphoto` WHERE (`album`.`album_id`=`albumphoto`.`album_id`) AND `ap_id`=".$_GET["id"];
//將SQL敘述句查詢資料到 $result 中
$RecPhoto = mysql_query($query_RecPhoto);
//取得相簿資訊
$row_RecPhoto=mysql_fetch_assoc($RecPhoto);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>網路相簿</title>
<style type="text/css"></style>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#cccccc">
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="124" valign="top" background="images/album_r1_c1.jpg"><div class="titleDiv">[生活、旅行的記錄]</div>
      <div class="menulink"><a href="index.php">[相簿首頁]</a> <a href="login.php">[相簿管理]</a></div></td>
  </tr>
  <tr>
    <td background="images/album_r2_c1.jpg"><div id="mainRegion">
        <table width="90%" border="0" align="center" cellpadding="4" cellspacing="0">
          <tr>
            <td><div class="subjectDiv"><?php echo $row_RecPhoto["album_title"];?></div>
              <div class="actionDiv"><a href="albumshow.php?id=<?php echo $row_RecPhoto["album_id"];?>">回上一頁</a></div>
              <div class="photoDiv"><img src="photos/<?php echo $row_RecPhoto["ap_picurl"];?>" /></div>
              <div class="normalDiv">
                <p align="center"><?php echo $row_RecPhoto["ap_subject"];?></p>
              </div></td>
          </tr>
        </table>
      </div></td>
  </tr>
  <tr>
    <td align="center" background="images/album_r2_c1.jpg" class="trademark">© 2014 eHappy Studio All Rights Reserved.</td>
  </tr>
  <tr>
    <td><img name="album_r4_c1" src="images/album_r4_c1.jpg" width="778" height="24" border="0" id="album_r4_c1" alt="" /></td>
  </tr>
</table>
</body>
</html>
