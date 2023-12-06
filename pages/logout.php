<?php
session_start();
session_destroy();

header("location:{$level}login.php");
?>