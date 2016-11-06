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
         <label>Description</label>
         <fieldset>
            <?php if(isset($xmlData->screenshots) != ""): ?>
            <a href="<?php echo "screenshots.php?id=".$id ?>" target="_new">
               <img class="icon" src="style/screenshot.png">
               <div>
                  <label>Screenshots</label>
              </div>
            </a>
            <?php endif; ?>
            <div>
              <?php foreach ($xmlData->descriptionlist as $descriptionlist) { ?>
                 <p><?php echo $descriptionlist->description ?></p>
              <?php } ?>
            </div>
         </fieldset>
         <?php if(isset($xmlData->changelogs) != ""): ?>
         <fieldset>
            <a><img class="icon" src="style/changelog.png">
            <div><label>Change Log</label></div></a>
            <div>
            <?php foreach ($xmlData->changelogs->change as $change) { ?>
               <p>・<?php echo $change->version ?><br><?php echo $change->log ?></p>
            <?php } ?>
            </div>
         </fieldset>
         <?php endif; ?>
      </panel>
      <!-- Footer-->
      <panel>
         <label>Information</label>
         <fieldset>
            <a href="http://www.twitter.com/NEXTi4HACK" target="_new">
               <img class="icon" src="style/twitter.png">
               <div>
                  <label>Follow @NEXTi4HACK</label>
               </div>
            </a>
            <a href="http://cydia.nexti4hack.com/" target="_new">
               <img class="icon" src="./style/NEXTi4HACK.com.png">
               <div>
                  <label>NEXTi4HACK.com</label>
               </div>
            </a>
         </fieldset>
      </panel>
   </body>
</html>
