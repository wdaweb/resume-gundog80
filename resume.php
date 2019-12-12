<?php
include_once "./base.php";
if(isset($_GET['resumeID'])){
    $resumeID=$_GET['resumeID'];
}else{
    // $temp=find('resume',['userID'=>$userID])['id'];
    // $_GET['resumeID']=$resumeID=$temp;
    echop("非法操作，請由首頁進入");
    echop("<a href='./resume.php?resumeID=1'>點此測試</a>");
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
<body>
<?php
include_once "./title.php";
$table="shortSelfInterduction";
include_once "./front/$table.php";
$table="workExperience";
include_once "./front/$table.php";
$table="selfInterduction";
include_once "./front/$table.php";
$table="portfolio";
include_once "./front/$table.php";


?>
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