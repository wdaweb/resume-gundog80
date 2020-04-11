<?php
include_once "../base.php";
$table=$_GET['table'];
$source=chkG('source');
if($source==""){
	$source=$table;
}
$id=chkG("id");
$userID=chkSS("login");
if($id==""){
	//新增 
	$title="新增";
	$btn="新增";
	$data=all($table)[0];
	foreach($data as $k=>$v){
		$data[$k]="";
	}
}else { 
	//編輯
	$title="編輯";
	$btn="更新";
	$data=find($table,$id);
}
 ?>

<div class=modal2 >
	<br>
	<h6>
	<?php 
	echo($title); 
	switch($table){
		case "sayHellow" :
			echo "招呼語";
		break;
		case "selfInterduction" :
			echo "自我介紹";
		break;
		case "image" :
			echo "圖片";
		break;
		case "workExp" :
			echo "學經歷";
		break;
		case "portfolio" :
			echo "作品集";
		break;
		default:
		break;

	}
	?>	
	
	</h6>
	<hr>
<br>
	<form action="./api/save.php" method="post" enctype="multipart/form-data">
		<div class=form-group>
			<input type="hidden" name="table" value=<?php echo $table;?>>
			<input type="hidden" name="source" value=<?php echo $table;?>>
			<input type="hidden" name="id" value=<?php echo $id;?>>
			<input type="hidden" name="userID" value=<?php echo $userID;?>>
		</div>
	<div class=container>
<?php
		if($table=="sayHellow" || $table=="selfInterduction"){
			?>
			<div class=row>
				<textarea class="col-12 col-md-9" style="font-size:1.0em;margin:0 auto; " 
				name="text" id="" cols="40" rows="6"><?php
				// echop($data);
				echo ($id=="")?"":$data['text'];
				  ?></textarea>
			</div>
			<?php
		}elseif($table=="image" || $table=="file"){
			?>
			<div class="row justify-content-start">
				<div class=col-12>
					<input type="file" name="file" id="">
				</div>
				<div class=col-3>
					<label>檔案說明:</label>
					<input class=col-12 type="text" name="fName" id="">
				</div>
				<div class=col-12>
					<textarea class="col-12 col-md-10" name="text" id="" rows="3" ></textarea>
				</div>
			</div>
			<?php
		}elseif($table=="workExp"){
			?>
			<div class=row>
				<div class="col-12 col-md-3">
					<label for="">公司</label>
					<input class="col-12" type="text"  name=company value="<?=$data['company'];?>">
				</div>
				<div class="col-12 col-md-3 offset-md-1">
					<label for="">職稱</label>
					<input class="col-12" type="text"  name=company value="<?=$data['title'];?>">
				</div>
				<div class="col-12 col-md-6">
					<label for="">入職時間</label>
					<?php
						if($data['join-time']!=""){
							$type="text";
						}else{
							$type="month";
						}
					?>
					<input class="col-12" type=<?=$type;?>  name=company value="<?=$data['join-time'];?>">
				</div>
				<div class="col-12 col-md-6">
					<label for="">離職時間</label>
					<?php
						if($data['end-time']!=""){
							$type="text";
						}else{
							$type="month";
						}
						?>
					<input class="col-12" type=<?=$type;?>  name=company value="<?=$data['end-time'];?>">
				</div>
				<div class="col-12">
					<label for="">職務說明</label>
					<br>
					<textarea name=description id="" style="width:100%;" rows="3" 
					 ><?=$data['description'];?></textarea>
				</div>
			</div>
			<?php
		}elseif($table=="portfolio"){
			include "./portfolio.php";
			?>
			
			<?php
		}
?>
		<br>

		<div class=form-group>
			<input type="submit" value=<?=$btn;?> >
		</div>
	</div>
	<br>
</form>
</div>