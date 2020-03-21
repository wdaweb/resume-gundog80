<?php
include_once "./base.php";
// if(isset($_GET['resumeID'])){
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-4">
			您好，
			<?php
			if($user==""){
				echo "guest <br> 
				<span class=hidden-xs>可於右方註冊新帳號測試</span>";
			}else{
				echo find("userbasicdata",$user)['name'];
			}
			?>
		</div>
		<form class="form-inline col-xs-12 col-md-8 text-right " role="form" action="./api/login.php" method="post">
			<?php
			if($user==""){
				?>
				<div class="col-xs-1 col-md-4"></div>
				<div class="form-group allArea col-5 col-md-2">
					<label class="sr-only" for="">帳號：</label>
					<input type="text" name="acc" id="acc"  class=col-12 placeholder="請輸入帳號">
				</div>
				<div class="form-group allArea col-5 col-md-2">
					<label class="sr-only" for="">密碼:</label>
					<input type="password" name="pw" id="pw" class=col-12 placeholder="密碼">
				</div>
				<div class="form-group">
				<!-- <div class="form-group col-10 col-md-3"> -->
					<button type="submit" class="btn btn-sm btn-success">登入</button>
					<button type="button" class="btn btn-sm btn-success" id=recBtn >註冊</button>
				</div>
				<?php
			}else{
				?>
				<div class="col-xs-1 col-md-8"></div>
				<div class="form-group ">
				<!-- <div class="form-group col-5 col-md-4"> -->
				<!-- <div class="form-group col-10 col-md-3"> -->
					<button type="button" class="btn btn-sm btn-success" id=toAdmin>管理履歷</button>
					<button type="button" class="btn btn-sm btn-success" id=logout >登出</button>
				</div>
				<?php
			}
			?>
		</form>

	</div>
</div>
<script src="./js/jquery-1.9.1.min.js"></script>
<script>
	$("#recBtn").on("click",function(){
		// location.replace("./rec.php")
		location.assign("./rec.php")
	})
	$("#toAdmin").on("click",function(){
		// location.replace("./rec.php")
		location.assign("./admin.php")
	})
	$("#logout").on("click",function(){
		// location.replace("./rec.php")
		login=""
		$.post("./api/unsetSSAJ.php",{login},function(re){
			console.log(re)
			location.reload()
		})
	})


</script>
