<?php
include_once "./base.php";
if(isset($_GET['resumeID'])){
    $resumeID=$_GET['resumeID'];
}else{
	$resumeID=1;
    // echop("非法操作，請由首頁進入");
	// echop("<a href='./resume.php?resumeID=1'>點此測試</a>");

}
$userID=find('resume',$resumeID)['userID'];
?>

<?php
if(!isset($_SESSION['id']) ){
?>
<div class=resume2>
	<div class=container-fluid>
		<div class=row>
			<?php
				$name="訪客" 
			?>
		<div class=col-4><?php echo $name ;?> 您好：</div>
		<div class=col-6 style="text-align:right">
			<form action="./api/login.php" method="post">
				會員登入：
				<input type="text" name="acc">
				<input type="password" name="ps" >
				<input type="submit" value="登入">
			</form>
		</div>
	</div>
</div>

<?php } else{
?>
<div class=resume2>
	<div class=container-fluid>
		<div class=row>
			<?php
				$userID=$_SESSION['id'];
				$name=find('userbasicdata',$userID)['name'];
			?>
		<div class=col-4><?php echo $name ;?> 您好：</div>
		<div class=col-6 style="text-align:right">
			<input type="button" value="管理履歷"
			onclick="editresume()">
			<input type="button" value="登出"
			onclick="logout()">
		
	
		</div>
	</div>
</div>

<?php } ?>
<script>
function editresume (){
	window.location.assign('./admin.php');
}
function logout (){
	window.location.assign('./api/logout.php');
}
</script>
