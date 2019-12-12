<?php
			include_once "./base.php";
			$table="shortSelfInterduction";
			$userID=1;
			$resumeID=2;
			$photoPath=find('userBasicData',$userID)['photoPath'];
			$show=find('resume',$resumeID)[$table];
			// echo($show);
			// echop($show);
			// $table=$_GET['table'];
			$introduction=find($table,$show);
			// print_r($rows);
?>

<div id=simpleIntroduction class=normalArea >
	<div class="row ">
		<div class="col-4 photo">
			<div>
				<img class=photo style="height: 9vw;" src=<?php echo $photoPath; ?> alt="" >
			</div>
		</div>
		<div class=col-8>
			<?php
			echop($introduction[$table]);
			?>
		</div>
	</div>
</div>
