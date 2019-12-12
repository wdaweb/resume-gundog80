<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>後台總頁</title>
	<link rel="stylesheet" href="./css/userCss.css">
	<link href="./css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
	<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
			onclick="cl(&#39;#cover&#39;)">X</a>
			<div id="cvr" style="position:absolute; width:100%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>
	<div id=admin>

		<div id=adminMenu>
			<a href="admin.php?table=shortSelfInterduction">編輯短自介</a>
			<a href="admin.php?bbb">bbb</a>
			<a href="admin.php?table=workExperience">編輯工作經歷</a>
			<a href="admin.php?table=selfInterduction">編輯自介</a>
			<a href="admin.php?table=image">圖片管理</a>
			<a href="admin.php?table=portfolio">作品集管理</a>
		</div>

		<div id=optionArea>
			<div style="width:80%;margin:20px auto;">
				<?php
				if (!empty($_GET) && !empty($_GET['table'])){
					include("./admin/" . $_GET['table'] . ".php");
				}
				?>	
			</div>
		</div>
		<div id=previewArea>
			<?php
				if (!empty($_GET) && !empty($_GET['table'])){
					include("./front/" . $_GET['table'] . ".php");
				}			?>	
			
		</div>
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