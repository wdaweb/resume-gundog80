<?php
include_once "../base.php";
echop($_POST);
br();
$table=$_POST['table'];
// echop($)
$data=$_POST;
unset($data['table']);
// $data['id']=$_POST['id'];
// if($data['id']==""){
// 	unset($data['id']);
// }
foreach($data as $k => $v){
	if($v==""){
		unset($data[$k]);
	}
}
echop($table);
echop($data);
save($table,$data);
header("location:../admin.php?table=$table");

// echo $_POST['shortSelfInterduction'];
// br();
// echo $table;
?>