<?php
include_once "../base.php";
echop($_POST);
$table='resume_resume';
$nRes=find($table,$_POST['source']);
unset($nRes['id']);
$nRes['resumeName']=$_POST['resName'];
save($table,$nRes);
$nResID=q('SELECT LAST_INSERT_ID()')[0][0];
// echop($nResID);
header("location:../admin.php?resumdID=$nResID");
?>