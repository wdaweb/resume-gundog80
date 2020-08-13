<body>
	<?php
	include_once "../base.php";
	$source=$_GET['table'];
	$userID=$_GET['userID'];
	$title="更新相片";
	switch($source){
		case "sayHellow":
			$table="userBasicData";
			break;
		default:
			break;
	}
	$photo=find("resume_$table",$userID);
	$path=$photo['path'];
	?>
	
	<!-- <div class=modal2 > -->
	<div class=container >
		<!-- <div class="row d-flex" style="justify-content: space-evenly"> -->
		<div class="row" >
		<!-- <div class=middlestyle> -->
			<div class="col-12 text-center">
				<img  style="min-height:30px;height:8em;" src=<?php echo $path; ?> alt="" >
			</div>
			<br>
			<form class=col-12 action="./api/save.php"  enctype="multipart/form-data" method="post">
				<div class="form-group col-12">
					<input type="hidden" name="id" value=<?php echo $photo['id'];?>>
					<input type="hidden" name="source" value=<?php echo $source;?>>
					<input type="hidden" name="table" value="userBasicData">
				</div>
				<div class="form-group col-12">
					<input type="file" name="file" id="file" value="上傳檔案">
				</div>
				<div class="form-group col-12">
					<input type="submit" value="確認變更" >
				</div>
			</form>
		</div>
		
	</div>
	
</body>