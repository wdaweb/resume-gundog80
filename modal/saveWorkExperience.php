<?php
include_once "../base.php";
echop($_GET);

$table=$_GET['table'];

if(!isset($_GET['id'])){
	//新增 
	$title="新增";
	$id="";
	$data=[
		'company' =>"",
		'title' =>"",
		'join-time' =>"",
		'end-time' =>"",
		'description' =>""
	];
	$userID=$_GET['userID'];
}else { 
	//編輯
	$title="編輯";
	$id=$_GET['id'];
	// echop($id);
	$data=find($table,$id);
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
	編輯工作經歷
	</h6>
	<hr>
	<div style="width:100%;">
		<form action="./api/normalSave.php" method="post">
			<table style="width:100%;font-size:0.8em;" >
				<tr>
					<td style="max-width:15%">公司</td>
					<td style="max-width:15%">職稱</td>
					<td style="max-width:15%">入職時間</td>
					<td style="max-width:15%">離職時間</td>
				</tr>
				<tr>
					<td style="max-width:15%"><input type="text"  name=company value=" <?php echo $data['company']?>  "> </td>
					<td style="max-width:15%"><input type="text"  name=title value=" <?php echo $data['title']?>    "> </td>
					<td style="max-width:15%"><input type="date" name=join-time value="<?php echo $data['join-time']?> "> </td>
					<td style="max-width:15%"><input type="date" name="end-time"  value="<?php echo $data['end-time']?>  "> </td>
				</tr>
				<tr><td colspan=4>職務說明</td></tr>
				<tr><td colspan=4>
					<textarea name=description id="" cols="50" rows="3">
					<?php echo $data['description']?>
					</textarea>
				</td></tr>
			</table>
			<input type="hidden" name="table" value=<?php echo $table;?>>
			<input type="hidden" name="id" value=<?php echo $id;?>>
			<input type="hidden" name="userID" value=<?php echo $userID;?>>
			<input type="submit" style="positon:relative ;left:45%;">
			<br>
		</form>
	</div>
</div>

