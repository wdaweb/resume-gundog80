<head>
	<link rel="stylesheet" href="../css/userCss.css">
</head>
<body>
	<?php
	include_once "../base.php";
	
	
	$source=$_GET['table'];
	$userID=$_GET['userID'];
	$title="更新相片";
	switch($source){
		case "shortSelfInterduction":
			$table="userBasicData";
			break;
		default:
			break;
	}
	
	$photoPath=find($table,$userID)['photoPath'];
	echo $photoPath;
	?>
	
	<div class=modal2 >
		<div class=middlestyle>
			<div>
				<img class=photo style="height: 10vw;" src=<?php echo $photoPath; ?> alt="" >
			</div>
			<br>
			<form action="./api/spSave.php"  enctype="multipart/form-data" method="post">
				<input type="hidden" name="source" value=<?php echo $source;?>>
				<input type="hidden" name="userID" value=<?php echo $userID;?>>
				<!-- <input type="hidden" name="table" value=userBasic;?>> -->
				<!-- <br> -->
				<input type="file" name="updatePhoto" id="updatePhoto" value="上傳檔案">
				<input type="submit" value="更換相片" >
			</form>
		</div>
		
	</div>
	
</body>