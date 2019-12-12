<?php
include_once "../base.php";
echop($_GET);

$table=$_GET['table'];

if(!isset($_GET['id'])){
	//新增 
	$title="新增作品集";
	$id="";
	$data=[
		'workName' =>"",
		'userID' =>"",
		'imgID' =>"",
		'href' =>"",
	];
	$userID=$_GET['userID'];
}else { 
	//編輯
	$title="編輯作品集";
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
	<?php echop($title); ?>	
	</h6>
	<hr>
	<div style="width:100%;">
		<form action="./api/normalSave.php" method="post">
			<table style="width:100%;font-size:0.8em;" >
				<tr>
					<td style="width:30%">作品名稱</td>
					<td style="width:70%">連結網址</td>
				</tr>
				<tr>
					<td ><input type="text"  name=workName value=" <?php echo $data['workName']?>  "> </td>
					<td ><input type="text"  name=href value=" <?php echo $data['href']?>    "> </td>
				</tr>
				<tr>
					<td colspan=2>
						<?php
						$temp=find('image',$data['imageID']);
						$src=$temp['src'];
						$alt=$temp['fileName'];
						?>
						<div>
							<img src=<?php echo $src ;?> alt=<?php echo $alt ;?> style="max-width:80%;max-height:25vh;">
						</div>
					</td>
				</tr>
			</table>
			<input type="hidden" name="table" value=<?php echo $table;?>>
			<input type="hidden" name="id" value=<?php echo $id;?>>
			<input type="hidden" name="userID" value=<?php echo $userID;?>>
			<input type="submit" style="positon:relative ;left:45%;">
			<br>
		</form>
	</div>
</div>

