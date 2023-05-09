<?php
session_start();
      if(!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] != 'SIM') {
        header('location: index.php?login=erro2');
      }
?>