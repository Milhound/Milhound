<?php
  session_start();
  if ($_SESSION['darkmode'] == false) {
    $_SESSION['darkmode'] = true;
  } else {
    $_SESSION['darkmode'] = false;
  }
?>
 
