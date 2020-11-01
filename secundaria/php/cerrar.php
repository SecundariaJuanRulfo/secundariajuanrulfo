<?php
session_start();
?>
<?PHP

session_unset();
session_destroy();
header("location:../php/index.php");

?>