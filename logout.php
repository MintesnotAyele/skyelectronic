<?php
  session_start();
  session_unset();
  session_destroy();
  echo ("<SCRIPT LANGUAGE='JavaScript'>alert('LOGED OUT')</script>");
?>
  <meta http-equiv="refresh" content="3;url=home.html" />
<?php
?>
