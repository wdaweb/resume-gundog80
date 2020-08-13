<?php
			$do="workExp";
			if($nRes==""){
				$nRes=chkSS('login');
			}
			// $order=find('resume',$nRes)['userID'];
?>
<div id=font-<?=$do;?> class=normalArea >
	<?php
	// $show=unserialize(find('resume',$order)[$do]);
	$dataID=unserialize(find('resume_resume',$nRes)[$do]);
	?>
	<table class="table table-striped table-sm">
		<tr><td class="d-none d-md-block">
			<ul class="row" style="list-style:none;">
				<li class="col-12 col-md-3 border-2 border-primary">職稱</li>
				<li class="col-12 col-md-3 border-2 border-primary">公司/機構</li>
				<li class="col-12 col-md-5">任職期間/時間(月)</li>
				<li class="col-12 col-md-7">詳細說明</li>
			
			</ul>
		</td></tr>
		<?php
		if(!empty($dataID)){
			foreach($dataID as $id){
				$n=q("SELECT * , TIMESTAMPDIFF( MONTH , `join-time` , `end-time` ) AS df FROM resume_$do where `id`=$id")['0'];
				// $n=find($table,$id)
			?>
		<tr><td>
			<ul class="row" style="list-style:none;">
			<!-- <ul class="row pagination"> -->
				<li class="col-12 col-md-3 border-2 border-primary">
					<span class="d-md-none">公司/機構：</span>
					<?=$n['company'];?>
				</li>
				<li class="col-12 col-md-3 border-2 border-primary">
					<span class="d-md-none">職稱：</span>
					<?=$n['title'];?>
				</li>
				<li class="col-12 col-md-6">
					<span class="d-md-none">任職期間/時間(月)：</span>
					<?=substr($n['join-time'],0,7) . " 至 " . substr($n['end-time'],0,7);?>
					/
					<?=$n['df'];?>
				</li>
				<li class="col-12 col-md-7" >
					<!-- <div class="text-left"> -->
					<span class="d-md-none">詳細說明：</span>
					<?=$n['description'];?>
					<!-- </div> -->
				</li>
			
			</ul>
		</td></tr>
			<?php 
			} 
		}
		?>
	</table>
</div>

<script>
$(".carousel-inner").find(":first").addClass('active');
<?php
$action=chkG('action');
if($action!=""){

echo "op('#cover','#cvr','./modal/editData.php?table=$table&id=$action')";
}
?>
</script>