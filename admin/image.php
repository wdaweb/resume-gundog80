<?php
	include_once "./base.php";
	$table=$_GET['do'];
	$lab="上傳圖片";
	$userID=chkSS('login');
	if(isset($_GET['resumeID'])){
		$resumeID=$_GET['resumeID'];
	}else{
		$temp=find('resume_resume',['userID'=>$userID])['id'];
		$_GET['resumeID']=$resumeID=$temp;
	}
?>

<!-- <div class=middleStyle> -->
	<h4 style="text-align:left"><?=$lab;?>管理</h4><br>
		<form class="col-12" action="./api/saveTable.php" method="post">
			<?php
			$data=['userID'=>$userID];
			$rows=all("resume_$table",$data);
			?>
			<div class=container>
				<div class="card-columns">
					<!-- <div class=card-columns> -->
				<?php
				foreach($rows as $k => $v){
				?>
					<!-- <div class="col-6 col-sm-4 col-md-3" style="padding:10px;"> -->
						<div class="card bg-success text-center" style="padding:5px;">
							<input type="hidden" name="id[]" value=<?=$v['id'];?>>
							<img class=card-image-top style="max-width:90%; max-height:20vh;margin:5px;" src=<?=$v['path'];?> alt="<?=$v['fName'];?>"
							 onclick="op('#cover','#cvr','./modal/showImage.php?id=<?=$v['id'];?>')">
							<br>
							<h6 class=card-title>
								<input type="text" name=fName[]  style="width:80%;background:#ccffcc;"
								 value=<?=$v['fName'];?>>
							</h6>
							<p class=card-text>
								<textarea name="text[]" id="" rows="3" 
								 style="background:#ccffcc;;width:80%;font-size:0.7rem"
								 ><?=$v['text'];?></textarea>
							</p>
							<div name='delBtn' class=button
								onclick="op('#cover','#cvr','./modal/deleteData.php?table=<?=$table;?>&id=<?=$v['id'];?>')">
								刪除
							</div>
						</div>
						
						<!-- </div> -->
						<?php  
				}
				?>
					</div>
					<!-- </div> -->
				</div>
				<input type="hidden" name="table" value=<?php echo $table ?>>
				<input type="button" value="新增圖片" name='addPic'
					onclick="op('#cover','#cvr','./modal/editData.php?table=<?=$table; ?>')" >
				<input type="submit" value="儲存狀態">
			</form>
	<!-- <div name='upFile' class=button
	onclick="op('#cover','#cvr','./modal/saveImage.php?table=<?=$table; ?>&userID=<?=$userID; ?>')">
		新增圖片
	</div> -->


<!-- </div> -->
<script>

</script>