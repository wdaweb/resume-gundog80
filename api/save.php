<?php
include_once "../base.php";
echop($_POST);
echop($_FILES);
$table=chkP('table');
unset($_POST['table']);
$source=chkP('source',$table);
unset($_POST['source']);
$id=chkP('id');
if($id==""){
	unset($_POST['id']);
}

if(!empty($_FILES['file']['tmp_name'])){
	$fName=chkP('fName',$_FILES['file']['name']);
	// $fName=($fName=="")?$_FILES['file']['name']:"";
	$type=explode(".",$_FILES['file']['name']);
	$tmp=sizeof($type)-1;
	$type=$type[$tmp];
	$tpName=$_FILES['file']['tmp_name'];
	$path="./upFile/" . md5($_FILES['file']['name'] . date("His")) . "." . $type;
	rename($tpName,"." . $path);
	$_POST['path']=$path;
	$_POST['fName']=$fName;
}
save($table,$_POST);


// switch($source){
// 	case "shortSelfInterduction":
// 		$table="userBasicData";
// 		$userID=$_POST['userID'];
// 		$photoPath="./img/";
// 		$photoPath = $photoPath . $_FILES['updatePhoto']['name'];
// 		$data=['id'=>$userID,'photoPath'=>$photoPath];
// 		if(!empty($_FILES['updatePhoto']['tmp_name'])){
// 			// =$_FILES['updataPhoto']['name'];
// 			move_uploaded_file($_FILES['updatePhoto']['tmp_name'],"." . $photoPath);
// 		}

// 	break;
// }
// echop($data);
// echop($table);
// save($table,$data);

to("../admin.php?do=$source");

// header("location:../admin.php?table=$source");

?>