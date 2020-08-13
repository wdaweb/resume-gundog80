<?php
	include_once "./base.php";
	$table="resume_resume";
    $userID=chkSS('login');
    $resumes=all($table,['userID'=>$userID])
?>
<fieldset>
    <legend>新增履歷表</legend>
    <form action="./api/addRes.php" method="post">
    <label>履歷表名稱</label>
    <input type="text" name="resName" id="">
    <br>
    <label>複製來源</label>
    <select name="source" id="">
    <?php
    foreach($resumes as $res){
        // echop($res);
        ?>
        <option value="<?=$res['id'];?>" label=<?=$res['resumeName'];?>></option>
        <?php
    }
    ?>
    </select>
    <br>
    <input type="submit" value="確認新增">
    </form>

</fieldset>
