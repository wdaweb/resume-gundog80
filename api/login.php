<?php
include_once "../base.php";
$acc=$_POST['acc'];
$ps=$_POST['ps'];
$data=['acc'=>$acc,'ps'=>$ps];
$chack=nums('userbasicdata',$data);
switch($chack){
	case 0:
		echop("帳號密碼可能有誤，請返回首頁");
		echop("<a href='../index.php'>返回首頁</a>");
	break;
	case 1:
		$_SESSION['login']=1;
		$_SESSION['id']=find('userbasicdata',$data)['id'];
		echop("登錄成功");
		header("location:../index.php");
	break;
	default:
		echop("發生不明錯誤，請返回首頁");
		echop("<a href='../index.php'>返回首頁</a>");
	break;
	
}
?>