<?php
include_once "../base.php";
$acc=$_POST['acc'];
$pw=$_POST['pw'];
$chk1=nums('resume_userBasicData',$_POST);
$chk2=find('resume_userBasicData',$_POST);
switch($chk1){
	case 0:
		echop("帳號密碼可能有誤，請返回首頁");
		echop("<a href='../index.php'>返回首頁</a>");
	break;
	case 1:
		$tt=$_SESSION['login']=find('resume_userBasicData',$_POST)['id'];
		echo "<script>alert('登入成功');history.go(-1);</script>";
	break;
	default:
		echop("發生不明錯誤，請返回首頁");
		echop("<a href='../index.php'>返回首頁</a>");
	break;
	
}
?>