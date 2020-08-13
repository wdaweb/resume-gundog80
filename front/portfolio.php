<style>
	@media (min-width: 576px) {  .card-columns { column-count: 1; } } @media (min-width: 768px) { .card-columns {  column-count: 2; } }  @media (min-width: 992px) { .card-columns {  column-count: 3; } }  @media (min-width: 1200px) { .card-columns {  column-count: 3; } }
</style>
<?php
			$do="portfolio";
			if($nRes==""){
				$nRes=chkSS('login');
			}
?>
<div id=font-<?=$do;?> class=normalArea >
	<?php
	// $show=unserialize(find('resume',$userID)[$do]);
	$dataID=unserialize(find('resume_resume',$nRes)[$do]);
	?>
	<div class=container>
		<div class="card-columns ">
			<?php
			if(!empty($dataID)){
				foreach ($dataID as $dID){
					$rows=all("resume_$do",['id'=>$dID]);
					foreach($rows as $k => $n){
						$image=unserialize($n['image']);
					?>
						<!-- <div class="col-6 col-sm-4 col-md-3" style="padding:10px;"> -->
							<div class="card bg-success text-center" style="padding:5px;" 
							 onmouseover="showData(this)" onmouseout="hideData(this)">
								<input type="hidden" name="id[]" value=<?=$n['id'];?>>
					
								<div id="carouselBanner<?=$n['id'];?>" class="carousel slide" data-ride="carousel">
									<a href="<?=$n['href'];?>" class="text-dark">
									  <div class="carousel-inner">
										<?php
										foreach($image as $img){
										
											?>
											<div class="carousel-item">
											  <img class="d-block w-100" style="min-height:13rem;"
											  src="<?=find('resume_image',$img)['path'];?>" alt="First slide">
											</div>
											  <?php
										}
										?>
									  </div>
									</a>
									  <a class="carousel-control-prev" href="#carouselBanner<?=$n['id'];?>" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									  </a>
									  <a class="carousel-control-next" href="#carouselBanner<?=$n['id'];?>" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									  </a>
								</div>
									
								<br>
								<!-- <p class="card-title text-dark"> -->
								<h4 class="text-dark card-title">
									<?=$n['workName'];?>
								</h4>
								<!-- </p> -->
								<div class="more more-portfolio">
									<pre><?=$n['text'];?></pre>
								</div>
								<pre class="d-block d-sm-none"><?=$n['text'];?></pre>
							
									
									
							</div>
									
							<!-- </div> -->
							<?php  
					}
					?>
					<?php
				}
			}
				?>

		</div>
	</div>
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