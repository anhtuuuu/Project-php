<?php
session_start();
session_destroy();

header("location:{$level}page-login.php");
?>