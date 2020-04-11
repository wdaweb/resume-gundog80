<?php
include_once "../base.php";
$id=chkG('id');
$data=find('image',$id);
?>
<div class=container>
	<div class=row>
		<div class="col-9 col-sm-11 text-center">
			<img style="max-height:65vh;max-width:100%;" src="<?=$data['path'];?>" alt="">

		</div>
	</div>
</div>

