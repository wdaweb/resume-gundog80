<?php
include_once "../base.php";
echop($_POST);
br();
$table=$_POST['table'];
$source=chkP('source',$table);
$resume['id']=$_POST['resumeID'];
unset($_POST['table']);
unset($_POST['source']);

// echop($)
// if($table=="shortSelfInterduction" || $table=="selfInterduction"){
	// echop($_POST['sh']);
	$resume[$table]=serialize($_POST['sh']);

	save('resume',$resume);
	// to("../admin.php?do=$source");
?>