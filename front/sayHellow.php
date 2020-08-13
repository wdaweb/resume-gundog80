<?php
			//TEMP
			$do="sayHellow";
			//TEMP


			if($nRes==""){
				$nRes=chkSS('login');
			}
			$order=find('resume_resume',$nRes)['userID'];
?>

<div id=sayHellow class="row middleStyle" >
	<?php
	$photoPath=find('resume_userBasicData',$order)['path'];
	$dataID=unserialize(find('resume_resume',$nRes)[$do]);
	if(!empty($dataID)){
		foreach ($dataID as $dID){
			$data=find("resume_$do",$dID)
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
	}
	?>
	<!-- </div> -->
</div>
