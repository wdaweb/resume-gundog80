<?php
include_once "../base.php";
echop($_POST);
br();
$table=$_POST['table'];
$source=chkP('source','../admin.php?do=' . $table);
$resume['id']=chkP('resumeID');
unset($_POST['table']);
unset($_POST['source']);
unset($_POST['resumeID']);
if(!empty($_POST['sh'])){
	$resume[$table]=serialize($_POST['sh']);
	unset($_POST['sh']);
	save('resume_resume',$resume);
}

foreach ($_POST as $k => $v){
	$tag[]=$k;
}
foreach ($_POST['id'] as $k => $v){
	foreach($tag as $t){
		$data[$t]=$_POST[$t][$k];
	}
	save("resume_$table",$data);
}
to("$source");
?>