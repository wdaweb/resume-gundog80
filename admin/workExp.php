<?php
	include_once "./base.php";
	$table=chkG('do');
	$lab="學經歷";
	$userID=chkSS('login');
	if(isset($_GET['resumeID'])){
		$resumeID=$_GET['resumeID'];
	}else{
		$temp=find('resume_resume',['userID'=>$userID])['id'];
		$_GET['resumeID']=$resumeID=$temp;
	}
	$show=unserialize(find('resume_resume',$resumeID)[$do]);
	// echop($show,'show');
	
?>

<div class=row> 
<h3><?=$lab;?>管理</h3>
	<!-- //資料編輯區 -->
	<form class="col-12 container" style="width:120%;" action="./api/saveResume.php" method="post">
	
		<!-- <table class=optionTable> -->
		<table class="table table-striped table-sm">
		<?php
		$data=['userID'=>$userID];
		// echop($table);
		// echop($data);
		$rows=all("resume_$table",$data);
		?>
			<tr><td class="d-none d-md-block">
				<ul class="row" style="list-style:none;">
				<!-- <ul class="row pagination"> -->
					<li class="col-12 col-md-3 border-2 border-primary">公司</li>
					<li class="col-12 col-md-3 border-2 border-primary">職稱</li>
					<li class="col-12 col-md-6">任職期間</li>
					<li class="col-12 col-md-7">詳細說明</li>
					<li class="col">顯示</li>
					<li class="col">編輯</li>
					<li class="col">刪除</li>
				</ul>
			</td></tr>
			<?php
				foreach($rows as $n){
				?>
			<tr><td>
				<ul class="row" style="list-style:none;">
				<!-- <ul class="row pagination"> -->
					<li class="col-12 col-md-3 border-2 border-primary">
						<span class="d-md-none">公司/機構：</span>
						<?=$n['company'];?>
					</li>
					<li class="col-12 col-md-3 border-2 border-primary">
						<span class="d-md-none">職稱：</span>
						<?=$n['title'];?>
					</li>
					<li class="col-12 col-md-6">
						<span class="d-md-none">任職期間：</span>
						<?=substr($n['join-time'],0,7) . " 至 " . substr($n['end-time'],0,7);?>
					</li>
					<li class="col-12 col-md-7" onmouseover="showData(this)" onmouseout="hideData(this)">
						<span class="d-md-none">詳細說明：</span>
						<?=mb_substr($n['description'],0,20) . "...";?>
						<div class=more>
							<?=$n['description'];?>
						</div>
					</li>
					<li class="col">
						<input type='checkbox' name='sh[]' id=<?="sh" . $n['id'];?> 
						value=<?=$n['id'];?> <?=(in_array($n['id'],$show))?"checked":"";?>>
					</li>
					<li class="col">
						<div name='editBtn' class="button text-center"
						 onclick="op('#cover','#cvr','./modal/editData.php?table=<?=$table;?>&id=<?=$n['id'];?>')">
						 編 輯
						</div>
					</li>
					<li class="col">
						<div name='deleteBtn' class="button text-center"
						 onclick="op('#cover','#cvr','./modal/deleteData.php?table=<?=$table;?>&id=<?=$n['id'];?>')">
						 刪 除
						</div>
					</li>
				</ul>
			</td></tr>
				<?php 
				} 
			?>
			<tr><td>
				<!-- <ul style="list-style:none;"> -->
					<!-- <li colspan=4> -->
						<input type="hidden" name="table" value=<?php echo $table ?>>
						<input type="hidden" name="resumeID" value=<?php echo $resumeID ?>>

						<input type="button" value="新增<?=$lab;?>" class=offset-1
						 onclick="op('#cover','#cvr','./modal/editData.php?table=<?=$table;?>')">
						<input type="submit" value="儲存狀態" class=offset-1>
					<!-- </li> -->
				<!-- </ul> -->
			</td></tr>
		</table>
	</form>


</div>
<script>


</script>