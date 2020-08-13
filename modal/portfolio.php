<?php
// echop($_GET,'get');
// echop($_POST,'post');
$table=chkg('table');
$id=chkg('id');
$data=find("resume_$table",$id);
$image=unserialize($data['image']);
// echop($image);
?>
<div class=form-group>
    <!-- <div class="card-columns col-12 col-md-6"> -->
    	<div class="card col-12 col-md-6 bg-success text-center" style="padding:5px;">
        
            <div id="carouselBanner<?=$data['id'];?>" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
					if(!empty($image)){
						foreach($image as $img){
							?>
							<div class="carousel-item">
							  <img class="d-block w-100" src="<?=find('resume_image',$img)['path'];?>" alt="First slide">
							</div>
							<?php
						}
					}
				  	?>
  				</div>
  				<a class="carousel-control-prev" href="#carouselBanner<?=$data['id'];?>" role="button" data-slide="prev">
  				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  				  <span class="sr-only">Previous</span>
  				</a>
  				<a class="carousel-control-next" href="#carouselBanner<?=$data['id'];?>" role="button" data-slide="next">
  				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  				  <span class="sr-only">Next</span>
  				</a>
			</div>
    		<!-- <img class=card-image-top style="max-width:90%; max-height:40vh;margin:5px;" src=<?=find('resume_image',$image[0])['path'];?> alt="<?=$data['workName'];?>" -->
    		 <!-- onclick="op('#cover','#cvr','./modal/showImage.php?id=<?=find('resume_image',$data['imageID'])['id'];?>')"> -->
    	</div>
    <!-- </div> -->
	<?php
	if($id!=""){
		?>
		<input type=button name='addPic' value=" 選取圖片"
		  onclick="op('#cover2','#cvr2','./modal/choseImage.php?table=<?=$table;?>&userID=<?=$userID;?>&id=<?=$id;?>')">
		  <!-- onclick="op('#cover2','#cvr2','./modal/choseImage.php?table=<?=$table;?>&userID=<?=$userID;?>&id=<?=$id;?>')"> -->
		 
		<?php
	}
	?>
</div>
<div class=form-grou>
    <label>作品名稱</label>
    <input type="text" name="workName" id="" value=<?=($id=="")?"":$data['workName'];?>>
</div>
<div class=form-grou>
    <label>連結網址</label>
    <input type="url" name="href" id="" value=<?=($id=="")?"":$data['href'];?>>
</div>
<div class=form-grou>
    <label>詳細說明</label>
    <textarea name="text" id="" rows="3" 
	 style="background:#ccffcc;;width:80%;font-size:0.7rem"
	 ><?=$data['text'];?></textarea>
</div>

<script src="../js/jquery-1.9.1.min.js"></script>
<script>
$(".carousel-inner").find(":first").addClass('active');
</script>