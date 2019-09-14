<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$CI =& get_instance();
// $this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
	<head>
	<base href="<?=base_url(). 'public/';?>"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uiCookies:Stack &mdash; Free Bootstrap Theme, Free Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
	<![endif]-->
	
  </head>
  <body>
    
   hello test <br>
   <img src="img/work_1.jpg" alt="">

    <table>
      <thead>
        <tr>
          <th>id</th>
          <th>名</th>
          <th>電話</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($friends as $f): ?>
         <tr>
          <td><?php echo $f->id; ?></td>
          <td><?php echo $f->name; ?></td>
          <td><?php echo $f->tel; ?></td>
        </tr>

        <?php endforeach; ?>
      </tbody>

     </table>  
  </body>
</html>