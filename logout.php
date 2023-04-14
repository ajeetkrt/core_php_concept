<?php
session_start();

session_destroy();
//header("location:index.php");
echo "Logged Out";
header("location:login.php");
exit;
?>