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
	$data=all("resume_$table")[0];
	foreach($data as $k=>$v){
		$data[$k]="";
	}
}else { 
	//編輯
	$title="編輯";
	$btn="更新";
	$data=find("resume_$table",$id);
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
			include "./sayHellow.php";
		}elseif($table=="image" || $table=="file"){
			include "./image.php";
		}elseif($table=="workExp"){
			include "./workExp.php";
		}elseif($table=="portfolio"){
			include "./portfolio.php";
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