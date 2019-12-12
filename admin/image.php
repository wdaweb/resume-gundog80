<?php
	include_once "./base.php";
	$table=$_GET['table'];
	$userID=1;
?>

<!-- <div class=middleStyle> -->
	<h4 style="text-align:left">圖片管理</h4><br>
		<?php
		$data=['userID'=>$userID];
		$rows=all($table,$data);
		?>
	<div class=container>
		<?php
		echop("<div class=row>");
		foreach($rows as $k => $v){
		?>
			<div class=col-4>
				<img style="max-width:90%; max-height:20vh;" src=<?php echo $v['src'];?> alt="<?php echo $v['fileName'];?>">
				<?php echo $v['fileName'];?>
				<br>
				<div name='deleteBtn' class=button 
				onclick="op('#cover','#cvr','./modal/deleteData.php?table=<?php echo $table; ?>&id=<?php echo $v['id']; ?>')">
					刪除
				</div>
			</div>
		<?php  
		}
		echop("</div>");
		 ?>
	</div>
	<div name='deleteBtn' class=button
	onclick="op('#cover','#cvr','./modal/saveImage.php?table=<?php echo $table; ?>&userID=<?php echo $userID; ?>')">
		新增圖片
	</div>


<!-- </div> -->
<script>


</script>