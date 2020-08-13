<?php
include_once "../base.php";
$table=chkP('table');
unset($_POST['table']);
echo save($table,$_POST);
?>