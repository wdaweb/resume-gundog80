<head>
	<link rel="stylesheet" href="../css/userCss.css">
</head>
<body>
	<?php
	include_once "../base.php";
	$table=$_GET['table'];
	$userID=$_GET['userID'];
	$title="上傳圖片";
	// $photoPath=find($table,$userID)['photoPath'];
	// echo $photoPath;
	echo "上傳圖片";
	?>
	
	<div class=modal2 >
		<div class=middlestyle>
			<form action="./api/saveImage.php"  enctype="multipart/form-data" method="post">
				<input type="hidden" name="table" value=<?php echo $table;?>>
				<input type="hidden" name="userID" value=<?php echo $userID;?>>
				<!-- <input type="hidden" name="table" value=userBasic;?>> -->
				<!-- <br> -->
				<input type="file" name="updateImage" id="updateImage" value="選擇圖片">
				<input type="submit" value="上傳" >
			</form>
		</div>
		
	</div>
</body>