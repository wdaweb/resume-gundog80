<?php
$nRes=chkG('resumeID');
if($nRes==""){
    $nRes=$resumes[0]['id'];
}

?>
<div class="container-fluid">
    <div class="row">
        <!-- //使用者列 -->
		<div class="col-12 col-md-3">
            您好，
			<?php
            echo find("resume_userBasicData",$user)['name'];
            ?>
        </div>
        <div class="col-7 col-md-5">
            <!-- //履歷選擇區 -->
            <span class=hidden-xs>選擇編輯履歷：</span>
            <select name="nowRes" id="nowRes" onchange=reld()>
                <?php
            foreach($resumes as $k=>$res){
                $chked=($nRes==$res['id'])?'selected':"";
                ?>
                <option value="<?=$res['id'];?>" label=<?=$res['resumeName'];?> <?=$chked;?>></option>
                <?php
            }
            ?>
            </select>
        </div>
        <div class="col-5 col-md-3 text-right">
            <!-- //功能區     -->
            <a href="?do=addRes">
                <button type="button" class="btn btn-sm btn-success" id=addRes>新增履歷表</button>
            </a>
            <a href="./?nRes=<?=$nRes;?>">
		    	<button type="button" class="btn btn-sm btn-success" id=front >觀看前台</button>
            </a>
        </div>
	</div>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- 導灠列 -->
      <a class="navbar-brand" href="#"><img src="./icon/gundog02.ico" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" >
          <li class="nav-item active">
            <a class="nav-link" href="?do=sayHellow&resumeID=<?=$nRes;?>">編輯招呼語</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="?do=workExp&resumeID=<?=$nRes;?>">編輯學經歷</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="?do=selfInterduction&resumeID=<?=$nRes;?>">編輯自介</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="?do=image&resumeID=<?=$nRes;?>">圖片管理</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="?do=portfolio&resumeID=<?=$nRes;?>">作品集管理</a>
          </li>
        </ul>

      </div>
    </div>

</div>
<script>
function reld(){
    nowresume=$("#nowRes").val()
    location.replace(`?resumeID=${nowresume}`)
}
</script>