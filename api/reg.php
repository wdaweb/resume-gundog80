<?php
include_once "../base.php";
$table=chkP('table');
unset($_POST['table']);
save($table,$_POST);
$userID=find($table,$_POST)['id'];
echo save("resume_resume",['userID'=>$userID,'resumeName'=>"測試用",
'sayHellow'=>serialize([0])])
?>