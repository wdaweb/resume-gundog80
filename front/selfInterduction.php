<?php
			include_once "./base.php";
			$table=$table;
			$userID=1;
			// $resumeID=2;
			$photoPath=find('userbasicdata',$userID)['photoPath'];
			$show=find('resume',$resumeID)[$table];
			// echo($show);
			// echop($show);
			// $table=$_GET['table'];
			$introduction=find($table,$show);
			// print_r($rows);
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
