<?php 
header("Content-Type: text/html; charset=utf-8");
require_once("connMysql.php");
//計算點閱數
if(isset($_GET["action"])&&($_GET["action"]=="hits")){	
	$query_hits = "UPDATE `albumphoto` SET `ap_hits`=`ap_hits`+1 WHERE `ap_id`=".$_GET["id"];
	mysql_query($query_hits);
	header("Location: albumphoto.php?id=".$_GET["id"]);
}
//顯示相簿資訊SQL敘述句
$query_RecAlbum = "SELECT * FROM `album` WHERE `album_id`=".$_GET["id"];
//顯示照片SQL敘述句
$query_RecPhoto = "SELECT * FROM `albumphoto` WHERE `album_id`=".$_GET["id"]." ORDER BY `ap_date` DESC";
//將二個SQL敘述句查詢資料儲存到 $RecAlbum、$RecPhoto 中
$RecAlbum = mysql_query($query_RecAlbum);
$RecPhoto = mysql_query($query_RecPhoto);
//計算照片總筆數
$total_records = mysql_num_rows($RecPhoto);
//取得相簿資訊
$row_RecAlbum=mysql_fetch_assoc($RecAlbum);
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
         <td><div class="subjectDiv"> <?php echo $row_RecAlbum["album_title"];?>
           </div>
           <div class="actionDiv">照片總數：<?php echo $total_records;?></div>
           <div class="normalDiv">
             <p><strong>拍攝時間</strong>：<?php echo $row_RecAlbum["album_date"];?> <strong>拍攝地點</strong>：<?php echo $row_RecAlbum["album_location"];?></p>
             <p><?php echo nl2br($row_RecAlbum["album_desc"]);?></p>
             </div>
           <?php while($row_RecPhoto=mysql_fetch_assoc($RecPhoto)){?>
           <div class="albumDiv">
           <div class="picDiv"><a href="?action=hits&id=<?php echo $row_RecPhoto["ap_id"];?>"><img src="photos/<?php echo $row_RecPhoto["ap_picurl"];?>" alt="<?php echo $row_RecPhoto["ap_subject"];?>" width="120" height="120" border="0" /></a></a></div>
           <div class="albuminfo"><a href="?action=hits&id=<?php echo $row_RecPhoto["ap_id"];?>"><?php echo $row_RecPhoto["ap_subject"];?></a><br />
             <span class="smalltext">點閱次數：<?php echo $row_RecPhoto["ap_hits"];?></span></div>
           </div>
           <?php }?></td>
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
