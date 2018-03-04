<?php
ob_start();
session_start();
unset($_SESSION['email']);
session_destroy();
ob_end_clean();
header("location: index.php");

ob_end_clean();
?>
