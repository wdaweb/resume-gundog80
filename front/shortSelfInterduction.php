<?php
			include_once "./base.php";
			$table=$table;
			$userID=1;
			if(isset($_GET['resumeID'])){
				$resumeID=$_GET['resumeID'];
			}else{
				$temp=find('resume',['userID'=>$userID])['id'];
				$_GET['resumeID']=$resumeID=$temp;
			}
			// $resumeID=2;
			// echo($show);
			// echop($show);
			// $table=$_GET['table'];
			// print_r($rows);
			?>

<div id=font-simpleIntroduction class=normalArea >
	<?php
	$photoPath=find('userbasicdata',$userID)['photoPath'];
	$show=find('resume',$resumeID)[$table];
	$introduction=find($table,$show);
	?>
	<div class="row middleStyle">
		<div class="col-4 ">
			<img class="photo"  src=<?php echo $photoPath; ?> alt="" >
		</div>
		<div class=col-8>
			<?php
			echop($introduction[$table]);
			?>
		</div>
	</div>
</div>
