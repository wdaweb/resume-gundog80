<?php
include_once "../base.php";
echop($_POST);
echop($_FILES);
echop($_FILES['updatePhoto']);
br();
$source=$_POST['source'];
switch($source){
	case "shortSelfInterduction":
		$table="userBasicData";
		$userID=$_POST['userID'];
		$photoPath="./img/";
		$photoPath = $photoPath . $_FILES['updatePhoto']['name'];
		$data=['id'=>$userID,'photoPath'=>$photoPath];
		if(!empty($_FILES['updatePhoto']['tmp_name'])){
			// =$_FILES['updataPhoto']['name'];
			move_uploaded_file($_FILES['updatePhoto']['tmp_name'],"." . $photoPath);
		}

	break;
}
echop($data);
echop($table);
save($table,$data);
header("location:../admin.php?table=$source");

?>