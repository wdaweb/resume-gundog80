<?php
include_once "../base.php";
echop($_POST);
br();
$table=$_POST['table'];
$source=chkP('source');
if($source==""){
	$source=$table;
}

	$data[$table]=$_POST[$table];
	$data['id']=$_POST['id'];


	del("resume_$table",$data[id]);
	header("location:../admin.php?do=$table");
// if($table=="shortSelfInterduction" || "selfInterduction" ){
// 	$data[$table]=$_POST[$table];
// 	$data['id']=$_POST['id'];

// 	// echop($data);
// 	del($table,$data[id]);
// 	header("location:../admin.php?table=$table");
// }
// echo $_POST['shortSelfInterduction'];
// br();
// echo $table;
?>