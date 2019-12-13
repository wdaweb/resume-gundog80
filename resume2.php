<?php
include_once "./base.php";
if(isset($_GET['resumeID'])){
    $resumeID=$_GET['resumeID'];
}else{
	$resumeID=1;

}
$userID=find('resume',$resumeID)['userID'];

?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
    <!-- <link rel="stylesheet" type="text/css" href="./css/userCss.css"> -->
    <link rel="stylesheet" href="./css/userCss.css">
	<link href="./css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="background:rgb(230 230 255);">
		
		
		
		

<?php
echop("短自介");
$table="shortSelfInterduction";
include_once "./front/$table.php";
?>
	技能區
	<br>
<div id=skillArea class=twoFieldArea>
	<div class=skillGroup>
		技能群1
	<hr>
	技能1
	<br>
	技能2
	<br>
	技能3...
	<br>
	<a href="">
		<img src="" alt="作品連結">
	</a>
	</div>
	<div class=skillGroup>技能群2 
		<hr>
	<a href="">
		<img src="" alt="作品連結">
	</a>
	</div>
	<div class=skillGroup>技能群3
	<a href="">
		<img src="" alt="作品連結">
	</a>

	</div>
	<div class=otherSkill>其它技能區</div>
</div>

<?php
echop("工作經歷");
$table="workExperience";
include_once "./front/$table.php";
echop("自介");
$table="selfInterduction";
include_once "./front/$table.php";
echop("其它作品區");
$table="portfolio";
include_once "./front/$table.php";
?>
</div>
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
	<script src="js/bootstrap.min.js"></script>
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