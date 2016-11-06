<?php
  //パラメータ取得
  if(isset($_GET['id'])) {
      $id = $_GET['id'];
      $xmlData = simplexml_load_file("packages/" . $id . "/info.xml");
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
      <meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport">
      <link href="style/style.css" rel="stylesheet" type="text/css">
      <link href="style/local.css" rel="stylesheet" type="text/css">
      <title><?php echo $xmlData->name ?></title>
   </head>
   <body class="pinstripe">
      <panel>
         <label>ScreenShots</label>
         <fieldset>
           <?php foreach ($xmlData->screenshots->screenshot as $screenshot) { ?>
              <div align="center">
                <p><?php echo $screenshot->description ?><p>
                <div>
                   <img src="<?php echo "packages/".$id."/screenshots/".$screenshot->image ?>" style="width: 100%;" />
                </div>
              </div>
           <?php } ?>
         </fieldset>
      </panel>
   </body>
</html>
