<?php
			include_once "../base.php";
		
			include_once "./base.php";
			$table=$table;
			$userID=1;
			$show=find('resume',$resumeID)[$table];
			$show=explode(",",$show);

?>

<div id=font-simpleIntroduction class=normalArea >
	<div class="row ">
		<div class=col-11>
			<?php
			echop($introduction[$table]);
			?>
		</div>
	</div>
</div>
