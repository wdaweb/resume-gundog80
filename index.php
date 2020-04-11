<?php
include_once "./base.php";
$user=chkSS("login");
$nRes=chkG('nRes');
// echo $user;
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>gundog作品集-求職履歷系統</title>
	<link rel="stylesheet" href="./css/userCss.css">
	<link href="./css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php include_once "./title.php"; ?> 	
	<div class="showArea container" >
		<?php
		include_once "./resume2.php";
		?>
	</div>





</body>
</html>