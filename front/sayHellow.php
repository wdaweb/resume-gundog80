<?php
			//TEMP
			$do="sayHellow";
			//TEMP


			if($nRes==""){
				$nRes=chkSS('login');
			}
			$order=find('resume',$nRes)['userID'];
?>

<div id=sayHellow class="row middleStyle" >
	<?php
	$photoPath=find('userbasicdata',$order)['path'];
	$dataID=unserialize(find('resume',$nRes)[$do]);
	foreach ($dataID as $dID){
		$data=find($do,$dID)
		?>
		<!-- <div class="row middleStyle"> -->
			<div class="col-3 ">
				<img class="photo"  src=<?php echo $photoPath; ?> alt="" >
			</div>
			<div class="col-6 text-left">
			<!-- <div class="col-6" > -->
				<?php
				echop($data['text']);
				?>
			</div>
		<?php
	}
	?>
	<!-- </div> -->
</div>
