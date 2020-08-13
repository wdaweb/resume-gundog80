<?php
 include_once "./base.php";
$user=chkSS("login");
// echop($user,"user");
$nRes=chkG('nRes');

if($nRes==""){
	if($user){
		$nRes=find('resume_resume',['userID'=>$user])['id'];
	}else{
		$nRes=1;
	}
}
$resumeID=$nRes;
// echo $user;
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./lib/animate/animate.css">
	<title>gundog作品集-求職履歷系統</title>
	<link rel="stylesheet" href="./css/userCss.css">
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="./icon/gundog03.ico" type="image/x-icon" />
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<body>
	<?php
	include_once "./front/loadingBlock.php";
	?>
	<script type="text/javascript"> 
		$('.loading').animate({'width':'10%'},100); 
		$('.progress').text("15%")
	</script>
	<?php
	include_once "./modal/modalbasic.php";
	?>
	<script type="text/javascript"> 
		console.log("30")
		$('.loading').animate({'width':'20%'},100); 
		$('.progress').text("30%")
	</script>
	<?php
	include_once "./beginAnimation/beginAnim.php";
	?>

	<script type="text/javascript"> 
		console.log("60")
		$('.loading').animate({'width':'40%'},100); 
		$('.progress').text("60%")
	</script>

	<?php 
	 include_once "./title.php"; 
	 ?> 	
	<div class="showArea" style="display:none;" >
		<div id=previewArea class="container">
			<?php
			include_once "./resume.php";
			?>
		</div>
	</div>
	<script type="text/javascript"> 
			console.log("100")
		$('.loading').animate({'width':'60%'},300); 
		$('.progress').text("100%")
		$(document).ready(function(){ 
    	setTimeout(() => {
			console.log("hihi")
    	    $('.showArea').show();  
    	    $('#title').removeClass("d-none");  
    	}, 5000);
    	});
	</script>





</body>
</html>