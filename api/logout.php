<?php
include_once "../base.php";

unset($_SESSION['login']);
unset($_SESSION['id']);
header("location:./index.php");

?>