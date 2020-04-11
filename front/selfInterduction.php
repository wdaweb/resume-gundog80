<?php

			if($nRes==""){
				$nRes=chkSS('login');
			}

			?>

<div id=font-simpleIntroduction class=normalArea >
	<?php
	$show=find('resume',$resumeID)[$table];
	$dataID=unserialize(find('resume',$nRes)[$do]);
	foreach ($dataID as $dID){
		$data=find($do,$dID)
		?>
		<div class="row ">
			<div class=col-1></div>
			<pre class="col-12 col-md-10"><?php
				echop($data['text']);
			?></pre>
		</div>
		<?php
	}
	?>
</div>
