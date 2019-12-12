<?php
include "../base.php";

$table=$_GET['table'];
$id=$_GET['id'];
// print_r($_GET);


 ?>

<div class=modal2 >
	<br>
	<h6>
	刪除資料
	</h6>
	<hr>
<br>
    確認刪除資料?
	<div style="width:73%;">
		<?php
		$tmp=find($table,$id);
		$tmp2=['id','userID','sh'];
		foreach($tmp as $k =>$v){
			if(!in_array($k,$tmp2)){
				echo $k . "=" . $v;
				br();
			}
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