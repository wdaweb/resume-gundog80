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

			?>

<div id=font-simpleIntroduction class=normalArea >
	<?php
	$show=find('resume',$resumeID)[$table];
	$introduction=find($table,$show);
	?>
	<div class="row ">
		<div class=col-11>
			<?php
			echop($introduction[$table]);
			?>
		</div>
	</div>
</div>
