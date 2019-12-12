<?php
include_once "../base.php";
echop($_POST);
br();
$table=$_POST['table'];
// echop($)
// if($table=="shortSelfInterduction" || $table=="selfInterduction"){
if(in_array($table,["shortSelfInterduction","selfInterduction"])){
	$data[$table]=$_POST['sh'];
	$data['id']=$_POST['resumeID'];

	echo "hio";
		// echo "hi";
		// echo $_POST['id'];
	// }elseif($table=="workExperience"){
	}elseif(in_array($table,["workExperience"])){
		echo "hi";
		$data[$table]=implode(",",$_POST['sh']);
		$data['id']=$_POST['resumeID'];
	}
	// echop($data);
	echop($table);
	print_r($data);

	save('resume',$data);
	header("location:../admin.php?table=$table");

// echo $_POST['shortSelfInterduction'];
// br();
// echo $table;
?>