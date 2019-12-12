<head>
	<link rel="stylesheet" href="../css/userCss.css">
</head>
<body>
	<?php
	include_once "../base.php";
	$table=$_GET['table'];
	$userID=$_GET['userID'];
	$id=$_GET['id'];
	$title="更換圖片";
	// $photoPath=find($table,$userID)['photoPath'];
	echop($_GET);
	?>
	<h4>
		<?php echo $title;?>
	</h4>
	<form action="./api/normalSave.php" method="post">
		<div class=container>
			<?php
			$data=['userID'=>$userID];
			$rows=all('image',$data);
			echop("<div class=row>");
			foreach($rows as $k => $v){
			?>
				<div class=col-4>
					<img style="max-width:90%; max-height:20vh;" src=<?php echo $v['src'];?> alt="<?php echo $v['fileName'];?>">
					<?php echo $v['fileName'];?>
					<br>
					選取更新:<input type="radio" name="imageID" value=<?php echo $v['id'];?>>
				</div>
			<?php  
			}
			echop("</div>");
			 ?>
		</div>
		


		<input type="hidden" name="id" value=<?php echo $id;?>>
		<input type="hidden" name="table" value=<?php echo $table;?>>

		<input type="submit" value="更新圖片">
	</form>





</body>