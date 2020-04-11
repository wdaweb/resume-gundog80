<?php
include_once "../base.php";
echop($_GET);
$table=chkg('table');
$id=chkg('id');
$userID=chkSS("login");
$sorID=chkG('id');
$rows=all('image',['userID'=>$userID])
?>
<div class=container>
    <form action="../api/saveImgSelect.php" method="post">
        <input type="hidden" name="id" value=<?=$sorID;?>>
        <input type="hidden" name="table" value=<?=$table;?>>
        <input type="hidden" name="source" 
         value=<?="$table.php?table=$table&action=$id";?>>
        <div class=row>
            <div class="card-columns">
    	        <?php
    	        foreach($rows as $k => $v){
    	            ?>
   	        	    <div class="card bg-success text-center" style="padding:5px;">
   	        	    	<!-- <input type="hidden" name="id[]" value=<?=$v['id'];?>> -->
   	        	    	<img class=card-image-top style="max-width:90%; max-height:20vh;margin:5px;" src=<?=$v['path'];?> alt="<?=$v['fName'];?>"
   	        	    	 onclick="op('#cover','#cvr','./modal/showImage.php?id=<?=$v['id'];?>')">
                        <p class=form-group>
                            <label>選取</label>
                            <input type="radio" name="image[]" id="" value=<?=$v['id'];?>>
                        </p>
                    </div>
    	        	<?php  
    	        }
    	        ?>
            </div>
        </div>

        <input type="submit" value="選用">
    </form>
</div>