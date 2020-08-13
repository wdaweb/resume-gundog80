<?php
// include_once "./base.php";
$nRes=chkG('nRes');

if($nRes==""){
	if($user){
		$nRes=find('resume_resume',['userID'=>$user])['id'];
	}else{
		$nRes=1;
	}
}

?>
<?php
// echop("短自介");
$do="sayHellow";
// echo $do;
include_once "./front/$do.php";
?>
	<!-- 技能區
	<br>
<div id=skillArea class=twoFieldArea>
	<div class=skillGroup>
		技能群1
	<hr>
	技能1
	<br>
	技能2
	<br>
	技能3...
	<br>
	<a href="">
		<img src="" alt="作品連結">
	</a>
	</div>
	<div class=skillGroup>技能群2 
		<hr>
	<a href="">
		<img src="" alt="作品連結">
	</a>
	</div>
	<div class=skillGroup>技能群3
	<a href="">
		<img src="" alt="作品連結">
	</a>

	</div>
	<div class=otherSkill>其它技能區</div>
</div> -->

<?php
echop("工作經歷");
$do="workExp";
include_once "./front/$do.php";
echop("自介");
$do="selfInterduction";
include_once "./front/$do.php";
echop("其它作品區");
$do="portfolio";
include_once "./front/$do.php";
?>
</div>
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		let resumeChange=function (){
			let getUrlString = location.href;
			let url = new URL(getUrlString);
			let table=url.searchParams.get('table');
			console.log("123")
			// resumeID=$(#resumeInput).attr(value);
			resumeID=$('#resumeInput').val();
			console.log(resumeID)
			window.location.href = `admin.php?table=${table}&resumeID=${resumeID}`;
		}
		
		let showData=function(dom){
			$(dom).children('.more').show()
		}
		let hideData=function(dom){
			$(dom).children('.more').hide()
		}
	</script>

</body>
</html>