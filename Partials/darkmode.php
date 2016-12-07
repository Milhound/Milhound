<?php
  session_start();
  if (!isset($_SESSION['darkmode']) || $_SESSION['darkmode'] == false) {
    $_SESSION['darkmode'] = true;
  } else {
    $_SESSION['darkmode'] = false;
  }
?>
 