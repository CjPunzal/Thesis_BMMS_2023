<?php?>
<!DOCTYPE html> <!-- WEBSITE MENTIONS -->

<meta charset="utf-8">
<link href="css/web_root.css" rel="stylesheet" type="text/css"/>
<link href="css/fonts/font.css" rel="stylesheet" type="text/css"/>

  <html> <!-- WEBSITE START -->
    <?php include ('templates/background.php')?>
    <?php include ('templates/footer.php')?>

  <?php
  $allowed = array('login','dashboard'); // add the pagenames you need
  $page = ( isset($_GET['page']) ) ? $_GET['page'] : 'index';
  if ( in_array($page, $allowed) ) {
    include("templates/header_user.php");
    include("pages/$page.php");
  } else {
    include("templates/header.php");
    include("pages/login.php");
  }
  ?>

  </html>
