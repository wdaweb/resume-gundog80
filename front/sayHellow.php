<?php
			// $do=$table;
			$userID=find('resume',$nRes)['userID'];
			// echo "hihi";
			// echo $do;
			// if(isset($_GET['resumeID'])){
			// 	$resumeID=$_GET['resumeID'];
			// }else{
			// 	$temp=find('resume',['userID'=>$userID])['id'];
			// 	$_GET['resumeID']=$resumeID=$temp;
			// }

			// $resumeID=2;
			// echo($show);
			// echop($show);
			// $table=$_GET['table'];
			// print_r($rows);
?>

<div id=sayHellow class="row middleStyle" >
	<?php
	$photoPath=find('userbasicdata',$userID)['photoPath'];
	$doID=find('resume',$nRes)[$do];
	$introduction=find($do,$doID);
	?>
	<!-- <div class="row middleStyle"> -->
		<div class="col-3 ">
			<img class="photo"  src=<?php echo $photoPath; ?> alt="" >
		</div>
		<div class="col-6 text-left">
		<!-- <div class="col-6" > -->
			<?php
			echop($introduction['text']);
			?>
		</div>
	<!-- </div> -->
</div>
