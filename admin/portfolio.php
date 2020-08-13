<?php
	include_once "./base.php";
	$table=$_GET['do'];
	$lab="作品集";
	$userID=chkSS('login');
	if(isset($_GET['resumeID'])){
		$resumeID=$_GET['resumeID'];
	}else{
		$temp=find('resume_resume',['userID'=>$userID])['id'];
		$_GET['resumeID']=$resumeID=$temp;
	}
	$show=unserialize(find('resume_resume',$resumeID)[$do]);
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
				<?php
				foreach($rows as $k => $n){
					$image=unserialize($n['image']);
					if($image==""){$image=[];}
				?>
					<!-- <div class="col-6 col-sm-4 col-md-3" style="padding:10px;"> -->
						<div class="card bg-success text-center" style="padding:5px;">
							<input type="hidden" name="id[]" value=<?=$n['id'];?>>

							<div id="carouselBanner<?=$n['id'];?>" class="carousel slide" data-ride="carousel">
  								<div class="carousel-inner">
									<?php
									foreach($image as $img){

										?>
										<div class="carousel-item">
										  <img class="d-block w-100" style="height:10rem;"
										  src="<?=find('resume_image',$img)['path'];?>" alt="First slide">
										</div>
								  		<?php
									}
								  	?>
  								</div>
								<?php
								if(sizeof($image)>1){
									?>
  									<a class="carousel-control-prev" href="#carouselBanner<?=$n['id'];?>" role="button" data-slide="prev">
  									  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  									  <span class="sr-only">Previous</span>
  									</a>
  									<a class="carousel-control-next" href="#carouselBanner<?=$n['id'];?>" role="button" data-slide="next">
  									  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  									  <span class="sr-only">Next</span>
  									</a>
									<?php
								}
								?>
							</div>


							<br>
							<p class=card-title>
								<h6>
									<?=$n['workName'];?>
								</h6>
								<label>
									連結網址
									<br>
									<a href="<?=$n['href'];?>" class="text-dark"><?=$n['href'];?></a>
								</label>
							</p>
							<p class=card-text>
								<textarea name="text[]" id="" rows="3" 
								 style="background:#ccffcc;;width:80%;font-size:0.7rem"
								 ><?=$n['text'];?></textarea>
							</p>
							<ul class="row list-inline justify-content-center">
								<li class="col-12 col-md-4">
									<div class="label small">顯示</div>
									<input type='checkbox' name='sh[]' id=<?="sh" . $n['id'];?> 
									value=<?=$n['id'];?> <?=(in_array($n['id'],$show))?"checked":"";?>>
								</li>
								<div class="col-6 justify-content-between align-items-center">
									<li class="col">
										<div name='editBtn' class="lButton text-center"
										 onclick="op('#cover','#cvr','./modal/editData.php?table=<?=$table;?>&id=<?=$n['id'];?>')">
										 編 輯
										</div>
									</li>
									<li class="col">
										<div name='deleteBtn' class="lButton text-center"
										 onclick="op('#cover','#cvr','./modal/deleteData.php?table=<?=$table;?>&id=<?=$n['id'];?>')">
										 刪 除
										</div>
									</li>
								</div>
							</ul>


			
						</div>
						
					<!-- </div> -->
						<?php  
				}
				?>
				</div>
			</div>
			<input type="hidden" name="table" value=<?php echo $table ?>>
			<input type="hidden" name="resumeID" value=<?=$resumeID;?>>
			<input type="button" value="新增作品" name='addPic'
				onclick="op('#cover','#cvr','./modal/editData.php?table=<?=$table; ?>')" >
			<input type="submit" value="儲存狀態">
		</form>
	<!-- <div name='upFile' class=button
	onclick="op('#cover','#cvr','./modal/saveImage.php?table=<?=$table; ?>&userID=<?=$userID; ?>')">
		新增圖片
	</div> -->


<!-- </div> -->
<script src="../js/jquery-1.9.1.min.js"></script>
<script>
$(".carousel-inner").find(":first").addClass('active');
<?php
$action=chkG('action');
if($action!=""){

echo "op('#cover','#cvr','./modal/editData.php?table=$table&id=$action')";
}
?>
</script>