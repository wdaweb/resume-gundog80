<?php

			if($nRes==""){
				$nRes=chkSS('login');
			}

			?>

<div id=font-<?=$do;?> class=normalArea >
	<?php
	$show=find('resume_resume',$nRes)[$do];
	$dataID=unserialize(find('resume_resume',$nRes)[$do]);
	if(!empty($dataID)){
		foreach ($dataID as $dID){
			$data=find("resume_$do",$dID)
			?>
			<div class="row ">
				<div class=col-1></div>
				<pre style="white-space: pre-wrap;word-wrap: break-word;;" class="col-12 col-md-10 "><?php
					echop($data['text']);
				?></pre>
			</div>
			<?php
		}
	}
	?>
</div>
