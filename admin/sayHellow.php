<?php
	include_once "./base.php";
	$table=chkG('do');
	$lab="招呼語";
	$userID=chkSS('login');
	if(isset($_GET['resumeID'])){
		$resumeID=$_GET['resumeID'];
	}else{
		$temp=find('resume',['userID'=>$userID])['id'];
		$_GET['resumeID']=$resumeID=$temp;
	}
	$path=find('userBasicData',$userID)['path'];
	$show=unserialize(find('resume',$userID)[$do]);
	// echop($show);
	
?>

<div class="row text-center">
	<div class=col-3></div>
	<div class="col-6 d-flex" style="align-items:center;">
	<!-- //相片編輯區 -->
		<img style="min-height: 30px;height:8em" src=<?php echo $path; ?> alt="" >
		<div class=col-1></div>
		<div name='changePic' class=button
		onclick="op('#cover','#cvr','./modal/changePhoto.php?table=<?php echo $table; ?>&userID=<?php echo $userID; ?>')">
		更換相片
		</div>
	</div>
</div>
<br>
<div class=row> 
	<!-- //資料編輯區 -->
	<form class="col-12" action="./api/saveResume.php" method="post">
	
		<!-- <table class=optionTable> -->
		<table class="table table-striped table-sm">
		<?php
		$data=['userID'=>$userID];
		// echop($table);
		// echop($data);
		$rows=all($table,$data);
		?>
			<tr>
				<td>已登錄招呼語</td>
				<td class=std>選用</td>
				<td>編輯</td>
				<td>刪除</td>
			</tr>
			<?php foreach($rows as $n){ ?>
			<tr>
				<td>
					<?php
					$temp=$n['text'];
					echo $temp;
					?>
				</td>
				<td> 
				<input type='radio' name='sh[]' value=<?=$n['id'];?>
					<?php
					if(is_array($show)){
						foreach ($show as $sh){
							echo ($sh==$n['id'])?"checked":"";
						}
					}
					?>
				>
					
				</td>
				<td> 
					<div name='editBtn' class="button text-center" 
					 onclick="op('#cover','#cvr','./modal/editdata.php?table=<?php echo $table; ?>&id=<?php echo $n['id']; ?>')">
					編輯
					</div>
				</td>
				<td>
					<div name='deleteBtn' class="button text-center" 
					 onclick="op('#cover','#cvr','./modal/deleteData.php?table=<?php echo $table; ?>&id=<?php echo $n['id']; ?>')">
					刪除
					</div>
				</td>
			</tr>
            <?php } ?>
			<tr>
				<td colspan=4>
					<input type="button" value="新增<?=$lab;?>" 
					onclick="op('#cover','#cvr','./modal/editdata.php?table=<?php echo $table; ?>')">
					<!-- &userID= -->
					<?php
					//  echo $userID; 
					 ?>
			        
					<input type="hidden" name="table" value=<?php echo $table ?>>
					<input type="hidden" name="resumeID" value=<?php echo $resumeID ?>>
					<input type="submit" value="儲存狀態">
				</td>
			</tr>
		</table>
	</form>


</div>
<script>


</script>