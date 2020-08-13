<?php
include "../base.php";
$table=$_GET['table'];
$id=chkG("id");
$userID=chkSS("login");

 ?>

<div class=modal2 >
	<br>
	<h6>
	刪除
	<?php 
	switch($table){
		case "sayHellow" :
			echo "招呼語";
		case "image":
			echo "圖片";
		default:
		break;
	}
	?>
	</h6>
	<hr>
<br>
    確認刪除資料?
	<div style="width:73%;">
		<?php
		$data=find("resume_$table",$id);
		if(!empty($data['path'])){
			$tmp=$data['path'];
			echo "<img src='$tmp' alt='' style='max-height:50vh;max-width:80%;'>";
		}else{
			echo $data['text'];
		}

		?>
	</div>
	<br>
         <form action="./api/delete.php" method="post">
<input type="hidden" name="table" value=<?php echo $table;?>>
		<input type="hidden" name="id" value=<?php echo $id;?>>
		<input type="submit" style="positon:relative ;left:45%;" value=確認刪除>
		<input type="button" style="positon:relative ;left:45%;" value=取消
                onclick="cl('#cover')">
                <!-- <input type="button" value=""> -->
</form>
<!-- 
<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script> -->
</div>