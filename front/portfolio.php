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
	$show=explode(",",$show);
	$data=['userID'=>$userID ];
	$rows=all($table,$data);
	?>
	<div class="row ">
		<?php
		foreach($rows as $n){
			if(in_array($n['id'],$show)){
				$temp=find('image',$n['imageID']);
				$src=$temp['src'];
				$fileName=$temp['fileName'];
		?>
		<div class=col-5>
			<a href="<?php echo $n['href'];?>">
			<img style="max-width:80%; max-heigth:8em;" src="<?php echo $src;?>" alt="<?php echo $fileName;?>">
			</a>
			<br>
			<?php echo $n['workName'];?>
				
			
		</div>
		<?php } 
	}?>
	</div>
</div>