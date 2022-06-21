<?php // merged
session_start();

session_unset();
session_destroy();

header("Location: /current_final/index.php");
?>
