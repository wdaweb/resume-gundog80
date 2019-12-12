<?php
include_once "../base.php";


$table=$_GET['table'];
print_r($_GET);

if(!isset($_GET['id'])){
	//新增 
	$title="新增";
	$id="";
	$data="";
	$userID=$_GET['userID'];
}else { 
	//編輯
	$title="編輯";
	$id=$_GET['id'];
	// echop($id);
	$data=find($table,$id)[$table];
	$userID="";
	// $data=all($table,['id'=>$id]);
	// echop($data);
	// $data=all('$table',['id'=>$id])[0][$table];


}
 ?>

<div class=modal2 >
	<br>
	<h6>
	<?php echo($title); ?>	
	短自介
	</h6>
	<hr>
<br>
	<form action="./api/normalSave.php" method="post">
	<div style="width:73%;">
		<textarea style="font-size:1.0em;margin:0 auto; " name="shortSelfInterduction" id="" cols="40" rows="6">
		<?php
		 echo $data;
		  ?>
		</textarea>
		<br>
		<input type="hidden" name="table" value=<?php echo $table;?>>
		<input type="hidden" name="id" value=<?php echo $id;?>>
		<input type="hidden" name="userID" value=<?php echo $userID;?>>
		<input type="submit" style="positon:relative ;left:45%;">
	</div>
	<br>
</form>
</div>