<?php
include_once "./base.php";
$user=chkSS("login");
$resumes=all('resume_resume',['userID'=>$user]);
$do=chkG('do');
?>


<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>履歷系統-個人管理頁面</title>
	<link rel="stylesheet" href="./css/userCss.css">
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
	<script src="./js/bootstrap.min.js"></script>

</head>
<body>
	<?php
	include_once "./modal/modalbasic.php";
	?>
	<?php include_once "./admin/adminTitle.php"; ?> 	
	<!-- //導灠列 -->

	<div class="showArea" >
		<div id=optionArea class="container">
			<?php
				if ($do!=""){
					include("./admin/$do.php");
				}
			?>
		</div>
		<hr>
		
		<?php
		if ($do!="" && $do!="image" && $do!="addRes" ){
			?>
		<h3> <?=($do!="image")?"樣式預覽":"";?></h3>
		<br>
		<div id=previewArea class="container">
			<?php
					include("./front/$do.php");
			?>
		</div>
			<?php
			} 			
		?>	
	</div>


	<script>
		let resumeChange=function (){
			let getUrlString = location.href;
			let url = new URL(getUrlString);
			let table=url.searchParams.get('table');
			console.log("123")
			// resumeID=$(#resumeInput).attr(value);
			resumeID=$('#resumeInput').val();
			console.log(resumeID)
			window.location.href = `admin.php?table=${table}&resumeID=${resumeID}`;
		}
		
		let showData=function(dom){
			$(dom).children('.more').show()
		}
		let hideData=function(dom){
			$(dom).children('.more').hide()
		}
	</script>
</body>
</html>