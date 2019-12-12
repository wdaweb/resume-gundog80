<?php
include_once "../base.php";
echop($_POST);
echop($_FILES);
echop($_FILES['updateImage']);
br();
$table=$_POST['table'];
$userID=$_POST['userID'];
$file=$_FILES['updateImage'];
{  //取得srcPatch
	$srcPath="./img/";
	$srcName= md5(date('now') . $file['name']);
	$srcType=substr($file['name'],-3,3);
	$srcPath=$srcPath . $srcName . $srcType;
	echop($srcPath);
}
$data=['userID'=>$userID,'src'=>$srcPath,'fileName'=>$file['name']];
		if(!empty($_FILES['updateImage']['tmp_name'])){
			// =$_FILES['updataPhoto']['name'];
			move_uploaded_file($_FILES['updateImage']['tmp_name'],"." . $srcPath);
		}
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

	// break;
// }
echop($data);
echop($table);
save($table,$data);
header("location:../admin.php?table=$table");
?>
